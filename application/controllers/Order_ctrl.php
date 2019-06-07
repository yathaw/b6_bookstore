<?php
/**
 * 
 */
class Order_ctrl extends CI_Controller
{

	public function index()
	{
		$session = $this->session->userdata('logged_in');
		$role = $session['role'];

		if ($role == 'admin') 
		{
			
			$data['orders'] = $this->Order_mdl->orderdetail_list();

			$data['innerdata'] = 'order/read';

			$this->load->view('include/backendtemplate',$data);
		}
		else
		{
			redirect('login');
		}

	}

	public function detail()
	{
		$id = $this->uri->segment(4);
		$data['orderdetail'] = $this->Order_mdl->backend_orderdetail($id);
		$data['orders'] = $this->Order_mdl->backend_orders($id);

		$data['innerdata'] = 'order/detail';

		$this->load->view('include/backendtemplate',$data);

	}

	public function order_confirm()
	{
		$id = $this->uri->segment(4);
		$data['orders'] = $this->Order_mdl->backend_orderconfirm($id);

		redirect('backend/order');
	}


	public function order()
	{
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();	

		$data['innerdata'] = 'frontend/cart';

		$this->load->view('include/frontendtemplate',$data);
	}

	public function order_history()
	{
		$session = $this->session->userdata('logged_in');
		$sessionid = $session['id'];

		$data['orders'] = $this->Order_mdl->orderhistory($sessionid);
		
		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['innerdata'] = 'frontend/order_history';
		$this->load->view('include/frontendtemplate',$data);
	}

	public function order_detail()
	{
		$voucher = $this->uri->segment(3);
		$data['orders'] = $this->Order_mdl->orderhistory_detail($voucher);

		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['innerdata'] = 'frontend/order_detail';
		$this->load->view('include/frontendtemplate',$data);
	}
	
	function addtocart()
	{
    	$this->Order_mdl->addtocart();
	}

	function confirm()
	{
		// First - Get vouchernumber from orderdetail table
		$orderdetail = $this->Order_mdl->orderdetail();
		$voucher = $orderdetail['orderdetails_voucherno'];
		//---------------------------------

		// Second - Get session userid
		$sessiondata = $this->session->userdata('logged_in');
		$sessionid = $sessiondata['id'];
		//---------------------------------

		$data['orders'] = $this->Order_mdl->orderconfirm($voucher, $sessionid);
		

		$data['total'] = $orderdetail['orderdetails_total'];
		$data['voucher'] = $voucher;


		$data['session'] = $this->session->userdata('logged_in');
		$data['authors'] = $this->Author_mdl->list();
		$data['genres'] = $this->Genre_mdl->list();

		$data['innerdata'] = 'frontend/confirm';

		$this->load->view('include/frontendtemplate',$data);


	}
}
?>