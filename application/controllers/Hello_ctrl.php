<?php 

class Hello_ctrl extends CI_Controller
{
	public function index()
	{
		$this->load->view('hello/testone');
	}

	public function hello()
	{
		echo "HELLO";
	}

	public function testtwo()
	{
		$data['name'] = 'Ya Thaw Myat Noe';
		$data['country'] = 'Yangon';
		$data['dob'] = '5. 11. 1997';

		$this->load->view('hello/testtwo',$data);
	}















}




?>