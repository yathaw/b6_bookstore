<?php 
	/**
	 * 
	 */
	class Auth_ctrl extends CI_Controller
	{
		public function index()
		{
			$data['session'] = $this->session->userdata('logged_in');
			$data['authors'] = $this->Author_mdl->list();
			$data['genres'] = $this->Genre_mdl->list();

			$data['innerdata'] = 'frontend/login';
			$this->load->view('include/frontendtemplate',$data);
		} 

		public function authentication()
		{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');

			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) 
			{
				$data['session'] = $this->session->userdata('logged_in');
				$data['authors'] = $this->Author_mdl->list();
				$data['genres'] = $this->Genre_mdl->list();

				$data['innerdata'] = 'frontend/login';
				$this->load->view('include/frontendtemplate',$data);
			}

			else
			{
				$result = $this->Auth_mdl->login();

				if($result) // success
				{
					$sess_data = array(
						'id' =>	$result['users_id'],
						'email' =>	$result['users_email'],
						'name' =>	$result['users_name'],
						'role' =>	$result['role']
					);

					$this->session->set_userdata('logged_in',$sess_data);

					if ($result['role'] == "admin") 
					{
						redirect('backend/book','refresh');
					}	
					else
					{
						redirect('/');
					}
				}
				else // invalid email or password
				{
					$data = array('error_message' => 'Invalid Email or Password');

					$data['session'] = $this->session->userdata('logged_in');
					$data['authors'] = $this->Author_mdl->list();
					$data['genres'] = $this->Genre_mdl->list();

					$data['innerdata'] = 'frontend/login';
					$this->load->view('include/frontendtemplate',$data);


				}
			}

		}

		public function logout()
		{
			$this->session->unset_userdata('logged_in');
			session_destroy();

			redirect('/');
		}


		public function register()
		{
			$data['session'] = $this->session->userdata('logged_in');
			$data['authors'] = $this->Author_mdl->list();
			$data['genres'] = $this->Genre_mdl->list();

			$data['innerdata'] = 'frontend/register';
			$this->load->view('include/frontendtemplate',$data);
		}

		public function check()
		{
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|is_unique[users.users_name]');

			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|is_unique[users.users_email]');

			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

			if ($this->form_validation->run()==FALSE) 
			{
				$data['session'] = $this->session->userdata('logged_in');
				$data['authors'] = $this->Author_mdl->list();
				$data['genres'] = $this->Genre_mdl->list();

				$data['innerdata'] = 'frontend/register';
				$this->load->view('include/frontendtemplate',$data);
			}
			else
			{
				$this->Auth_mdl->register();

				$this->session->set_flashdata('register', 'Your are our new member. Plase Login and do fantastic things.');

				return redirect('login','refresh');
			}

		}












	}
	
?>