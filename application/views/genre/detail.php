<?php
	$name = $genre['genres_name'];
?>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="d-flex align-items-center">
				<h4 class="card-title"> <?php echo $name; ?> </h4>
				<a href="<?php echo base_url('backend/genre') ?>" class="btn btn-primary ml-auto">
					<i class="fas fa-backward"></i>
					Go Back
				</a>
			</div>
			<div class="row mt-5">
				
				<?php 
					foreach ($books as $book):

					$id = $book->books_id;
					$title = $book->books_title;
					$image = $book->books_cover; 

				?>

				<div class="col-lg-3 col-md-6 col-sm-12 bg-white">
					<img src="<?php echo $image; ?>" class="img-fluid text-center" style="height: 200px;">
					<h3 class="text-center"> <?php echo $title; ?> </h3>
				</div>

				<?php endforeach; ?>

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