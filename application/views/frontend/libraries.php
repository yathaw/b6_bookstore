
<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2> Library </h2>
					<div class="page_link">
						<a href="">Home</a>
						<a > libraries </a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row mt-5">
				
				<?php 
					$i =0;
					foreach($libraries as $library): 
					$i++;

					$id = $library->libraries_id;
					$name = $library->libraries_name;
					$logo = $library->libraries_logo;
					$address = $library->libraries_address;
					$phno = $library->libraries_phno;
					$day = $library->libraries_day;
					$time = $library->libraries_time;
				?>
                <div class="col-lg-6">
					<div class="card p-3 form-group">

		                <div class="blog_left_sidebar">
		                    <article class="row blog_item">
		                        <div class="col-md-4">
		                            <div class="blog_info text-right">
		                                
		                                <ul class="blog_meta list pt-5">
		                                    <li>
		                                        <a>
		                                 			<?php echo $phno ?>  
		                                            <i class="lnr lnr-phone-handset"></i>
		                                        </a>
		                                    </li>
		                                    <li>
		                                        <a> <?= $day; ?>
		                                            <i class="lnr lnr-calendar-full"></i>
		                                        </a>
		                                    </li>
		                                    <li>
		                                        <a> <?= $time; ?>
		                                            <i class="lnr lnr-clock"></i>
		                                        </a>
		                                    </li>
		                                    
		                                </ul>
		                            </div>
		                        </div>
		                        <div class="col-md-8">
		                            <div class="blog_post">
		                                <img src="<?php echo $logo; ?>" alt="" class="img-fluid" style="width: 200px; height: 200px;">
		                                <div class="blog_details">
		                                        <h2><?php echo $name; ?> </h2>
		                                    <p> <?= $address ?> </p>
		                                </div>
		                            </div>
		                        </div>
		                    </article>
		                </div>
		            </div>
            	</div>
				
				<span class="border-bottom"></span>
				<?php endforeach; ?>


            </div>
        </div>
    </section>