<?php 
class Order_mdl extends CI_Model
{

	public function orderdetail_list()
	{
		$this->db->select('*');
		$this->db->from('orderdetails');
		$this->db->join('orders','orderdetails_voucherno = orders_voucherno','INNER');
		$this->db->order_by('orders_date','DESC');
		$this->db->group_by('orders_voucherno');

		$sql = $this->db->get();

		return $sql->result();
	}

	public function backend_orderdetail($id)
	{
		$this->db->select('*');
		$this->db->from('orderdetails');
		$this->db->join('orders','orderdetails_voucherno = orders_voucherno','INNER');
		$this->db->join('users','users_id = orders_userid','INNER');
		
		$this->db->where('orderdetails_id',$id);
		$this->db->limit(1);
		$sql = $this->db->get();

		return $sql->row_array();
	}

	public function backend_orders($id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('orderdetails','orderdetails_voucherno = orders_voucherno','INNER');
		$this->db->join('books','books_id = orders.orders_bookid','INNER');
		$this->db->join('authors','books_authorsid = authors_id','INNER');
		$this->db->join('genres','books_genresid = genres_id','INNER');
		$this->db->where('orderdetails_id',$id);

		$sql = $this->db->get();

		return $sql->result();
	}

	public function backend_orderconfirm($id)
	{
		$this->db->select('*');
		$this->db->from('orderdetails');
		$this->db->where('orderdetails_id',$id);
		$this->db->limit(1);
		$sql = $this->db->get();

		$orderdetail = $sql->row_array();

		$voucher = $orderdetail['orderdetails_voucherno'];
		$total = $orderdetail['orderdetails_total'];
		$status = 1;

		$data = array(
			'orderdetails_voucherno'	=>	$voucher,
			'orderdetails_total'		=>	$total,
			'orderdetails_status'		=>	$status
		);
		
		$this->db->where('orderdetails_id',$id);
		$result = $this->db->update('orderdetails',$data);


		return $result;
	}
	
	public function addtocart()
	{
		$cart=$this->input->post('cart');
    	$total=$this->input->post('total');

    	$itemarray = array();
    	$itemarray=$cart['mycart'];

        //Date
        $todaydate=date('Y-m-d');

        // Voucher No
        $this->load->helper('string');
		$voucher =  random_string('alnum',5);

		// authentication userid
		$session = $this->session->userdata('logged_in');
		$userid = $session['id'];



		foreach ($itemarray as $item) 
		{
			if ($item) 
			{
				$bookid = $item['id'];
				$quantity = $item['qty'];
			}
			

			$data = array(
				'orders_voucherno'	=>	$voucher,
				'orders_qty'		=>	$quantity,
				'orders_date'		=>	$todaydate,
				'orders_bookid'		=>	$bookid,
				'orders_userid'		=>	$userid,
				'orders_status'		=>	0
			);
            $result = $this->db->insert('orders',$data);

		}

		$orderdetail = array(
			'orderdetails_voucherno'	=>	$voucher,
			'orderdetails_total'		=>	$total,
			'orderdetails_status'		=>	0
		);
		
		$result = $this->db->insert('orderdetails',$orderdetail);

		return $result;
	}

	public function orderdetail()
	{
		$this->db->select('*');
		$this->db->from('orderdetails');
		$this->db->join('orders','orderdetails_voucherno = orders_voucherno','INNER');
		$this->db->order_by('orderdetails_id','DESC');
		$this->db->limit(1);
		$sql = $this->db->get();

		return $sql->row_array();
	}

	public function orderconfirm($voucher, $sessionid)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('books','books_id = orders.orders_bookid','INNER');
		$this->db->where('orders_voucherno',$voucher);
		$this->db->where('orders_userid', $sessionid);
		$sql = $this->db->get();

		return $sql->result();
	}

	public function orderhistory($sessionid)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('orderdetails','orderdetails_voucherno = orders_voucherno','INNER');
		$this->db->group_by('orders_voucherno');
		$this->db->where('orders_userid',$sessionid);
		$this->db->order_by('orders_date','DESC');

		$sql = $this->db->get();



		return $sql->result();

	}

	public function orderhistory_detail($id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('orderdetails','orderdetails_voucherno = orders_voucherno','INNER');
		$this->db->join('books','books_id = orders.orders_bookid','INNER');
		$this->db->where('orderdetails_id',$id);
		$this->db->order_by('orders_date','DESC');

		$sql = $this->db->get();

		return $sql->result();

	}

}

?>