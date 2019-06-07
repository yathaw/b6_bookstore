	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Order Detail</h2>
					<div class="page_link">
						<a href="/">Home</a>
						<a>Order Detail</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			<div class="order_details_table">
				<h2>Order Details </h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php 

							foreach($orders as $order): 

								$books = $order->books_title;
								$qty = $order->orders_qty;
								$price = $order->books_price;

								$subtotal = $qty * $price;
								$total = $order->orderdetails_total;
							?>
							<tr>
								<td>
									<p><?php echo $books; ?> </p>
								</td>
								<td>
									<h5>x <?php echo $qty ?> </h5>
								</td>
								<td>
									<p> <?php echo $subtotal; ?> </p>
								</td>
							</tr>
							
							<?php endforeach; ?>
							
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p> <?php echo $total; ?> </p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->