<?php

class Genre_ctrl extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$session = $this->session->userdata('logged_in');
		$role = $session['role'];

		if ($role == 'admin') 
		{
			$this->router->fetch_class();
		}
		else
		{
			redirect('login');
		}
	}
	
	public function index()
	{
		$data['genres']=$this->Genre_mdl->list();
		$data['innerdata'] = 'genre/read';

		$this->load->view('include/backendtemplate',$data);
	}

	public function create()
	{

		$data['innerdata'] = 'genre/create';

		$this->load->view('include/backendtemplate',$data);
	}

	public function store()
	{
		$this->form_validation->set_rules('name', 'Genre', 'trim|required|min_length[2]|xss_clean|is_unique[genres.genres_name]');

		if ($this->form_validation->run() == FALSE ) 
		{
			$data['innerdata'] = 'library/create';
			$this->load->view('include/backendtemplate',$data);
		}
		else
		{
			$this->Genre_mdl->store();

			$this->session->set_flashdata('success', 'Your data is added. You should check in on some of those fields below.');

			return redirect('backend/genre','refresh');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(4);


		$this->Genre_mdl->delete($id);

		$this->session->set_flashdata('delete', 'Your data is delete. You should check in on some of those fields below.');

		return redirect('backend/genre','refresh');

	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['genre'] = $this->Genre_mdl->detail($id);
		$data['books'] = $this->Genre_mdl->genre_books($id);

		$data['innerdata'] = 'genre/detail';

		$this->load->view('include/backendtemplate',$data);

	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['genre'] = $this->Genre_mdl->detail($id);

		$data['innerdata'] = 'genre/edit';

		$this->load->view('include/backendtemplate',$data);

	}

	public function update()
	{
		$this->Genre_mdl->update();

		$this->session->set_flashdata('success', 'Your data is updated. You should check in on some of those fields below.');

		return redirect('backend/genre','refresh');
	}

}

?>