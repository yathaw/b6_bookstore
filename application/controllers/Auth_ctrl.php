<?php 
	/**
	 * 
	 */
	class Auth_ctrl extends CI_Controller
	{
		public function index()
		{
			$data['innerdata'] = 'frontend/login';
			$this->load->view('include/frontendtemplate',$data);
		} 

		public function register()
		{
			$data['innerdata'] = 'frontend/register';
			$this->load->view('include/frontendtemplate',$data);
		}
	}
	
?>