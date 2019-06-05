<?php 
/**
 * 
 */
class Frontend_mdl extends CI_Model
{

	public function freebook()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
		$this->db->order_by('books_id','DESC');
		$this->db->limit(5);
		$this->db->where('books_status' ,0);
		$sql = $this->db->get();

		return $sql->result();
	}

	public function premiumbook()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
		$this->db->order_by('books_id','DESC');
		$this->db->limit(5);
		$this->db->where('books_status' ,1);
		$sql = $this->db->get();

		return $sql->result();
	}

	public function freebooks()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
		$this->db->order_by('books_id','DESC');
		$this->db->where('books_status' ,0);
		$sql = $this->db->get();

		return $sql->result();
	}

	public function premiumbooks()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
		$this->db->order_by('books_id','DESC');
		$this->db->where('books_status' ,1);
		$sql = $this->db->get();

		return $sql->result();
	}	



}
?>