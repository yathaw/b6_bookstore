<div class="main-panel">
	<div class="content">
		<div class="panel-header bg-primary-gradient">
			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div>
						<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
					</div>
					
				</div>
			</div>
		</div>
		<div class="page-inner mt--5">
			<div class="mt--2">
				<!-- Row Card No Padding -->
					<div class="row row-card-no-pd">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-users text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Visitors</p>
	          									
	          									<?php if (isset($total_user)): ?>

												<h4 class="card-title">
													<?php echo $total_user?>
												</h4>

												<?php else: ?>

													<h4 class="card-title"> 0 </h4>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Premium Books </p>
												<?php if (isset($total_premium)): ?>

												<h4 class="card-title">
													<?php echo $total_premium?>
												</h4>

												<?php else: ?>

													<h4 class="card-title"> 0 </h4>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-download text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Free Books </p>
												<?php if (isset($total_free)): ?>

												<h4 class="card-title">
													<?php echo $total_free?>
												</h4>

												<?php else: ?>

													<h4 class="card-title"> 0 </h4>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-interface-6 text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category"> Today Order </p>
												<?php if (isset($total_order)): ?>

												<h4 class="card-title">
													<?php echo $total_order?>
												</h4>

												<?php else: ?>

													<h4 class="card-title"> 0 </h4>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="card full-height">
						<div class="card-header">
							<div class="card-head-row">
								<div class="card-title">Today Orders</div>
								
							</div>
						</div>
						<div class="card-body">

							<?php 
								foreach ($today_orders as $order):
								$userphoto = $order->users_photo;
								$name = $order->users_name;

								$voucher = $order->orderdetails_voucherno;

								$orderstatus = $order->orderdetails_status;

								if ($orderstatus == 1) 
								{
									$status = "SUCCESS";
									$statustextcolor = "text-success";
								}
								else
								{
									$status = "Confirm";
									$statustextcolor = "text-warning";
								}

							?>

							<div class="d-flex">
								<div class="avatar avatar-online">
									<span class="avatar-title rounded-circle border border-white bg-info">
										<img src="<?= $userphoto ?>" class="img-fluid image-rounded">
									</span>
								</div>
								<div class="flex-1 ml-3 pt-1">
									<h6 class="text-uppercase fw-bold mb-1"><?= $voucher; ?> <span class="<?= $statustextcolor ?> pl-3"> <?= $status ?> </span></h6>
									<span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
								</div>
								<div class="float-right pt-1">
									<small class="text-muted">8:40 PM</small>
								</div>
							</div>
							<div class="separator-dashed"></div>
							<?php endforeach; ?>
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