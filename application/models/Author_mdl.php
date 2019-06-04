<?php

class Author_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('authors');
		$this->db->order_by('authors_name','ASC');
		$sql = $this->db->get();

		return $sql->result();


	}

	public function store()
	{
		// Get data from FORM input Field
		$name = $this->input->post('name');
		$image = $this->Author_mdl->upload_img('photo');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');
		$dob = $this->input->post('dob');
		$address = $this->input->post('place');
		$bio = $this->input->post('bio');

		$data = array(
			'authors_photo' 	=> $image['data'],
			'authors_name'		=> $name,
			'authors_address'	=> $address,
			'authors_email'		=> $email,
			'authors_gender'	=> $gender,
			'authors_dob'		=> $dob,
			'authors_bio'		=> $bio
		);

		$result = $this->db->insert('authors',$data);

		return $result;


	}

	public function upload_img($image) 
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/author/'.$file; // image/author/1.jpg
		
		$config['upload_path']='image/author/'; 
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

  	public function detail($id)
  	{
  		$this->db->select('*');
  		$this->db->from('authors');
  		$this->db->where('authors_id',$id);
  		$sql = $this->db->get();

  		return $sql->row_array();
  	}

  	public function author_books($id)
  	{
  		$this->db->select('*');
  		$this->db->from('books');
  		$this->db->where('books_authorsid',$id);
  		$sql = $this->db->get();

  		return $sql->result();
  	}

  	public function delete($id)
  	{
  		$sql = "DELETE FROM authors WHERE authors_id =".$id;

  		return $this->db->query($sql);
  	}


  	public function update()
  	{
  		if ($_FILES['newPhoto']['name'] == NULL) 
  		{
  			$image['data'] = $this->input->post('oldimage');
  		}

  		else
  		{
  			$image = $this->Author_mdl->upload_img('newPhoto');
  		}

  		$id = $this->input->post('id');
  		$name = $this->input->post('name');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');
		$dob = $this->input->post('dob');
		$address = $this->input->post('place');
		$bio = $this->input->post('bio');

		$data = array(
			'authors_photo' 	=> $image['data'],
			'authors_name'		=> $name,
			'authors_address'	=> $address,
			'authors_email'		=> $email,
			'authors_gender'	=> $gender,
			'authors_dob'		=> $dob,
			'authors_bio'		=> $bio
		);

		$this->db->where('authors_id',$id);
		$result = $this->db->update('authors',$data);

		return $result;
  	}















}

?>