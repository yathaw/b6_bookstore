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
					<h2> Edit Profile </h2>
					<div class="page_link">
						<a href="">Home</a>
						<a > Edit Profile </a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Home Banner Area =================-->
<section class="sample-text-area">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h3 class="mb-30 title_color"> Change Your Data </h3>
				<form action="<?php echo base_url('profile/password/update') ?>" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" name="id" value="<?= $id ?>">
					<input type="hidden" name="name" value="<?= $name; ?>">
					<input type="hidden" name="photo" value="<?= $photo ?>">
					<input type="hidden" name="email" value="<?php echo $email ?>">
					<input type="hidden" name="gender" value="<?php echo $gender ?>">
					<input type="hidden" name="phone" value="<?php echo $phone ?>">
					<input type="hidden" name="address" value="<?php echo $address ?>">


					<div class="mt-10">
						<input type="password" name="password" placeholder="Change Password" class="single-input">
					</div>

					

					<div class="mt-10">
						<button type="submit" class="genric-btn success large">
							Change Password
						</button>
					</div>

				</form>
			</div>

		</div>
	</div>
</section>
