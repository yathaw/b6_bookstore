<?php 
	$id = $book['books_id'];
	$photo = $book['books_cover'];
	$title = $book['books_title'];
	$book_price = $book['books_price'];
	$pdf = $book['books_pdf'];
	$edition = $book['books_edition'];
	$description = $book['books_description'];
	$authorsid = $book['books_authorsid'];
	$genresid = $book['books_genresid'];
	$book_status = $book['books_status'];

	$filesize = filesize($pdf);

	$authorsname = $book['authors_name'];
	$genresname = $book['genres_name'];

	if ($book_status ==1) 
	{
		$status = "Premium";
		$price = $book_price;
	}

	else
	{
		$status = "FREE";
		$price = 'FREE';
	}

?>

<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2> <?php echo $title ?> </h2>
					<div class="page_link">
						<a href="">Home</a>
						<a href=""> <?php echo $status; ?> </a>
						<a > <?php echo $title; ?> </a>
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
					<h3> <?php echo $title; ?> </h3>
					<h2> <?php echo $price; ?> </h2>
					<ul class="list pt-4">
						<li>
							<a class="active" href="#">
								<span>Category</span> : <?php echo $genresname; ?></a>
						</li>
						<li>
							<a href="#">
								<span>Author</span> : <?php echo $authorsname; ?> </a>
						</li>

						<li>
							<a href="#">
								<span>Edition</span> : <?php echo $edition; ?> </a>
						</li>
					</ul>

					<div style="border-top: 1px dotted #d5d5d5" class="mt-3 mb-3"></div>


					<?php if($book_status == 1): ; ?>

					
					<div class="product_count" >
						<label for="qty">Quantity:</label>
						<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
						<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
						 class="increase items-count" type="button">
							<i class="lnr lnr-chevron-up"></i>
						</button>
						<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
						 class="reduced items-count" type="button">
							<i class="lnr lnr-chevron-down"></i>
						</button>
					</div>
					<div class="card_area">
						<a class="main_btn addtocart" href="javascript:void(0)" data-id="<?php echo $id; ?>" data-title="<?php echo $title?>" data-price="<?php echo $price; ?>" data-photo="<?php echo $photo; ?> " data-author="<?php echo $authorsname; ?>" data-genre="<?php echo $genresname; ?>" >
							<i class="lnr lnr-cart mr-3"></i>
							Add to Cart
						</a>
					</div>

					<?php else: ?>
					
					<div class="product_count" >
						<label for="qty">File Size : 
							<?php echo $filesize; ?> GB
						</label>

						
					</div>
					<div class="card_area">
						<a class="main_btn" href="<?php echo ($pdf) ?>" download> 
							<i class="lnr lnr-download mr-3"></i>
							Download 
						</a>
						<span class="text-success"> Available </span>
					</div>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false"> Description </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" id="overall-tab" data-toggle="tab" href="#overall" role="tab" aria-controls="overall" aria-selected="false"> Overall </a>
				</li>
				
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
						<?php echo $description ?>
				</div>

				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes
						enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the
						age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then
						Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant
						Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with
						a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided
						that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it
						was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant
						expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and</p>
					<p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and
						more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of
						spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one
						would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking
						that is more efficient for one person creating less</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Width</h5>
									</td>
									<td>
										<h5>128mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Height</h5>
									</td>
									<td>
										<h5>508mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Depth</h5>
									</td>
									<td>
										<h5>85mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Weight</h5>
									</td>
									<td>
										<h5>52gm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5>yes</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Freshness Duration</h5>
									</td>
									<td>
										<h5>03days</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>When packeting</h5>
									</td>
									<td>
										<h5>Without touch of hand</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Each Box contains</h5>
									</td>
									<td>
										<h5>60pcs</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo base_url(); ?>template/frontend/img/product/single-product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2017 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
								</div>
								<div class="review_item reply">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo base_url(); ?>template/frontend/img/product/single-product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2017 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo base_url(); ?>template/frontend/img/product/single-product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2017 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Post a comment</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn submit_btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="overall" role="tabpanel" aria-labelledby="overall-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Overall</h5>
										<h4>4.0</h4>
										<h6>(03 Reviews)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Based on 3 Reviews</h3>
										<ul class="list">
											<li>
												<a href="#">5 Star
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i> 01</a>
											</li>
											<li>
												<a href="#">4 Star
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i> 01</a>
											</li>
											<li>
												<a href="#">3 Star
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i> 01</a>
											</li>
											<li>
												<a href="#">2 Star
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i> 01</a>
											</li>
											<li>
												<a href="#">1 Star
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i> 01</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo base_url(); ?>template/frontend/img/product/single-product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo base_url(); ?>template/frontend/img/product/single-product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="<?php echo base_url(); ?>template/frontend/img/product/single-product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Add a Review</h4>
								<p>Your Rating:</p>
								<ul class="list">
									<li>
										<a href="#">
											<i class="fa fa-star"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star"></i>
										</a>
									</li>
								</ul>
								<p>Outstanding</p>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Review"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn submit_btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->



<section class="cat_product_area section_gap">
	<div class="container-fluid">
		
		<h2> Related Book </h2>

		<!-- <div class="row flex-row-reverse">
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
		</div> -->
	</div>
</section>