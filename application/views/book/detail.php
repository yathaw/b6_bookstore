<?php
	$title = $book['books_title'];
	$cover = $book['books_cover'];
	$price = $book['books_price'];
	$pdf = $book['books_pdf'];
	$edition = $book['books_edition'];
	$description = $book['books_description'];
	$bookstatus = $book['books_status'];

	$author = $book['authors_name'];
	$genre = $book['genres_name'];
?>



<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="d-flex align-items-center">
				<h4 class="card-title"> Detail </h4>
				<a href="<?php echo base_url('backend/book') ?>" class="btn btn-primary ml-auto">
					<i class="fas fa-backward"></i>
					Go Back
				</a>
			</div>

			<div class="row mt-5">
				<div class="col-md-12">
					<div class="card card-profile">
						<div class="card-header" >

							<div class="d-flex align-items-center">
								<h1> <?php echo $title; ?> </h1>

								<?php if($bookstatus == 1): ?>
								
								<h1 class="text-danger text-right ml-auto"> <?php echo $price ?> </h1>	

								<?php else: ?>	
								<h1 class="text-success text-right ml-auto"> Free </h1>	
								
								<?php endif; ?>
							</div>

							

						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12">
									<h3> Author : 
										<span style="font-size: 15px;"> <?php echo $author; ?> </span> 
									</h3>

									<h3> Genre : 
										<span style="font-size: 15px;"> <?php echo $genre; ?> </span> 
									</h3>
									
									<h3> Edition : 
										<span style="font-size: 15px;"> <?php echo $edition; ?> </span> 
									</h3>

									<img src="<?php echo $cover ?>" alt="..." class="img-fluid">

								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<?php if ($bookstatus == 1):?>
									<h3> Description : 
										<span style="font-size: 15px;"> <?php echo $description; ?> </span> 
									</h3>
							    	<?php else: ?>
									
									<div id="app">
							    		
							    		<div role="toolbar" id="toolbar">
								        	<div id="pager">
								          		<button data-pager="prev">prev</button>
								          		
								          		<button data-pager="next">next</button>
								        	</div>
								        	
								        	<div id="page-mode">
								          		<label class="text-white">Page Mode <input type="number" value="1" min="1"/></label>
								        	</div>
							      		</div>
							      		<div id="viewport-container">
							      			<div role="main" id="viewport"></div>
							  			</div>
							    	</div>
							    	<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="card-footer">

							<?php if ($bookstatus == 0):?>
							
							<h3> Description : 
								<span style="font-size: 15px;"> <?php echo $description; ?> </span> 
							</h3>

							<?php endif; ?>
								
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


<script src="https://unpkg.com/pdfjs-dist@2.0.489/build/pdf.min.js"></script>
<script src="<?php echo base_url(); ?>template/index.js"></script>

<script>
	var base_url = "<?php echo base_url(); ?>";
    var pdf_file = base_url+"<?php echo $pdf ?>";
    console.log(pdf_file);
      initPDFViewer(pdf_file);
</script>