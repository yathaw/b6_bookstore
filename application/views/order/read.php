<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Order List </h4>
				
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title"> Libaries </h4>
								
							</div>
						</div>
						<div class="card-body">
							

							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover" >
									<thead>
										<tr>
											<th> No </th>
											<th>Voucher No</th>
											<th> Order Info </th>
											<th> Order Book </th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th> No </th>
											<th>Voucher No</th>
											<th> Order Date </th>
											<th> Order Total </th>
											<th>Action</th>
										</tr>
									</tfoot>
	<tbody>
		
		<?php 
			$i = 0;
			foreach($orders as $order): 

			$i++;
			$id = $order->orders_id;
			$voucher = $order->orders_voucherno;
			$date = $order->orders_date;
			$total = $order->orderdetails_total;
			$status = $order->orderdetails_status;

			$orderdetailid = $order->orderdetails_id;
		?>

		<tr>
			<td> <?php echo $i; ?> </td>
			<td> <a href="<?php echo base_url('backend/order/detail/'.$orderdetailid) ?>"> <?php echo $voucher; ?> </a> </td>
			<td> <?php echo $date; ?> </td>
			<td> <?php echo $total; ?> </td>
			<td>
				<div class="form-button-action">
					<?php if($status == 0): ?>
					<a href="<?php echo base_url('backend/order/confirm/'.$orderdetailid) ?>" class="btn btn-primary">
						Confirm
					</a>

					<?php else: ?>
					<button class="btn btn-success" disabled="disabled">
						Success
					</button>

				<?php endif ?>
				</div>
			</td>
		</tr>

	<?php endforeach; ?>
	</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container-fluid">
			<nav class="pull-left">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="https://www.themekita.com">
							ThemeKita
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							Help
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
							Licenses
						</a>
					</li>
				</ul>
			</nav>
			<div class="copyright ml-auto">
				2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
			</div>				
		</div>
	</footer>
</div>