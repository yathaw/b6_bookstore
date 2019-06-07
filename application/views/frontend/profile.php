<?php 
	$id = $user['users_id'];
	$photo = $user['users_photo'];
	$name = $user['users_name'];
	$email = $user['users_email'];
	$password = $user['users_password'];
	$gender = $user['users_gender'];
	$phone = $user['users_phno'];
	$address = $user['users_address'];
?>
<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2> Profile </h2>
					<div class="page_link">
						<a href="">Home</a>
						<a > Profile </a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Home Banner Area =================-->

<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container">
			
			

			<div class="section-top-border">
				<?php if($this->session->flashdata('success')): ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong> Congratulation!</strong> 
							<?php echo $this->session->flashdata('success') ?>
							
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    	<span aria-hidden="true">&times;</span>
						  	</button>
						</div>
					</div>
				</div>
				<?php endif; ?>

				<h3 class="mb-30 title_color">
					<?php echo $name; ?>
				</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="<?php echo $photo; ?>" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20 left-align-p">

						<div class="contact_info">
							<div class="info_item">
								<p>
									<i class="lnr lnr-home"></i>
									<?php echo $address; ?>
								</p>
							</div>

							<div class="info_item">
								<p>
									<i class="lnr lnr-phone-handset"></i>
									<?php echo $phone; ?>
								</p>
							</div>

							<div class="info_item">
								<p>
									<i class="lnr lnr-envelope"></i>
									<?php echo $email; ?>
								</p>
							</div>

							<div class="info_item">
								<a href="<?php echo base_url('profile/edit') ?>" class="genric-btn success circle arrow"> 
									Profile Update 
								</a>

								<a href="<?php echo base_url('profile/password') ?>" class="genric-btn primary circle arrow"> 
									Change Password
								</a>

							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->