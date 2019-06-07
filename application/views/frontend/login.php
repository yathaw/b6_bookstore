<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Login/Register</h2>
					<div class="page_link">
						<a href="<?php echo base_url() ?>">Home</a>
						<a href="<?php echo base_url('register') ?>">Register</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?php echo base_url() ?>template/frontend/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="main_btn" href="<?php echo base_url('register') ?>">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>

						<?php if(isset($error_message)): ?>
							<div class="alert alert-dismissible alert-danger">
								<button class="close" type="button" data-dismiss="alert"> X </button>
								<strong> Try again! </strong> <br>
								<?php echo $error_message; ?>
							</div>
						<?php endif; ?>

						<?php if($this->session->flashdata('register')): ?>
							<div class="alert alert-dismissible alert-success">
								<button class="close" type="button" data-dismiss="alert"> X </button>
								<strong> WELCOME!! </strong> <br>
								<?php echo $this->session->flashdata('register') ?>
							</div>
						<?php endif; ?>

						<form action="<?php echo base_url('authentication') ?>" method="POST" class="row login_form" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="name" name="email" placeholder="Email">
								<span class="text-danger"> <?php echo form_error('email') ?> </span>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Password">

								<span class="text-danger"> <?php echo form_error('password') ?> </span>
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="btn submit_btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->