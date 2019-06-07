	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Order History</h2>
					<div class="page_link">
						<a href="/">Home</a>
						<a>Order History</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			
			<div class="row order_d_inner">
				
				<?php foreach ($orders as $order):

					// orders
					$orderid = $order->orders_id;
					$voucher = $order->orders_voucherno;
					$qty = $order->orders_qty;
					$date = $order->orders_date;
					$orderstatus = $order->orders_status;

					// orderdetail
					$orderdetailid = $order->orderdetails_id;
					$total = $order->orderdetails_total;

					if ($orderstatus ==0) 
					{
						$status = "Pending";
						$textcolor ="text-warning";
					}	
					else
					{
						$status = "Finised";
						$textcolor = "text-success";
					}

				?>

				<div class="col-lg-4 mt-5 mb-5">
					<div class="details_item">
						<a href="<?php echo base_url('order/detail/'.$orderdetailid) ?>">
							<h4> Order Number : <i> <?= $voucher ?> </i> </h4>
						</a>
						<ul class="list">
							<li>
								<a>
									<span>Date</span> : <?= $date; ?> </a>
							</li>
							<li>
								<a>
									<span>Total</span> : <?= $total; ?> </a>
							</li>
							<li>
								<a>
									<span> Order Status </span> :
									<span class="<?= $textcolor ?>"> <?= $status ?> </span>
								</a>
							</li>
						</ul>
					</div>
				</div>

			<?php endforeach; ?>
			</div>

		</div>
	</section>
	<!--================End Order Details Area =================-->