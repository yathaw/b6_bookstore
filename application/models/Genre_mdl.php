<?php 
/**
 * 
 */
class Genre_mdl extends CI_Model
{
	public function list()
	{
		$this->db->select('*');
		$this->db->from('genres');
		$this->db->order_by('genres_name','ASC');
		$sql = $this->db->get();

		return $sql->result();
	}

	public function store()
	{
		// Get data from FORM input Field
		$name = $this->input->post('name');

		$data = array(
			'genres_name'		=> $name
		);

		$result = $this->db->insert('genres',$data);

		return $result;
	}

	public function delete($id)
  	{
  		$sql = "DELETE FROM genres WHERE genres_id =".$id;

  		return $this->db->query($sql);
  	}

  	public function detail($id)
  	{
  		$this->db->select('*');
  		$this->db->from('genres');
  		$this->db->where('genres_id',$id);
  		$sql = $this->db->get();

  		return $sql->row_array();
  	}

  	public function genre_books($id)
  	{
  		$this->db->select('*');
  		$this->db->from('books');
  		$this->db->where('books_genresid',$id);
  		$sql = $this->db->get();

  		return $sql->result();
  	}
}
?>