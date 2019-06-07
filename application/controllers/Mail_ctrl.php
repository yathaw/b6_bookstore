<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_ctrl extends CI_Controller 
{

	public function index()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['innerdata'] = 'mail/index';
		$this->load->view('include/frontendtemplate',$data);
	}

	public function send()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) 
			{
				$data['session'] = $this->session->userdata('logged_in');
				$data['authors'] = $this->Author_mdl->list();
				$data['genres'] = $this->Genre_mdl->list();

				$data['innerdata'] = 'mail/index';
				$this->load->view('include/frontendtemplate',$data);
			}

			else
			{
				$from_email = "mail@yathawmyatnoe.com";
			    $to_email = $this->input->post('email');

			    //Load email library
			    $this->load->library('email');
			    $this->email->from($from_email, 'Identification');
			    $this->email->to($to_email);
			    $this->email->subject('World Book Admin Email Account');
			    $this->email->message('Email : admin@gmail.com <br> Password : 123');
			    //Send mail
			    
			    if($this->email->send())
			    {
					$data = array('success_email_message' => 'Congragulation Email Send Successfully.');

					$data['session'] = $this->session->userdata('logged_in');
					$data['authors'] = $this->Author_mdl->list();
					$data['genres'] = $this->Genre_mdl->list();

					$data['innerdata'] = 'mail/success';
					$this->load->view('include/frontendtemplate',$data);
				}
			}
	}


}
