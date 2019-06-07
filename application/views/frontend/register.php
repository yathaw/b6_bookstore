<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Login/Register</h2>
					<div class="page_link">
						<a href="<?php echo base_url(); ?>">Home</a>
						<a href="<?php echo base_url('register') ?>">Register</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

<!--================Register Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?php echo base_url() ?>template/frontend/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="main_btn" href="<?php echo base_url('login') ?>">Login To Enter</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner reg_form">
						<h3>Create an Account</h3>
						<form class="row login_form" action="<?php echo base_url('check') ?>" method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								<span class="text-danger">
						 			<?php echo form_error('name'); ?>
						 		</span>
							</div>

							<div class="col-md-12 form-group">
								<input type="file" class="form-control" name="photo" >
							</div>

							<div class="col-md-12 form-group">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="male" value="Male">
								  	<label class="form-check-label" for="male">Male</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
								  <label class="form-check-label" for="female">Female</label>
								</div>
							</div>


							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
								<span class="text-danger">
						 			<?php echo form_error('email'); ?>
						 		</span>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								<span class="text-danger">
						 			<?php echo form_error('password'); ?>
						 		</span>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="pass" name="confirm_password" placeholder="Confirm password">
								<span class="text-danger">
						 			<?php echo form_error('confirm_password'); ?>
						 		</span>
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="phone" placeholder="Phone" >
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="address" placeholder="Address" >
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Register Box Area =================-->