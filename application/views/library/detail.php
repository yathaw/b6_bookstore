<?php
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
			
			<div class="d-flex align-items-center">
				<h4 class="card-title"> Detail </h4>
				<a href="<?php echo base_url('backend/library') ?>" class="btn btn-primary ml-auto">
					<i class="fas fa-backward"></i>
					Go Back
				</a>
			</div>
				

			<div class="row mt-5">
				<div class="col-md-12">
					<div class="card card-profile">
						<div class="card-header" style="background-image: url('<?php echo base_url() ?>template/backend/examples/assets/img/blogpost.jpg')">
							<div class="profile-picture">
								<div class="avatar avatar-xl">
									<img src="<?php echo $photo ?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="user-profile text-center">
								<div class="name">
									<?php echo $name; ?>
								</div>
								
								<div class="desc">
									<?php echo $address ?>
								</div>
								
							</div>
						</div>
						<div class="card-footer">
							<div class="row user-stats text-center">
								<div class="col">
									
									<div class="title">
										<?php echo $phone ?>
									</div>
								</div>
								<div class="col">
									
									<div class="title">
										<?php echo $day ?>
									</div>
								</div>
								<div class="col">
									
									<div class="title">
										<?php echo $time ?>
									</div>
								</div>
							</div>
						</div>
					</div>
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