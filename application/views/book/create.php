<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"> Create New Book </h4>
						
					</div>
					<div class="row">
						<div class="col-md-12">

<form action="<?php echo base_url('backend/book/store') ?>" method="POST" enctype="multipart/form-data">

	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h4 class="card-title">New Book Form </h4>
				<a href="<?php echo base_url('backend/book') ?>" class="btn btn-primary ml-auto">
					<i class="fas fa-backward"></i>
					Go Back
				</a>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="form-group">
						<label for="name"> Title </label>
						<input type="text" class="form-control" id="name" placeholder="Enter Book's Title " name="title" value="<?php echo set_value('title') ?>">

						<div class="text-danger">
				 			<?php echo form_error('title'); ?>
				 		</div>
					</div>

					<div class="form-group">
						<label for="name"> Book's Cover </label>
						<input type="file" name="photo" class="form-control">
						<div class="text-danger">
							<?php if (validation_errors()) 
							{
								echo "Please Select Again.";
							} 
							?>
				 		</div>
					</div>

					<div class="form-group">
						<label> Author's Name </label>
						<select class="form-control" name="authorsid">
							<option value="0"> Choose Author's Name </option>
							
							<?php foreach($authors as $author): 
								$id = $author->authors_id;
								$name = $author->authors_name;
							?>
								<option value="<?php echo $id; ?>">
									<?php echo $name; ?>
								</option>

							<?php endforeach; ?>

						</select>

						<div class="text-danger">
							<?php if (validation_errors()) 
							{
								echo form_error('authorsid');

							?>
				 			<p> Please Select Again. </p>

				 			<?php } ?>
				 		</div>

					</div>

					<div class="form-group">
						<label> Genre's Name </label>
						<select class="form-control" name="genresid">
							<option value="0"> Choose Genre's Name </option>

							<?php foreach($genres as $genre): 
								$id = $genre->genres_id;
								$name = $genre->genres_name;
							?>
								<option value="<?php echo $id; ?>">
									<?php echo $name; ?>
								</option>

							<?php endforeach; ?>
						</select>

						<div class="text-danger">
							<?php if (validation_errors()) 
							{
								echo form_error('authorsid');

							?>
				 			<p> Please Select Again. </p>

				 			<?php } ?>
				 		</div>

					</div>

					<div class="form-group">
						<label for="name"> Book's Status </label>
							<ul class="nav nav-pills nav-primary" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-price-tab" data-toggle="pill" href="#pills-price" role="tab" aria-controls="pills-price" aria-selected="true"> Price </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-free-tab" data-toggle="pill" href="#pills-free" role="tab" aria-controls="pills-free" aria-selected="false"> Free </a>
							</li>
						</ul>
						<div class="tab-content mt-2 mb-3" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-price" role="tabpanel" aria-labelledby="pills-price-tab">
								<input type="text" name="price" class="form-control" placeholder="Enter Book's Price">
							</div>
							<div class="tab-pane fade" id="pills-free" role="tabpanel" aria-labelledby="pills-free-tab">
								<input type="file" name="pdf" class="form-control">
								<small> Please Upload Book's PDF file </small>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="place"> Books's Edition </label>
						<input type="text" name="edition" class="form-control" value="<?php echo set_value('edition') ?>">
						<div class="text-danger">
				 			<?php echo form_error('edition'); ?>
				 		</div>
					</div>

					<div class="form-group">
						<label for="summernote"> Book's Description </label>
						<textarea class="form-control" id="summernote" name="description" rows="5">
							<?php echo set_value('description') ?>
						</textarea>
						<div class="text-danger">
				 			<?php echo form_error('description'); ?>
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