<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Create New Library </h4>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo base_url('backend/library/store');?>" method="POST" enctype="multipart/form-data">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title"> Library Form </h4>
									<a href="<?php echo base_url('backend/library') ?>" class="btn btn-primary ml-auto">
										<i class="fas fa-backward"></i>
										Go Back
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<label for="name"> Library Name </label>
											<input type="text" class="form-control" id="name" placeholder="Enter Library's Name " name="name" value="<?php echo set_value('name') ?>">
											<div class="text-danger">
									 			<?php echo form_error('name'); ?>
									 		</div>
										</div>

										<div class="form-group">
											<label for="photo"> Library's Logo </label>
											<input type="file" name="photo" class="form-control" id="photo" value="<?php echo set_value('photo') ?>">
										</div>

										<!-- <div class="form-group">
											<label for="cover"> Library's Cover </label>
											<input type="file" name="cover" class="form-control" id="cover">
										</div>

										<div class="form-group">
											<label for="gallery"> Gallery </label>
											<input type="file" name="upload_Files[]" class="form-control" id="gallery">
										</div> -->

										<div class="form-group">
											<label for="place"> Library's Address </label>
											<textarea class="form-control" id="place" name="address" rows="5">
												<?php echo set_value('address') ?>
											</textarea>
										</div>

										<div class="form-group">
											<label for="phone"> Phone Number </label>
											<input type="text" class="form-control" id="phone" placeholder="Enter Phone Number " name="phone" value="<?php echo set_value('phone') ?>">
										</div>

										<div class="form-group">
											<label for="day"> Opening Day </label>
											<input type="text" class="form-control" id="day" placeholder="Monday - Friday " name="day" value="<?php echo set_value('day') ?>">
										</div>

										<div class="form-group">
											<label for="time"> Opening Time </label>
											<input type="text" class="form-control" id="time" placeholder="9:00 AM - 5:00 PM " name="time" value="<?php echo set_value('time') ?>">
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