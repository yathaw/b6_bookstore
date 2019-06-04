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

	public function book_detail($id)
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
		$this->db->where('books_id',$id);

		$sql = $this->db->get('');

		$query = $sql->row_array();
		$genresid = $query['books_genresid'];

		return $sql->row_array();
		
	}

	public function relate_book($genresid)
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
		$this->db->where('books_genresid',$genresid);

		$sql = $this->db->get('');


		return $sql->result();
		
	}

	public function author_detail($id)
  	{
  		$this->db->select('*');
  		$this->db->from('authors');
  		$this->db->where('authors_id',$id);
  		$sql = $this->db->get();

  		return $sql->row_array();
  	}

  	public function author_book($id)
  	{
  		$this->db->select('*');
  		$this->db->from('books');
  		$this->db->where('books_authorsid',$id);
  		$sql = $this->db->get();

  		return $sql->result();
  	}



}
?>