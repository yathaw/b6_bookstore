<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3>So Many Books
							<br /> So Little Time </h3>
						
						<a class="white_bg_btn" href="#">
							Shop Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Home Banner Area =================-->

<!--================Hot Deals Area =================-->
	<section class="hot_deals_area section_gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="<?php echo base_url(); ?>template/frontend/img/product/hot_deals/deal6.jpg" alt="">
						<div class="content">
							<h2>Latest Books</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="hot_deal_box">
						<img class="img-fluid" src="<?php echo base_url(); ?>template/frontend/img/product/hot_deals/deal7.jpg" alt="">
						<div class="content">
							<h2>Hot Deals of this Month</h2>
							<p>shop now</p>
						</div>
						<a class="hot_deal_link" href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Hot Deals Area =================-->

<!--================Clients Logo Area =================-->
	<section class="clients_logo_area">
		<div class="container-fluid">
			<div class="clients_slider owl-carousel">
				<div class="item">
					<img src="img/clients-logo/c-logo-1.jpg" alt="" style="width: 100px; height: 100px">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-2.jpg" alt="" style="width: 100px; height: 100px">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-3.jpg" alt="" style="width: 100px; height: 100px">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-4.jpg" alt="" style="width: 100px; height: 100px">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-5.jpg" alt="" style="width: 150px; height: 100px">
				</div>
			</div>
		</div>
	</section>
<!--================End Clients Logo Area =================-->

<!--================Premium Book Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2> Premium </h2>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
				<div class="row">
					
					<?php 
						foreach ($premiumbooks as $premium):
						$premium_id = $premium->books_id;
						$premium_photo = $premium->books_cover;
						$premium_title = $premium->books_title;
						$premium_price = $premium->books_price;
						$premium_pdf = $premium->books_pdf;
						$premium_edition = $premium->books_edition;
						$premium_description = $premium->books_description;
						$premium_authorsid = $premium->books_authorsid;
						$premium_genresid = $premium->books_genresid;
					?>

					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="<?php echo $premium_photo; ?>" alt="" style="height: 250px">
								<div class="p_icon">
									<a href="#">
										<i class="lnr lnr-heart"></i>
									</a>
									<a href="<?php echo base_url('book/detail/'.$premium_id) ?>">
										<i class="lnr lnr-eye"></i>
									</a>
								</div>
							</div>
							<a href="#" >
								<h4 class="pt-3"> <?php echo $premium_title; ?> </h4>
							</a>
						</div>
							<h5 class="text-center text-danger"> <?php echo $premium_price ?> </h5>

					</div>
					
					<?php endforeach; ?>
				</div>
				
				<div class="row mt-5">
					<div class="main_title">
						<a href="<?php echo base_url('premium') ?>" class="submit_btn arrow" > 
							More
							<span class="lnr lnr-arrow-right"></span> 
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>
<!--================End Premium Book Area =================-->

<!--================Free Book Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2> Free </h2>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
				<div class="row">
					
					<?php 
						foreach ($freebooks as $free):
						$free_id = $free->books_id;
						$free_photo = $free->books_cover;
						$free_title = $free->books_title;
						$free_price = $free->books_price;
						$free_pdf = $free->books_pdf;
						$free_edition = $free->books_edition;
						$free_description = $free->books_description;
						$free_authorsid = $free->books_authorsid;
						$free_genresid = $free->books_genresid;
					?>

					<div class="col col1">
						<div class="f_p_item">
							<div class="f_p_img">
								<img class="img-fluid" src="<?php echo $free_photo; ?>" alt="" style="height: 250px">
								<div class="p_icon">
									<a href="#">
										<i class="lnr lnr-heart"></i>
									</a>
									<a href="<?php echo base_url('book/detail/'.$free_id) ?>">
										<i class="lnr lnr-eye"></i>
									</a>
								</div>
							</div>
							<a href="#" >
								<h4 class="pt-3"> <?php echo $free_title; ?> </h4>
							</a>
						</div>
							<h5 class="text-center text-success"> FREE </h5>

					</div>
					
					<?php endforeach; ?>
				</div>
				
				<div class="row mt-5">
					<div class="main_title">
						<a href="<?php echo base_url('free') ?>" class="submit_btn arrow" > 
							More
							<span class="lnr lnr-arrow-right"></span> 
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>
<!--================End Free Book Area =================-->