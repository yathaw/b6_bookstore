<?php

class Book_ctrl extends CI_Controller
{
	
	public function index()
	{
		$data['books'] = $this->Book_mdl->list();

		$data['innerdata'] = 'book/read';

		$this->load->view('include/backendtemplate',$data);
	}

	public function create()
	{
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();


		$data['innerdata'] = 'book/create';

		$this->load->view('include/backendtemplate',$data);
	}

	public function store()
	{
		// Validation
		$this->form_validation->set_rules('title', 'Book Title', 'trim|required|min_length[2]|xss_clean|is_unique[books.books_title]');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('edition','Edition','required');

		if ($this->form_validation->run() == FALSE ) 
		{
			$data['authors'] = $this->Author_mdl->list();
			$data['genres'] = $this->Genre_mdl->list();

			$data['innerdata'] = 'book/create';
			$this->load->view('include/backendtemplate',$data);
		}
		else
		{
			$this->Book_mdl->store();

			return redirect('backend/book','refresh');
		}

	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['book'] = $this->Book_mdl->detail($id);

		$data['innerdata'] = 'book/detail';

		$this->load->view('include/backendtemplate',$data);

	}

	public function delete()
	{
		$id = $this->uri->segment(4);


		$this->Book_mdl->delete($id);

		$this->session->set_flashdata('delete', 'Your data is delete. You should check in on some of those fields below.');

		return redirect('backend/book','refresh');

	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['book'] = $this->Book_mdl->detail($id);

		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['innerdata'] = 'book/edit';

		$this->load->view('include/backendtemplate',$data);

	}

	public function update()
	{
		$this->Book_mdl->update();

		$this->session->set_flashdata('success', 'Your data is updated. You should check in on some of those fields below.');

		return redirect('backend/book','refresh');

	}
}

?>