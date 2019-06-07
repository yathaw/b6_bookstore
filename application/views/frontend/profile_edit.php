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
				<form action="<?php echo base_url('profile/update') ?>" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" name="id" value="<?= $id ?>">
					<input type="hidden" name="oldimage" value="<?= $photo ?>">

					<input type="hidden" name="oldpassword" value="<?php echo $password ?>">


					<div class="mt-10">
						<input type="text" name="name" placeholder="Name" class="single-input" value="<?= $name; ?>">
					</div>

					<div class="mt-10">
						<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
							<li class="nav-item">
						    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Profile </a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Profile</a>
						  	</li>
						  
						</ul>
						<div class="tab-content" id="myTabContent">
						  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						  		<img src="<?php echo $photo ?>" class="img-fluid" alt="Old Profile" style="widows: 100px; height: 150px;">

						  	</div>
						  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						  		<input type="file" name="newPhoto">
						  	</div>
						</div>
					</div>

					<div class="mt-10">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php echo $gender == "Male" ? "checked" : ""; ?> >
						  	<label class="form-check-label" for="male">Male</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php echo $gender == "Female" ? "checked" : ""; ?> >
						  <label class="form-check-label" for="female">Female</label>
						</div>
					</div>

					<div class="mt-10">
						<input type="text" name="email" placeholder="Email" required class="single-input" value="<?= $email; ?>">
					</div>

					<div class="mt-10">
						<input type="text" name="phone" placeholder="Phone" required class="single-input" value="<?= $phone; ?>">
					</div>

					<div class="mt-10">
						<textarea class="single-textarea" placeholder="Address" name="address">
							<?= $address; ?>		 	
						</textarea>
					</div>

					<div class="mt-10">
						<button type="submit" class="genric-btn success large">
							Update
						</button>
					</div>

				</form>
			</div>

		</div>
	</div>
</section>
