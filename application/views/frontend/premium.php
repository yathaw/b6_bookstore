
<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2> Premium </h2>
					<div class="page_link">
						<a href="">Home</a>
						<a > Premium Book List </a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Home Banner Area =================-->

<section class="cat_product_area section_gap">
	<div class="container-fluid">
		
		<div class="row flex-row-reverse">
			<div class="col-lg-12">
				<div class="latest_product_inner row">
					
					<?php 
						foreach ($premiumbooks as $book):
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