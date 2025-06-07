<?php 
$documents=[
	[
		"sr"=>"1",
		"name"=>"Previous Year Marksheet  - 10th & 12th (Original + 2 Xerox Copies)"
	],
	[
		"sr"=>"2",
		"name"=>"Original Leaving / Transfer Certificate ( 2 Xerox Copies)"
	],
	[
		"sr"=>"3",
		"name"=>"Caste Certificate ( For Category Students)"
	],
	[
		"sr"=>"4",
		"name"=>"Non – Crème Layer Certificate ( NT – C & OBC)"
	],
	[
		"sr"=>"5",
		"name"=>"3 Passport Photos"
	],
	[
		"sr"=>"6",
		"name"=>"Domicile Certificate & Income Certificate"
	],
	[
		"sr"=>"7",
		"name"=>"Bank Passbook Of Savings Account / India Post Payments Bank Saving Account"
	],
	[
		"sr"=>"8",
		"name"=>"Aadhar Card, PAN Card , Updated KYC"
	],
	[
		"sr"=>"9",
		"name"=>"Valid E – Mail ID & Mobile Number"
	],
	[
		"sr"=>"10",
		"name"=>"ABC – ID – Academic Bank Of Credits( Download from Digi – Locker)"
	],
]
?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Popular Courses
				</h1>
				<p class="text-white link-nav"><a href="<?= base_url('/'); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('/course_details/' . $course['short_name']); ?>">Course Details</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start course-details Area -->
