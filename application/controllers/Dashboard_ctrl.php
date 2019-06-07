<?php

/**
 * 
 */
class Dashboard_ctrl extends CI_Controller
{
	
	public function index()
	{
		$today = Date('Y-m-d');

		$data['total_user'] = $this->Dashboard_mdl->user_count();
		$data['total_premium'] = $this->Dashboard_mdl->premium_count();
		$data['total_free'] = $this->Dashboard_mdl->free_count();
		$data['total_order'] = $this->Dashboard_mdl->order_count($today);

		$data['today_orders'] = $this->Dashboard_mdl->today_orders($today);


		$data['innerdata'] = 'dashboard/read';

		$this->load->view('include/backendtemplate',$data);
	}
}

?>