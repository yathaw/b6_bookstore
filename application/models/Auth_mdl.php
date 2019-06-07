<?php 
	/**
	 * 
	 */
class Auth_mdl extends CI_Model
{
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password'); //123

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('users_email', $email);
		$this->db->where('users_password',SHA1($password));
		$this->db->limit(1);
		$sql = $this->db->get('');

		return $sql->row_array();
	}

	public function register()
	{
		$name = $this->input->post('name');
		$image = $this->Auth_mdl->upload_img('photo');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$role = "user";

		$data = array(
			'users_photo' 	=> $image['data'],
			'users_name'	=> $name,
			'users_email'	=> $email,
			'users_password' => SHA1($password),
			'users_gender'	=> $gender,
			'users_phno'	=> $phone,
			'users_address' => $address,
			'role'			=> $role
		);

		$result = $this->db->insert('users',$data);

		return $result;

	}

	public function upload_img($image) 
	{
		$file = $_FILES[$image]['name']; // 1.jpg
		$filepath = 'image/user/'.$file; // image/author/1.jpg
		
		$config['upload_path']='image/user/'; 
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



  	public function profile_update()
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
		$password = $this->input->post('oldpassword');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$role = "user";

		$data = array(
			'users_photo' 	=> $image['data'],
			'users_name'	=> $name,
			'users_email'	=> $email,
			'users_password' => $password,
			'users_gender'	=> $gender,
			'users_phno'	=> $phone,
			'users_address' => $address,
			'role'			=> $role
		);

		$this->db->where('users_id',$id);
		$result = $this->db->update('users',$data);

		return $result;
  	}


  	public function password_change()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$image = $this->input->post('photo');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$role = "user";

		$data = array(
			'users_photo' 	=> $image,
			'users_name'	=> $name,
			'users_email'	=> $email,
			'users_password' => SHA1($password),
			'users_gender'	=> $gender,
			'users_phno'	=> $phone,
			'users_address' => $address,
			'role'			=> $role
		);

		$this->db->where('users_id',$id);
		$result = $this->db->update('users',$data);

		return $result;

	}










}






?>