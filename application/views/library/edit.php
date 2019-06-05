<?php
	$id = $library['libraries_id'];
	$name = $library['libraries_name'];
	$photo = $library['libraries_logo'];
	$address = $library['libraries_address'];
	$phone = $library['libraries_phno'];
	$day = $library['libraries_day'];
	$time = $library['libraries_time'];
?>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Update Existing Library </h4>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo base_url('backend/library/update');?>" method="POST" enctype="multipart/form-data">

						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<input type="hidden" name="oldimage" value="<?php echo $photo ?>">

						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title"> Update Existing Library Form </h4>
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
											<input type="text" class="form-control" id="name" placeholder="Enter Library's Name " name="name" value="<?php echo $name ?> ">
											
										</div>

										<div class="form-group">
											<label for="photo"> Library's Logo </label>
											<input type="file" name="photo" class="form-control" id="photo" value="<?php echo set_value('photo') ?>">
										</div>

										<div class="form-group">
											<label for="name"> Library Logo </label>
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

										<div class="form-group">
											<label for="place"> Library's Address </label>
											<textarea class="form-control" id="place" name="address" rows="5">
												<?php echo $address; ?>
											</textarea>
										</div>

										<div class="form-group">
											<label for="phone"> Phone Number </label>
											<input type="text" class="form-control" id="phone" placeholder="Enter Phone Number " name="phone" value="<?php echo $phone; ?> ">
										</div>

										<div class="form-group">
											<label for="day"> Opening Day </label>
											<input type="text" class="form-control" id="day" placeholder="Monday - Friday " name="day" value="<?php echo $day; ?> ">
										</div>

										<div class="form-group">
											<label for="time"> Opening Time </label>
											<input type="text" class="form-control" id="time" placeholder="9:00 AM - 5:00 PM " name="time" value="<?php echo $time; ?>">
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