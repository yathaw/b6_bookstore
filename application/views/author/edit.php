<?php
	$id = $author['authors_id'];
	$name = $author['authors_name'];
	$photo = $author['authors_photo'];
	$address = $author['authors_address'];
	$email = $author['authors_email'];
	$gender = $author['authors_gender'];
	$dob = $author['authors_dob'];
	$bio = $author['authors_bio'];
?>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Edit Existing Author </h4>
				
			</div>
			<div class="row">
				<div class="col-md-12">
<form action="<?php echo base_url('backend/author/update') ?>" method="POST" enctype="multipart/form-data">

	<input type="hidden" name="id" value="<?php echo $id; ?>">
	
	<input type="hidden" name="oldimage" value="<?php echo $photo ?>">

	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h4 class="card-title">Author Form </h4>
				<a class="btn btn-primary ml-auto" href="<?php echo base_url('backend/author') ?>">
					<i class="fas fa-backward"></i>
					Go Back
				</a>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="form-group">
						<label for="name"> Author Name </label>
						<input type="text" class="form-control" id="name" placeholder="Enter Author's Name " name="name" value="<?php echo $name; ?>">
					</div>

					<div class="form-group">
						<label for="name"> Author's Image </label>
							<ul class="nav nav-pills nav-primary" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-oldimage-tab" data-toggle="pill" href="#pills-oldimage" role="tab" aria-controls="pills-oldimage" aria-selected="true"> Old Photo </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-newimage-tab" data-toggle="pill" href="#pills-newimage" role="tab" aria-controls="pills-newimage" aria-selected="false"> New Photo </a>
							</li>
						</ul>
						<div class="tab-content mt-2 mb-3" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-oldimage" role="tabpanel" aria-labelledby="pills-oldimage-tab">
								<img src="<?php echo $photo;?>" class="img-fluid" style="width: 100px; height: 100px">
							</div>
							<div class="tab-pane fade" id="pills-newimage" role="tabpanel" aria-labelledby="pills-newimage-tab">
								<input type="file" name="newPhoto" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-check">
						<label>Gender</label><br/>
						<label class="form-radio-label">
							<input class="form-radio-input" type="radio" name="gender" value="Male"  <?php echo $gender == "Male" ? "checked" : ""; ?> >
							<span class="form-radio-sign">Male</span>
						</label>
						<label class="form-radio-label ml-3">
							<input class="form-radio-input" type="radio" name="gender" value="Female" <?php echo $gender == "Female" ? "checked" : ""; ?>>
							<span class="form-radio-sign">Female</span>
						</label>
					</div>

					<div class="form-group">
						<label for="email"> Author Email </label>
						<input type="email" class="form-control" id="email" placeholder="Enter Author's Email " name="email" value="<?php echo $email; ?>">
						
					</div>

					<div class="form-group">
						<label for="dob"> Author's Date of Birth </label>
						<input type="date" class="form-control" id="dob" placeholder="Enter Author's Date of Birth" name="dob" value="<?php echo $dob; ?>">
					</div>

					<div class="form-group">
						<label for="place"> Author's Birth Place </label>
						<textarea class="form-control" id="place" name="place" rows="5">
							<?php echo $address; ?>
						</textarea>
					</div>

					<div class="form-group">
						<label for="summernote"> Author's Bio </label>
						<textarea class="form-control" id="summernote" name="bio" rows="5">
							<?php echo $bio; ?>
						</textarea>
					</div>
				
				</div>
				
			</div>
		</div>
		<div class="card-action">
			<button type="submit" class="btn btn-primary">
				<i class="fas fa-upload"></i>
				Update
			</button>
			<button type="reset" class="btn btn-danger">
				<i class="fas fa-times"></i>Cancel
			</button>
		</div>
	</div>
</form>
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