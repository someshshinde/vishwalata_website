<?php
$hod_name = "---";
foreach ($faculty as $row) {
	if ($row['id'] === $department['hod']) {
		$hod_name = $row['name'];
	} else {
		$hod_name = "-----";
	}
}
?>

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					<?= $department['name']; ?>
				</h1>
				<p class="text-white link-nav"><a href="<?= base_url('/'); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('/department_details/' . $department['name']); ?>">Department Details</a></p>
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
					<img class="img-fluid" style="width: 750px; height: 350px;" src="<?= base_url('frontend/img/departments/' . $department['name'] . '/' . $department['img']); ?>" loading="lazy" alt="<?= $department['name']; ?>">
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">
					<div class="jq-tab-menu">
						<div class="jq-tab-title active" data-tab="1">About</div>
						<div class="jq-tab-title" data-tab="2">Courses</div>
						<div class="jq-tab-title" data-tab="3">Faculty</div>
						<div class="jq-tab-title" data-tab="4">Achievements</div>
						<div class="jq-tab-title" data-tab="5">Syllabus</div>
					</div>
					<div class="jq-tab-content-wrapper">
						<div class="jq-tab-content active" data-tab="1">
							<p style="text-align: justify;"><?= $department['about']; ?></p>

						</div>
						<div class="jq-tab-content" data-tab="2">


							<ul class="course-list">
								<?php $hasData = false; // Flag to track if any row matches the condition 
								?>
								<?php foreach ($courses as $row) {
									$hasData = true; ?>
									<li class="justify-content-between d-flex">


										<?php if ($department['id'] == $row['dept_id']) { ?>

											<p><?= $row['name']; ?></p>
											<a class="primary-btn text-uppercase" href="<?= base_url('/course_details/' . $row['short_name']); ?>">View Details</a>

										<?php	} ?>



									</li>
									<?php if ($hasData == false) { ?><li>No Data Found</li><?php } ?>
								<?php } ?>


							</ul>
						</div>
						<div class="jq-tab-content" data-tab="3">

							<div class="progress-table-wrap">
								<div class="progress-table">
									<div class="table-head">
										<div class="serial">Photo</div>
										<div class="country">Name</div>
										<div class="country">Education</div>
										<div class="visit">Degignation</div>
										<div class="visit">Department</div>
										<div class="visit">Email</div>

									</div>
									<?php
									$hasData = false; // Flag to track if any row matches the condition

									foreach ($faculty as $row) {
										if ($row['dept_id'] == $department['id']) {
											$hasData = true;
									?>
											<div class="table-row">
												<div class="country"><img style="width: 100px; height: 100px;" src="<?= base_url('frontend/img/faculty/' . $row['img']); ?>" alt="<?= $row['name'] ?>"></div>
												<div class="country"><?= $row['name']; ?></div>
												<div class="visit"><?= $row['education']; ?></div>
												<div class="visit"><?= $row['designation']; ?></div>
												<div class="visit"><?= $row['dept_name']; ?></div>
												<div class="visit"><?= $row['email']; ?></div>

											</div>
										<?php
										}
									}

									// If no matching data was found
									if (!$hasData) {
										?>
										<div class="table-row " colspan="6">
											<div class="country">Data Not Found</div>
										</div>
									<?php } ?>


								</div>
							</div>



						</div>

						<div class="jq-tab-content comment-wrap" data-tab="4">
							<div class="comments-area">
								<h4>HEARTLY CONGRATULATION TO OUR TOPPERS</h4>
							</div>
							<div class="progress-table-wrap">
								<div class="progress-table">
									<div class="table-head">
										<div class="serial">Acadamic Yea</div>
										<div class="country">Name</div>
										<div class="country">Class</div>
										<div class="visit">Department</div>
										<div class="visit">Percentage(%)</div>

									</div>
									<?php
									$hasData = false; // Flag to track if any row matches the condition

									foreach ($achivements as $row) {
										if ($row['dept_id'] == $department['id']) {
											$hasData = true;
									?>
											<div class="table-row">

												<div class="visit"><?= $row['academic_year']; ?></div>
												<div class="visit"><?= $row['name']; ?></div>
												<div class="visit"><?= $row['class']; ?></div>
												<div class="visit"><?= $row['dept_name']; ?></div>
												<div class="visit"><?= $row['percentage']; ?></div>

											</div>
										<?php
										}
									}

									// If no matching data was found
									if (!$hasData) {
										?>
										<div class="table-row " colspan="6">
											<div class="country">Data Not Found</div>
										</div>
									<?php } ?>


								</div>
							</div>


						</div>
						<div class="jq-tab-content" data-tab="5">
							No Data Found
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 right-contents">
				<ul>
					<li>
						<a class="justify-content-between d-flex" href="#">
							<p>Department Name</p>
							<span class="or"><?= $department['name']; ?></span>
						</a>
					</li>
					<li>
						<a class="justify-content-between d-flex" href="#">
							<p>Hade Of Department</p>
							<span class="or"><?= $hod_name; ?></span>
						</a>
					</li>
				</ul>

			</div>
		</div>
	</div>
</section>
<!-- End course-details Area -->


<!-- Start popular-courses Area -->
<?php
//include_once(APPPATH . 'Views/frontend/inc/courses.php');
?>

<!-- End popular-courses Area -->

<!-- Start cta-two Area -->
<?php
include_once(APPPATH . 'Views/frontend/inc/student_grievance.php');
?>
<!-- End cta-two Area -->