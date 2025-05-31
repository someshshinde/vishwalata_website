
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								News Details			
							</h1>	
							<p class="text-white link-nav"><a href="<?=base_url('/');?>.">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=base_url('/news_details'.$news['id']);?>"> News Details</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" style="width: 750px; height: 350px;" src="<?=base_url('frontend/img/News/'.$news['img']);?>"  loading="lazy" alt="">
							</div>
							<div class="details-content">
								<a href="#">
									<h4><?=ucfirst($news['name']);?></h4>
								</a>
								<p  style="text-align: justify;">
									<?=esc($news['description']);?>
								</p>
								
							</div>
							<div class="social-nav row no-gutters">
								<div class="col-lg-6 col-md-6 ">
									<ul class="focials">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 navs">
                                    <?php                          
                                    $class1 = ($news['id'] == 1) ? 'nav-prev disabled-link' : 'nav-prev';
                                    ?>

									<a href="<?=base_url('/news_details/'.base64_encode($news['id']-1));?>" class="<?=$class1?>"><span class="lnr lnr-arrow-left"></span>Prev News</a>
                                    
                                    <?php 
                                        $class2= ($news['id']==count($news_count)) ? 'nav-prev disabled-link' : 'nav-prev'; 
                                    ?>
									
                                     
									<a href="<?=base_url('/news_details/'.base64_encode($news['id']+1));?>" class="<?=$class2;?>">Next News<span class="lnr lnr-arrow-right"></span></a>									
                                    
								</div>
							</div>
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date</span>
										<span><?=formatDate($news['date']);?></span>
									</li>
									<!-- <li class="justify-content-between d-flex">
										<span>End date</span>
										<span>18th April, 2018</span>
									</li> -->
									<!-- <li class="justify-content-between d-flex">
										<span>Ticket Price</span>
										<span>Free of Cost</span>
									</li>														 -->
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Venue</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Place</span>
										<span><?=$news['venue'];?></span>
									</li>
									<!-- <li class="justify-content-between d-flex">
										<span>Street</span>
										<span>Bullevard Street</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>Santa Monica</span>
									</li>														 -->
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Organiser</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Organise By</span>
										<span><?=$news['organiser'];?></span>
									</li>
									<!-- <li class="justify-content-between d-flex">
										<span>Street</span>
										<span>Bullevard Street</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>City</span>
										<span>Santa Monica</span>
									</li>														 -->
								</ul>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->
					
				
			<!-- Start cta-two Area -->
			<?php 
				include_once(APPPATH.'Views/frontend/inc/student_grievance.php');	
				?>
			<!-- End cta-two Area -->						    			
