		<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Eligibility Criteria	
							</h1>	
							<p class="text-white link-nav"><a href="<?=base_url('/');?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?=base_url('admission/eligibility');?>">Eligibility Criteria</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			
	
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">

					<div class="section-top-border">
						<h3 class="mb-30">Eligibility Criteria</h3>
                       <ul class="course-list">
								
								<?php foreach ($courses as $row) {
									$hasData = true; ?>
									<li class="justify-content-between d-flex">


										

											<p><?= $row['name']; ?></p>
											<a class="primary-btn text-uppercase" href="<?= base_url('/course_details/' . $row['short_name']); ?>">View Eligibility</a>

										



									</li><br/>
									
								<?php } ?>


							</ul>
					
					</div>
					
				
					
				</div>
			</div>
			<!-- End Align Area -->

			<!-- start footer Area -->		
			
			<!-- End footer Area -->	
