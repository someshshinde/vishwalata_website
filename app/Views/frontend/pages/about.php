<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					About Us
				</h1>
				<p class="text-white link-nav"><a href="<?= base_url('/'); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('/about'); ?>"> About Us</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<?php
include_once(APPPATH . 'Views/frontend/inc/feature.php');
?>
<!-- End feature Area -->

<!-- Start info Area -->
<section class="info-area pb-120">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-lg-6 no-padding info-area-left">
				<img class="img-fluid" src="frontend/img/about/collage_building.jpg" alt="">
			</div>
			<div class="col-lg-6 info-area-right">
				<h1>College at a Glance</h1>
				<p style="text-align: justify;">Discover the essence of holistic education at Vishwalata Arts, Commerce & Science College, affiliated with Savitribai Phule Pune University. Established in 2006 by the visionary Hon. Bhandare V. N., the college, situated in the picturesque Bhatgaon, Yeola, blends traditional values with cutting-edge courses to bridge the gap between rural students and global opportunities.</p>
				<br>
				<p style="text-align: justify;">
					The college always proves excellence through comparable academic results.
					The College believes in faculty development so that, they can serve better to the students.
					In Academics Infrastructure is also playing vital role create the healthy environment for
					the education. The institution, always believe the external audit to ensuring its perfection
					and quality in the field of excellence in academic and its qualitative process. With this
					objective Institute has decided to make its quality evaluation by National Assessment
					and Accreditation Council (NAAC), which will help us to institutional developments
					and contribution to society's development.
				</p>
			</div>
		</div>
	</div>
</section>
<!-- End info Area -->

<!-- Start course-mission Area -->
<section class="course-mission-area pb-120">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Goals to Achieve for the leadership</h1>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 accordion-left">

				<!-- accordion 2 start-->
				<dl class="accordion">
					<dt>
						<a href="">Quality</a>
					</dt>
					<dd>
						A quality education ensures inclusive, equitable learning that promotes critical thinking, lifelong skills, and personal development for all learners.
					</dd>
					<dt>
						<a href="">Discipline</a>
					</dt>
					<dd>
						Discipline in the education system promotes a structured, respectful, and focused learning environment essential for academic and personal development.
					</dd>
					<dt>
						<a href="">Transparency</a>
					</dt>
					<dd>
						Transparency in education ensures openness, accountability, and clear communication between institutions, educators, students, and stakeholders, fostering trust and fairness in the learning process
					</dd>
					<dt>
						<a href=""> Sustainable Development</a>
					</dt>
					<dd>
						Sustainable development is the practice of meeting present needs without compromising the ability of future generations to meet theirs, by balancing economic growth, environmental protection, and social equity
					</dd>
				</dl>
				<!-- accordion 2 end-->
			</div>
			<div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
				<div class="overlay overlay-bg"></div>
				<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play.png" alt=""></a>
			</div>
		</div>
	</div>
</section>
<!-- End course-mission Area -->


<!-- Start search-course Area -->
<section class="search-course-area relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 col-md-6 search-course-left">
				<h1 class="text-white">
					Get reduced fee <br>
					during this Summer!
				</h1>
				<p>
					inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
				</p>
				<div class="row details-content">
					<div class="col single-detials">
						<span class="lnr lnr-graduation-hat"></span>
						<a href="#">
							<h4>Expert Instructors</h4>
						</a>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>
					</div>
					<div class="col single-detials">
						<span class="lnr lnr-license"></span>
						<a href="#">
							<h4>Certification</h4>
						</a>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and power.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 search-course-right section-gap">

				<form class="form-wrap" action="<?= base_url('/inquiry'); ?>" method="POST">
				<input type="hidden" name="path" value="about">

					<h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>
					<?php if (session()->has('success') || session()->getFlashdata('success')): ?>
						<h5 class="text-white pb-20 text-center mb-30">
							<?= esc(session()->getFlashdata('success')) ?>
						</h5>
					<?php endif; ?>

					<input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
					<input type="phone" class="form-control" name="mobile" pattern="[0-9]{10}" placeholder="Your Mobile Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" required>
					<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" required>
					<input type="text" class="form-control" name="message" placeholder="Your Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Message'" required>
					<div class="form-select" id="service-select">
						<select name="course" required>
							<option datd-display="">Choose Course</option>
							<?php foreach ($course_data as $course): ?>
								<option value="<?= $course['name']; ?>"><?= $course['short_name']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<button class="primary-btn text-uppercase">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End search-course Area -->

<!-- Start review Area -->
<?php
include_once(APPPATH . 'Views/frontend/inc/review.php');
?>
<!-- End review Area -->

<!-- Start cta-two Area -->
<?php
include_once(APPPATH . 'Views/frontend/inc/student_grievance.php');
?>
<!-- End cta-two Area -->