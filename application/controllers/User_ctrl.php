<?php 
/**
 * 
 */
class User_ctrl extends CI_Controller
{
	
	public function profile()
	{
		$session = $this->session->userdata('logged_in');
		$sessionid = $session['id'];

		$data['user'] = $this->Frontend_mdl->profile($sessionid);



		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['innerdata'] = 'frontend/profile';
		$this->load->view('include/frontendtemplate',$data);
	}

	public function profile_edit()
	{

		$session = $this->session->userdata('logged_in');
		$sessionid = $session['id'];

		$data['user'] = $this->Frontend_mdl->profile($sessionid);

		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['innerdata'] = 'frontend/profile_edit';
		$this->load->view('include/frontendtemplate',$data);
	}

	public function profile_update()
	{
		$this->Auth_mdl->profile_update();

		$this->session->set_flashdata('success', 'You should check in on some of those fields below.');

		return redirect('profile','refresh');
	}

	public function password_form()
	{
		$session = $this->session->userdata('logged_in');
		$sessionid = $session['id'];

		$data['user'] = $this->Frontend_mdl->profile($sessionid);

		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['innerdata'] = 'frontend/profile_changepassword';
		$this->load->view('include/frontendtemplate',$data);
	}

	public function password_change()
	{
		$this->Auth_mdl->password_change();

		$this->session->unset_userdata('logged_in');
		session_destroy();

		$this->session->set_flashdata('register', 'You password is changed. Please login again');


		return redirect('login','refresh');
	}
}
?>