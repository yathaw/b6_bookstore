<?php
	$id = $genre['genres_id'];
	$name = $genre['genres_name'];
?>
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Create New Genre </h4>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo base_url('backend/genre/update');?>" method="POST">
						
						<input type="hidden" name="id" value="<?php echo $id; ?>">

						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title"> Genre Form </h4>
									<a href="<?php echo base_url('backend/genre') ?>" class="btn btn-primary ml-auto">
										<i class="fas fa-backward"></i>
										Go Back
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<label for="name"> Genre Name </label>
											<input type="text" class="form-control" id="name" placeholder="Enter Genre's Name " name="name" value="<?php echo $name; ?>">
										</div>
									
									</div>
									
								</div>
							</div>
							<div class="card-action">
								<button type="submit" class="btn btn-primary"> 
									<i class="fas fa-upload"></i> Update
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