<section class="course-details-area pt-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" style="width: 750px; height: 350px;" src="<?= base_url('frontend/img/courses/' . $course['img']); ?>" loading="lazy" alt="<?= $course['name']; ?>">
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">
					<div class="jq-tab-menu">
						<div class="jq-tab-title active" data-tab="1">About</div>
						<div class="jq-tab-title" data-tab="2">Eligibility</div>
						<div class="jq-tab-title" data-tab="3">Course Outline</div>
						 <div class="jq-tab-title" data-tab="4">Required Documents</div>
	                    <!--            <div class="jq-tab-title" data-tab="5">Reviews</div> -->
					</div>
					<div class="jq-tab-content-wrapper">
						<div class="jq-tab-content active" data-tab="1">
							<p style="text-align: justify;"><?= $course['description']; ?></p>
						</div>
						<div class="jq-tab-content" data-tab="2">
							<p style="text-align: justify;"><?= $course['eligibility']; ?></p>
						</div>
						<div class="jq-tab-content" data-tab="3">
							<iframe src="<?= base_url('frontend/doc/prospectus.pdf'); ?>" width="100%" height="1000px">
								This browser does not support PDFs. Please download the PDF to view it:

							</iframe>
						</div>
						<div class="jq-tab-content comment-wrap" data-tab="4">

							<div class="comments-area">
								<h4>Required Documents</h4>
								<?php foreach($documents as $row):?>
								<div class="comment-list">
									<div class="single-comment justify-content-between d-flex">
										<div class="user justify-content-between d-flex">
											
											<div class="desc">
												<h5><?=$row['sr'];?>&nbsp;<?=$row['name'];?></h5>
												
											</div>
										</div>
										
									</div>
								</div>
								<?php endforeach;?>
							</div>
							
						</div>
						<div class="jq-tab-content" data-tab="5">
							<div class="review-top row pt-40">
								<div class="col-lg-3">
									<div class="avg-review">
										Average <br>
										<span>5.0</span> <br>
										(3 Ratings)
									</div>
								</div>
								<div class="col-lg-9">
									<h4 class="mb-20">Provide Your Rating</h4>
									<div class="d-flex flex-row reviews">
										<span>Quality</span>
										<div class="star">
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span>Outstanding</span>
									</div>
									<div class="d-flex flex-row reviews">
										<span>Puncuality</span>
										<div class="star">
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span>Outstanding</span>
									</div>
									<div class="d-flex flex-row reviews">
										<span>Quality</span>
										<div class="star">
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star checked"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<span>Outstanding</span>
									</div>
								</div>
							</div>
							<div class="feedeback">
								<h4 class="pb-20">Your Feedback</h4>
								<textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
								<a href="#" class="mt-20 primary-btn text-right text-uppercase">Submit</a>
							</div>
							<div class="comments-area mb-30">
								<div class="comment-list">
									<div class="single-comment single-reviews justify-content-between d-flex">
										<div class="user justify-content-between d-flex">
											<div class="thumb">
												<img src="img/blog/c1.jpg" alt="">
											</div>
											<div class="desc">
												<h5><a href="#">Emilly Blunt</a>
													<div class="star">
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star"></span>
														<span class="fa fa-star"></span>
													</div>
												</h5>
												<p class="comment">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="comment-list">
									<div class="single-comment single-reviews justify-content-between d-flex">
										<div class="user justify-content-between d-flex">
											<div class="thumb">
												<img src="img/blog/c2.jpg" alt="">
											</div>
											<div class="desc">
												<h5><a href="#">Elsie Cunningham</a>
													<div class="star">
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star"></span>
														<span class="fa fa-star"></span>
													</div>
												</h5>
												<p class="comment">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="comment-list">
									<div class="single-comment single-reviews justify-content-between d-flex">
										<div class="user justify-content-between d-flex">
											<div class="thumb">
												<img src="img/blog/c3.jpg" alt="">
											</div>
											<div class="desc">
												<h5><a href="#">Maria Luna</a>
													<div class="star">
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star"></span>
														<span class="fa fa-star"></span>
													</div>
												</h5>
												<p class="comment">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="comment-list">
									<div class="single-comment single-reviews justify-content-between d-flex">
										<div class="user justify-content-between d-flex">
											<div class="thumb">
												<img src="img/blog/c4.jpg" alt="">
											</div>
											<div class="desc">
												<h5><a href="#">Maria Luna</a>
													<div class="star">
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star checked"></span>
														<span class="fa fa-star"></span>
														<span class="fa fa-star"></span>
													</div>
												</h5>
												<p class="comment">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum ut sed, dolorum asperiores perspiciatis provident, odit maxime doloremque aliquam.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 right-contents">
				<ul>
					<li>
						<a class="justify-content-between d-flex" href="#">
							<p>Course Name</p>
							<span class="or"><?= $course['name']; ?></span>
						</a>
					</li>
					<li>
						<a class="justify-content-between d-flex" href="#">
							<p>Course Fee </p>
							<span><?= $course['fee']; ?></span>
						</a>
					</li>
					<li>
						<a class="justify-content-between d-flex" href="#">
							<p>Intake </p>
							<span><?= $course['intake']; ?></span>
						</a>
					</li>
					<!-- <li>
						<a class="justify-content-between d-flex" href="#">
							<p>Eligibility </p>
							<span><?= $course['eligibility']; ?></span>
						</a>
					</li> -->
				</ul>
				<a href="mailto:<?= $config['email']; ?>" class="primary-btn text-uppercase">Enroll the course</a>
			</div>
		</div>
	</div>
</section>
<!-- End course-details Area -->


<!-- Start popular-courses Area -->
<?php
//include_once(APPPATH . 'Views/frontend/inc/courses.php');
?>
<section class="popular-course-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Popular Courses we offer</h1>
					<p>There is a moment in the life of any aspiring.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="active-popular-carusel">
				<?php foreach ($course_data as $course): ?>
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" style="width: 263px; height: 200px;" src="<?= base_url('frontend/img/courses/' . $course['img']); ?>" loading="lazy" alt="<?= $course['name']; ?>">
							</div>

						</div>
						<div class="details">
							<a href="<?= base_url('/course_details/' . $course['short_name']); ?>">
								<h4>
									<?= $course['name']; ?>
								</h4>
							</a>
							<p>
								<?= $course['description']; ?>
							</p>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- End popular-courses Area -->

<!-- Start cta-two Area -->
<?php
include_once(APPPATH . 'Views/frontend/inc/student_grievance.php');
?>
<!-- End cta-two Area -->