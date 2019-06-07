<div class="main-panel">
	<div class="content">
		<div class="page-inner">

			<div class="row">
				<div class="col-md-4">
					<h4 class="page-title"> Voucher No : <?php echo $orderdetail['orderdetails_voucherno'] ?> </h4>
				</div>
				<div class="col-md-8 ">
					<p class="float-right"> Order Date : <?= $orderdetail['orders_date'] ?> </p> <br><br>
					<h3 class="text-danger float-right"> Total : <?= $orderdetail['orderdetails_total'] ?> </h3>
				</div>
			</div>

			

			<div class="row">

				<div class="col-md-3">
					<div class="card card-profile">
						<div class="card-header" style="background-image: url('<?php echo base_url() ?>template/backend/examples/assets/img/blogpost.jpg')">
							<div class="profile-picture">
								<div class="avatar avatar-xl">
									<img src="<?php echo $orderdetail['users_photo'] ?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="user-profile text-center">
								<div class="name">
									<?php echo $orderdetail['users_name']; ?>
								</div>
								<div class="job">
									<?php echo $orderdetail['users_gender']; ?>
								</div>

								<div class="pt-5 pb-5">
									<h5 class="float-left"> Voucher No : <?= $orderdetail['orders_voucherno'] ?> </h5> <br><br>

									<h5 class="float-left"> Order Date : <?= $orderdetail['orders_date'] ?> </h5> <br><br>
									<h3 class="text-danger float-left"> Total : <?= $orderdetail['orderdetails_total'] ?> </h3>
								</div>
								
							</div>
						</div>
						<div class="card-footer">
							<div class="row user-stats text-center">
								<div class="col">
									
									<div class="title">
										<?php echo $orderdetail['users_email'] ?>
									</div>
								</div>
								<div class="col">
									
									<div class="title">
										<?php echo $orderdetail['users_phno'] ?>
									</div>
								</div>
								<div class="col">
									
									<div class="title">
										<?php echo $orderdetail['users_address'] ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php foreach($orders as $order):
					$bookcover = $order->books_cover;
					$authorimage = $order->authors_photo;
					$author = $order->authors_name;
					$genre = $order->genres_name;
					

					$price = $order->books_price;
					$qty = $order->orders_qty;
					$title = $order->books_title;

					$subtotal = $price * $qty;

				?>

				<div class="col-md-3">
					<div class="card card-post card-round">
						<img class="card-img-top" src="<?php echo $bookcover ?>" alt="Card image cap" class="img-fluid" style="height: 300px;">
						<div class="card-body">
							<div class="d-flex">
								<div class="avatar">
									<img src="<?php echo $authorimage; ?>" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info-post ml-2">
									<p class="username">
										<?= $author ?>
									</p>
									<p class="date text-muted">
										<?= $genre; ?>
									</p>
								</div>
							</div>
							<div class="separator-solid"></div>
							
							<h3 class="card-title">
								<a href="#">
									<?= $title; ?>
								</a>
							</h3>
							<p class="card-text"> 
								<?= $price ?> x
								<?= $qty ?>
							</p>
							<a  class="btn btn-primary btn-rounded btn-sm text-white">
								<?= $subtotal; ?>
							</a>
						</div>
					</div>
				</div>


				<?php endforeach; ?>

			</div>

		</div>
	</div>
</div>