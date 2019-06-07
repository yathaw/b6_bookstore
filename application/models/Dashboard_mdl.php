<?php
/**
 * 
 */
class Dashboard_mdl extends CI_Model
{
	public function user_count()
	{
		$num_rows = $this->db->count_all("users");
		return $num_rows;
	}

	public function premium_count()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->where('books_status',1);
		$num_rows = $this->db->count_all_results();
		return $num_rows;
	}

	public function free_count()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->where('books_status',0);
		$num_rows = $this->db->count_all_results();
		return $num_rows;
	}

	public function order_count($today)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orders_date',$today);
		$num_rows = $this->db->count_all_results();
		return $num_rows;
	}

	public function today_orders($today)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('orderdetails','orderdetails_voucherno = orders_voucherno','INNER');
		$this->db->join('users','users_id = orders_userid','INNER');
		$this->db->where('orders_date',$today);
		$sql = $this->db->get();
		return $sql->result();
	}


}

?>