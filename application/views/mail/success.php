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
						<h3> Success! </h3>

						<?php if(isset($success_email_message)): ?>
							<p class="text-success">
								<?php echo $success_email_message; ?>
							</p>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->