<?php

class Frontend_ctrl extends CI_Controller
{

	
	public function index()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['freebooks'] = $this->Frontend_mdl->freebook();
		$data['premiumbooks'] = $this->Frontend_mdl->premiumbook();


		$data['innerdata'] = 'frontend/index';

		$this->load->view('include/frontendtemplate',$data);
	}

	public function book_detail()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$id = $this->uri->segment(3);

		$data['book'] = $this->Book_mdl->detail($id);

		$data['innerdata'] = 'frontend/book_detail';

		$this->load->view('include/frontendtemplate',$data);

	}

	public function author_detail()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$id = $this->uri->segment(3);

		$data['author'] = $this->Author_mdl->detail($id);
		$data['books'] = $this->Author_mdl->author_books($id);

		$data['innerdata'] = 'frontend/author_detail';

		$this->load->view('include/frontendtemplate',$data);

	}

	public function genre_detail()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$id = $this->uri->segment(3);

		$data['genre'] = $this->Genre_mdl->detail($id);
		$data['books'] = $this->Genre_mdl->genre_books($id);

		$data['innerdata'] = 'frontend/genre_detail';

		$this->load->view('include/frontendtemplate',$data);

	}

	public function libraries()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['libraries'] = $this->Library_mdl->list();

		$data['innerdata'] = 'frontend/libraries';

		$this->load->view('include/frontendtemplate',$data);
	}

	public function all()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['allbooks'] = $this->Book_mdl->list();

		$data['innerdata'] = 'frontend/all';

		$this->load->view('include/frontendtemplate',$data);
	}

	public function free()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['freebooks'] = $this->Frontend_mdl->freebooks();

		$data['innerdata'] = 'frontend/free';

		$this->load->view('include/frontendtemplate',$data);
	}

	public function premium()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['premiumbooks'] = $this->Frontend_mdl->premiumbooks();

		$data['innerdata'] = 'frontend/premium';

		$this->load->view('include/frontendtemplate',$data);
	}

	


}

?>