<?php

class Library_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('libraries');
		$this->db->order_by('libraries_name','ASC');
		$sql = $this->db->get();

		return $sql->result();


	}

	public function store()
	{
		// Get data from FORM input Field
		$name = $this->input->post('name');
		$image = $this->Library_mdl->upload_img('photo');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$day = $this->input->post('day');
		$time = $this->input->post('time');

		$data = array(
			'libraries_name'		=> $name,
			'libraries_logo' 		=> $image['data'],
			'libraries_cover'		=> '',
			'libraries_gallery'		=> '',
			'libraries_address'		=> $address,
			'libraries_phno'		=> $phone,
			'libraries_day'			=> $day,
			'libraries_time'		=> $time,
		);

		$result = $this->db->insert('libraries',$data);

		return $result;


	}

	public function upload_img($image) 
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/library/logo'.$file; // image/author/1.jpg
		
		$config['upload_path']='image/library/logo';
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
  		$this->db->from('libraries');
  		$this->db->where('libraries_id',$id);
  		$sql = $this->db->get();

  		return $sql->row_array();
  	}

  	public function delete($id)
  	{
  		$sql = "DELETE FROM libraries WHERE libraries_id =".$id;

  		return $this->db->query($sql);
  	}



}

?>