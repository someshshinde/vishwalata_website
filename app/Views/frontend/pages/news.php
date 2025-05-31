
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								News				
							</h1>	
							<p class="text-white link-nav"><a href="<?=base_url('/');?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=base_url('/news/'.base64_encode(env('NEWS_PAGE_LOAD_LIMIT')));?>"> News</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
                        <?php foreach($newses as $news): ?>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" style="width: 263px; height: 220px;" src="<?=base_url('frontend/img/News/'.$news['img']);?>" loading="lazy" alt="<?=$news['name'];?>">
								</div>
								<div class="detials col-12 col-md-6">
									<p><?=formatDate($news['date']);?></p>
									<a href="<?=base_url('/news_details/'.base64_encode($news['id']));?>"><h4><?=ucfirst($news['name']);?></h4></a>
									<p style="text-align: justify;" class="description">
										<?=esc($news['description']);?>
									</p>
								</div>
							</div>
						</div>
                                <?php endforeach; ?>
                        <?php $uri = service('uri');$segment = base64_decode($uri->getSegment(2));?>
                        
						<?php count($newses)<count($news_count)? $style="display:yes": $style="display:none";  ?>																
						<a href="<?=base_url('/news/'.base64_encode(count($newses)+$segment))?>" class="text-uppercase primary-btn mx-auto mt-40" style="<?=$style;?>" >Load more News</a>		
					</div>
				</div>	
			</section>
			<!-- End events-list Area -->
				

			<!-- Start cta-two Area -->
			<?php 
				include_once(APPPATH.'Views/frontend/inc/student_grievance.php');	
				?>
			<!-- End cta-two Area -->						    			
