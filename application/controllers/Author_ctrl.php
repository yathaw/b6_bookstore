<?php

class Author_ctrl extends CI_Controller
{
	
	public function index()
	{
		$data['authors'] = $this->Author_mdl->list();

		$data['innerdata'] = 'author/read';

		$this->load->view('include/backendtemplate',$data);
	}

	public function create()
	{
		$data['innerdata'] = 'author/create';

		$this->load->view('include/backendtemplate',$data);
	}

	public function store()
	{
		// Validation
		$this->form_validation->set_rules('name', 'Author Name', 'trim|required|min_length[5]|xss_clean|is_unique[authors.authors_name]');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		$this->form_validation->set_rules('place','Place','required');
		$this->form_validation->set_rules('bio','Biography','required');

		if ($this->form_validation->run() == FALSE ) 
		{
			$data['innerdata'] = 'author/create';
			$this->load->view('include/backendtemplate',$data);
		}
		else
		{
			$this->Author_mdl->store();

			$this->session->set_flashdata('success', 'Your data is added. You should check in on some of those fields below.');

			return redirect('backend/author','refresh');
		}
	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['author'] = $this->Author_mdl->detail($id);
		$data['books'] = $this->Author_mdl->author_books($id);

		$data['innerdata'] = 'author/detail';

		$this->load->view('include/backendtemplate',$data);

	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['author'] = $this->Author_mdl->detail($id);

		$data['innerdata'] = 'author/edit';

		$this->load->view('include/backendtemplate',$data);

	}

	public function delete()
	{
		$id = $this->uri->segment(4);


		$this->Author_mdl->delete($id);

		$this->session->set_flashdata('delete', 'Your data is delete. You should check in on some of those fields below.');

		return redirect('backend/author','refresh');

	}


	public function update()
	{
		$this->Author_mdl->update();

		$this->session->set_flashdata('success', 'Your data is updated. You should check in on some of those fields below.');

		return redirect('backend/author','refresh');

	}










}

?>