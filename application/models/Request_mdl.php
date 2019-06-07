<?php
/**
 * 
 */
class Request_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('requestbooks');
		$this->db->join('users','requestbooks_userid = users_id','INNER');
		$this->db->order_by('requestbooks_date','DESC');
		$sql = $this->db->get();

		return $sql->result();
	}
	public function store()
	{
		$title=$this->input->post('title');
    	$description=$this->input->post('description');
    	$author = $this->input->post('author');

    	//Date
        $todaydate=date('Y-m-d');

        // Sessionuser
        $session = $this->session->userdata('logged_in');
		$sessionid = $session['id'];

        $data = array(
			'requestbooks_title' 		=> $title,
			'requestbooks_author'		=> $author,
			'requestbooks_description'	=> $description,
			'requestbooks_date'			=> $todaydate,
			'requestbooks_userid'		=> $sessionid
		);

		$result = $this->db->insert('requestbooks',$data);

		return $result;

	}
	
}

?>