<?php
	$id = $book['books_id'];
	$title = $book['books_title'];
	$cover = $book['books_cover'];
	$price = $book['books_price'];
	$pdf = $book['books_pdf'];
	$edition = $book['books_edition'];
	$description = $book['books_description'];
	$bookstatus = $book['books_status'];

	$bookauthorid = $book['books_authorsid'];
	$bookgenreid = $book['books_genresid'];

	$author = $book['authors_name'];
	$genre = $book['genres_name'];

	if ($bookstatus == 1) //premium
	{
		$price_status = "active";
		$free_status = "";
	}
	else
	{
		$free_status = "active";
		$price_status = "";
	}
?>

<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"> Edit Existing Book </h4>
						
					</div>
					<div class="row">
						<div class="col-md-12">

<form action="<?php echo base_url('backend/book/update') ?>" method="POST" enctype="multipart/form-data">

	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="oldimage" value="<?php echo $cover; ?>">
	<input type="hidden" name="oldpdf" value="<?php echo $pdf; ?>">


	<div class="card">
		<div class="card-header">
			<div class="d-flex align-items-center">
				<h4 class="card-title">Update Existing Book </h4>
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
						<input type="text" class="form-control" id="name" placeholder="Enter Book's Title " name="title" value="<?php echo $title ?>">
					</div>

					<div class="form-group">
						<label for="name"> Book's Cover </label>
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
								<img src="<?php echo $cover;?>" class="img-fluid" style="width: 100px; height: 100px">
							</div>
							<div class="tab-pane fade" id="pills-newimage" role="tabpanel" aria-labelledby="pills-newimage-tab">
								<input type="file" name="newPhoto" class="form-control">
							</div>
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
								<option value="<?php echo $id; ?>" <?php if ($id == $bookauthorid) { echo "selected";} ?> >
									<?php echo $name; ?>
								</option>

							<?php endforeach; ?>

						</select>

					</div>

					<div class="form-group">
						<label> Genre's Name </label>
						<select class="form-control" name="genresid">
							<option value="0"> Choose Genre's Name </option>

							<?php foreach($genres as $genre): 
								$id = $genre->genres_id;
								$name = $genre->genres_name;
							?>
								<option value="<?php echo $id; ?>" <?php if ($id == $bookgenreid) { echo "selected";} ?> >
									<?php echo $name; ?>
								</option>

							<?php endforeach; ?>
						</select>

					</div>

					<div class="form-group">
						<label for="name"> Book's Status </label>
							<ul class="nav nav-pills nav-primary" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link <?php echo $price_status; ?> " id="pills-price-tab" data-toggle="pill" href="#pills-price" role="tab" aria-controls="pills-price" aria-selected="true"> Price </a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php echo $free_status ?>" id="pills-free-tab" data-toggle="pill" href="#pills-free" role="tab" aria-controls="pills-free" aria-selected="false"> Free </a>
							</li>
						</ul>
						
						<?php if($bookstatus ==1): ?>

						<div class="tab-content mt-2 mb-3" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-price" role="tabpanel" aria-labelledby="pills-price-tab">
								<input type="text" name="price" class="form-control" placeholder="Enter Book's Price" value="<?php echo $price; ?>">
							</div>
							<div class="tab-pane fade" id="pills-free" role="tabpanel" aria-labelledby="pills-free-tab">
								<input type="file" name="premiumPDF" class="form-control">
								<small> Please Upload Book's PDF file </small>
							</div>
						</div>

						<?php else: ?>

						<div class="tab-content mt-2 mb-3" id="pills-tabContent">
							<div class="tab-pane fade  " id="pills-price" role="tabpanel" aria-labelledby="pills-price-tab">
								<input type="text" name="price" class="form-control" placeholder="Enter Book's Price">
							</div>
							<div class="tab-pane fade show active" id="pills-free" role="tabpanel" aria-labelledby="pills-free-tab">
								<div class="row">
									<div class="col-5 col-md-4">
										<div class="nav flex-column nav-pills nav-primary nav-pills-no-bd nav-pills-icons" id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
											<a class="nav-link active" id="v-pills-oldpdf-tab-icons" data-toggle="pill" href="#v-pills-oldpdf-icons" role="tab" aria-controls="v-pills-oldpdf-icons" aria-selected="true">
												
												Old
											</a>
											<a class="nav-link" id="v-pills-newpdf-tab-icons" data-toggle="pill" href="#v-pills-newpdf-icons" role="tab" aria-controls="v-pills-newpdf-icons" aria-selected="false">
												New
											</a>
										</div>
									</div>
									<div class="col-7 col-md-8">
										<div class="tab-content" id="v-pills-with-icon-tabContent">
											<div class="tab-pane fade show active" id="v-pills-oldpdf-icons" role="tabpanel" aria-labelledby="v-pills-oldpdf-tab-icons">
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
											</div>
											<div class="tab-pane fade" id="v-pills-newpdf-icons" role="tabpanel" aria-labelledby="v-pills-newpdf-tab-icons">
												<input type="file" name="freePDF" class="form-control">
												<small> Please Upload Book's PDF file </small>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<?php endif; ?>

					</div>

					<div class="form-group">
						<label for="place"> Books's Edition </label>
						<input type="text" name="edition" class="form-control" value="<?php echo $edition; ?> ">
					</div>

					<div class="form-group">
						<label for="summernote"> Book's Description </label>
						<textarea class="form-control" id="summernote" name="description" rows="5">
							<?php echo $description; ?>
						</textarea>
						
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


<script src="https://unpkg.com/pdfjs-dist@2.0.489/build/pdf.min.js"></script>
<script src="<?php echo base_url(); ?>template/index.js"></script>

<script>
	var base_url = "<?php echo base_url(); ?>";
    var pdf_file = base_url+"<?php echo $pdf ?>";
    console.log(pdf_file);
      initPDFViewer(pdf_file);
</script>