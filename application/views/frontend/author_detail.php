<?php 
	$id = $author['authors_id'];
	$photo = $author['authors_photo'];
	$name = $author['authors_name'];
	$address = $author['authors_address'];
	$email = $author['authors_email'];
	$gender = $author['authors_gender'];
	$dob = $author['authors_dob'];
	$bio = $author['authors_bio'];

?>

<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2> <?php echo $name ?> </h2>
					<div class="page_link">
						<a href="">Home</a>
						<a > <?php echo $name; ?> </a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Home Banner Area =================-->

<!--================Single Product Area =================-->
<div class="product_image_area">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="s_product_img text-center">
					<img src="<?php echo $photo ?>" class="img-fluid" style="height: 400px;">
					
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text" style="margin-top: 20px;">
					<h3> <?php echo $name; ?> </h3>
					<ul class="list pt-4">
						<li>
							<a>
								<span>Date Of Birth</span> : 
								<?php echo $dob; ?>
							</a>
						</li>
						<li>
							<a>
								<span>Gender</span> : <?php echo $gender; ?> 
							</a>
						</li>

						<li>
							<a>
								<span>Address</span> : <?php echo $address; ?> 
							</a>
						</li>

						<li>
							<a>
								<span>Biography</span> : <?php echo $bio; ?> 
							</a>
						</li>
					</ul>

					
				</div>
			</div>
		</div>
	</div>
</div>



<section class="cat_product_area section_gap">
	<div class="container-fluid">
		
		<h2> <?php echo $name; ?>'s Book </h2>

		<div class="row flex-row-reverse">
			<div class="col-lg-12">
				<div class="latest_product_inner row">
					
					<?php 
						foreach ($books as $book):
						$bookid = $book->books_id;
						$title = $book->books_title;
						$image = $book->books_cover;
						$bookstatus = $book->books_status;
						$price = $book->books_price;

						if ($price) 
						{
						 	$status = $price;
						 	$color = "text-danger";
						}
						else
						{
							$status = "FREE";
							$color = "text-success";
						}
					?>

					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="<?php echo $image ?>" alt="" style="height: 400px;">
								<div class="p_icon">
									<a href="#">
										<i class="lnr lnr-heart"></i>
									</a>
									<a href="<?php echo base_url('book/detail/'.$bookid) ?>">
										<i class="lnr lnr-eye"></i>
									</a>
								</div>
							</div>
							<a href="#">
								<h4> <?php echo $title; ?> </h4>
							</a>
							<h5 class="<?php echo $color; ?>"> <?php echo $status ?> </h5>
						</div>
					</div>

					<?php endforeach; ?>
				</div>

			</div>
		</div>
	</div>
</section>