<?php

class Frontend_ctrl extends CI_Controller
{

	
	public function index()
	{
		
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['freebooks'] = $this->Frontend_mdl->freebook();
		$data['premiumbooks'] = $this->Frontend_mdl->premiumbook();


		$data['innerdata'] = 'frontend/index';

		$this->load->view('include/frontendtemplate',$data);
	}

	public function book_detail()
	{
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$id = $this->uri->segment(3);

		$data['book'] = $this->Frontend_mdl->book_detail($id);
		$data['related_books'] = $this->Frontend_mdl->relate_book($id);


		$data['innerdata'] = 'frontend/book_detail';

		$this->load->view('include/frontendtemplate',$data);

	}

	public function author_detail()
	{
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$id = $this->uri->segment(3);

		$data['author'] = $this->Frontend_mdl->author_detail($id);
		$data['books'] = $this->Frontend_mdl->author_book($id);

		$data['innerdata'] = 'frontend/author_detail';

		$this->load->view('include/frontendtemplate',$data);

	}

}

?>