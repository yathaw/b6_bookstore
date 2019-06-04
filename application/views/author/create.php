<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Create New Author </h4>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo base_url('backend/author/store');?>" method="POST" enctype="multipart/form-data">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Author Form </h4>
									<a href="<?php echo base_url('backend/author') ?>" class="btn btn-primary ml-auto">
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
											<input type="text" class="form-control" id="name" placeholder="Enter Author's Name " name="name" value="<?php echo set_value('name') ?>">
											
											<div class="text-danger">
									 			<?php echo form_error('name'); ?>
									 		</div>

										</div>

										<div class="form-group">
											<label for="name"> Author's Image </label>
											<img src="" id="showimg">
											<input type="file" name="photo" class="form-control">
										</div>

										<div class="form-check">
											<label>Gender</label><br/>
											<label class="form-radio-label">
												<input class="form-radio-input" type="radio" name="gender" value="Male"  checked="">
												<span class="form-radio-sign">Male</span>
											</label>
											<label class="form-radio-label ml-3">
												<input class="form-radio-input" type="radio" name="gender" value="Female">
												<span class="form-radio-sign">Female</span>
											</label>
										</div>

										<div class="form-group">
											<label for="email"> Author Email </label>
											<input type="email" class="form-control" id="email" placeholder="Enter Author's Email " name="email" value="<?php echo set_value('email') ?>">
											
											<div class="text-danger">

												<?php echo form_error('email'); ?>
											</div>
										</div>

										<div class="form-group">
											<label for="dob"> Author's Date of Birth </label>
											<input type="date" class="form-control" id="dob" placeholder="Enter Author's Date of Birth" name="dob" value="<?php echo set_value('dob') ?>">
											
											<div class="text-danger">
												<?php echo form_error('dob'); ?>
											</div>
										</div>

										<div class="form-group">
											<label for="place"> Author's Address </label>
											<textarea class="form-control" id="place" name="place" rows="5">
												<?php echo set_value('place') ?>
											</textarea>
											<div class="text-danger">
												<?php echo form_error('place'); ?>
											</div>
										</div>

										<div class="form-group">
											<label for="summernote"> Author's Bio </label>
											<textarea class="form-control" id="summernote" name="bio" rows="5">
												<?php echo set_value('bio') ?>
												
											</textarea>
											<div class="text-danger">
												<?php echo form_error('bio'); ?>
											</div>
										</div>
									
									</div>
									
								</div>
							</div>
							<div class="card-action">
								<button type="submit" class="btn btn-primary"> 
									<i class="fas fa-save"></i> Save
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