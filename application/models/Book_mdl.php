<?php

class Book_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
		// $this->db->order_by('books_title','ASC');
		$sql = $this->db->get();

		return $sql->result();
	}

	public function store()
	{
		// Get data from FORM input Field
		$title = $this->input->post('title');
		$photo = $this->Book_mdl->upload_img('photo');
		$authorsid = $this->input->post('authorsid');
		$genresid = $this->input->post('genresid');
		$price = $this->input->post('price');
		$pdf_file = $this->Book_mdl->upload_pdf('pdf');
		$edition = $this->input->post('edition');
		$description = $this->input->post('description');


		if ($price) 
		{
			$pdf ='';
			$status = 1; // Premium
		}

		else
		{
			$pdf = $pdf_file['data'];
			$status = 0; // Free
		}

		

		$data = array(
			'books_cover' 			=> $photo['data'],
			'books_title'			=> $title,
			'books_price'			=> $price,
			'books_pdf'				=> $pdf,
			'books_edition'			=> $edition,
			'books_description'		=> $description,
			'books_authorsid'		=> $authorsid,
			'books_genresid'		=> $genresid,
			'books_status'			=> $status
		);

		$result = $this->db->insert('books',$data);

		return $result;


	}

	public function upload_img($image) 
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/book/'.$file; // image/author/1.jpg
		
		$config['upload_path']='image/book/'; 
		$config['allowed_types']= 'gif|jpg|jpeg|png';

		$this->load->library('upload',$config);
		
		if ($this->upload->do_upload($image)) 
		{
			$userfile = array( 
				'state' => 1,
				'data' => $filepath );
		} 
		else 
		{
			$userfile = array( 
				'state' => 0,
				'data' => $this->upload->display_errors());
		}
			return $userfile;
  	}

  	public function upload_pdf($pdf_file)
	{
		$file = $_FILES[$pdf_file]['name'];
		$filepath = 'upload/'.$file;


		$config['upload_path']='upload/';
		$config['allowed_types']= 'pdf|csv|doc';

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload($pdf_file)) 
		{
			$userfile = array(
				'state' => 1,
				'data' => $filepath
				);
		}
		else
		{
			$userfile = array(
				'state' => 0,
				'data' => $this->upload->display_errors()
				);
		}

		return $userfile;
	}

	public function detail($id)
  	{
  		$this->db->select('*');
  		$this->db->from('books');
  		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
  		$this->db->where('books_id',$id);
  		$sql = $this->db->get();

  		return $sql->row_array();
  	}

  	public function delete($id)
  	{
  		$sql = "DELETE FROM books WHERE books_id =".$id;

  		return $this->db->query($sql);
  	}

  	public function update()
  	{
  		$id = $this->input->post('id');
  		$title = $this->input->post('title');
		$authorsid = $this->input->post('authorsid');
		$genresid = $this->input->post('genresid');
		$price = $this->input->post('price');
		$pdf_file = $this->Book_mdl->upload_pdf('pdf');
		$edition = $this->input->post('edition');
		$description = $this->input->post('description');

  		if ($_FILES['newPhoto']['name'] == NULL) 
  		{
  			$photo['data'] = $this->input->post('oldimage');
  		}

  		else
  		{
  			$photo = $this->Book_mdl->upload_img('newPhoto');
  		}

		if ($price) // Premium
		{
			$status = 1; 
		}

		else // Free
		{
			$status = 0; 

	  		if ($_FILES['freePDF']['name'] != NULL) 
	  		{
	  			$pdf_file =$this->Book_mdl->upload_pdf('freePDF');
	  			$pdf = $pdf_file['data'];
	  		}

	  		elseif ($_FILES['premiumPDF']['name'] != NULL ) 
	  		{
	  			$pdf_file =$this->Book_mdl->upload_pdf('premiumPDF');
	  			$pdf = $pdf_file['data'];
	  		} 
	  		else
	  		{
	  			$pdf = $this->input->post('oldpdf');

	  		}


		}

		

		$data = array(
			'books_cover' 			=> $photo['data'],
			'books_title'			=> $title,
			'books_price'			=> $price,
			'books_pdf'				=> $pdf,
			'books_edition'			=> $edition,
			'books_description'		=> $description,
			'books_authorsid'		=> $authorsid,
			'books_genresid'		=> $genresid,
			'books_status'			=> $status
		);

		$this->db->where('books_id',$id);
		$result = $this->db->update('books',$data);

		return $result;
  	}
}

?>