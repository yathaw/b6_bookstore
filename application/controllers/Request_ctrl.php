<?php 

/**
 * 
 */
class Request_ctrl extends CI_Controller
{
	public function index()
	{
		$session = $this->session->userdata('logged_in');
		$role = $session['role'];

		if ($role == 'admin') 
		{
			$data['requests'] = $this->Request_mdl->list();

			$data['innerdata'] = 'request/read';

			$this->load->view('include/backendtemplate',$data);
		}
		else
		{
			redirect('login');
		}
	}
	
	public function form()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();


		$data['innerdata'] = 'frontend/request';

		$this->load->view('include/frontendtemplate',$data);
	}

	public function send()
	{
		$result = $this->Request_mdl->store();

			$data['session'] = $this->session->userdata('logged_in');
			$data['authors'] = $this->Author_mdl->list();
			$data['genres'] = $this->Genre_mdl->list();


			$data['innerdata'] = 'frontend/request_success';

			$this->load->view('include/frontendtemplate',$data);

	}
	
}
?>