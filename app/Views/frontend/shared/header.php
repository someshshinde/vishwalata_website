<?php
$naac_data = [
	[
		"url" => "/naac/academic_calender",
		"title" => "Academic Calendar",

	],
	[
		"url" => "/naac/mou",
		"title" => "MOU",

	],
	[
		"url" => "/naac/certifications",
		"title" => "Certifications",
	],
	[
		"url" => "/naac/IIQA",
		"title" => "IIQA",

	],
	[
		"url" => "/naac/iqac",
		"title" => "IQAC",
	],
	[
		"url" => "/naac/ssr",
		"title" => "SSR",
	],
	[
		"url" => "/naac/ssr_documents",
		"title" => "SSR Documents",
	],
	[
		"url" => "/naac/dvv_clarification",
		"title" => "DVV Clarification",
	],
	[
		"url" => "/naac/first_cycle_accreditation_details",
		"title" => "First Cycle Accedition Details"
	],
	[
		"url" => "/naac/aqar",
		"title" => "AQAR",
	],
	[
		"url" => "/naac/first_cycle_accreditation_details",
		"title" => "First Cycle Acceditation Details",
	],
	[
		"url" => "/naac/annual_quality_assurance_report",
		"title" => "Annual Quality Assurance Report",
	]
]
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?= base_url('frontend/img/fav.png'); ?>">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?= $config['name']; ?></title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="<?= base_url('frontend/css/linearicons.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/css/magnific-popup.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/css/nice-select.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/css/animate.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/css/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/css/jquery-ui.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('frontend/css/main.css'); ?>">

	<link href="https://fonts.googleapis.com/css2?family=Khula&display=swap" rel="stylesheet">
</head>

<body>
	<!-- Spinner HTML -->
	<div id="spinner-loader">
		<div class="spinner"></div>
	</div>
	<header id="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
						<ul>
							<li><a href="<?=$config['facebook'];?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?=$config['instagram'];?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="<?=$config['youtube'];?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>

						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
						<a href="tel:+91<?=$config['phone'];?>"><span class="lnr lnr-phone-handset"></span> <span class="text">+91&nbsp;<?=$config['phone'];?></span></a>
						<a href="mailto:<?=$config['email'];?>"><span class="lnr lnr-envelope"></span> <span class="text"><?=$config['email'];?></span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="#"><img src="<?= base_url('frontend/img/logo/' . $config['logo']); ?>" alt="LOGO" title="LOGO" loading="lazy" class="logo" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="<?= base_url('/'); ?>">Home</a></li>
						<li class="menu-has-children"><a href="">About</a>
							<ul>
								<li><a href="<?= base_url('/about'); ?>">About Vishwalata</a></li>
								<li><a href="<?= base_url('/director_message'); ?>">Director Message</a></li>
								<li><a href="<?= base_url('/secretary_desk'); ?>">Secretory Desk</a></li>
								<li><a href="<?= base_url('/principal_desk'); ?>">Principal Desk</a></li>
								<li><a href="<?= base_url('/management_body'); ?>">Management Body</a></li>

								<li><a href="<?= base_url('/vision_mission') ?>">Vision and Mission</a></li>
								<li class="menu-has-children"><a href="">Infrastructure</a>
									<ul>
										<li><a href="#">Hostel Boys/ Girls</a></li>
										<li><a href="#">Bus Service</a></li>
										<li><a href="#">Canteen Service</a></li>
										<li><a href="#">Play Ground </a></li>
										<li><a href="#">Computer Lab</a></li>
										<li><a href="#">24/7 wifi</a></li>
										<li><a href="#">Library</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="">Facilities</a>
									<ul>
										<li><a href="#">Library</a></li>
										<li><a href="#">NSS</a></li>
										<li><a href="#">Spoart</a></li>
									</ul>
								</li>
								<li class="menu-has-children"><a href="">Commitee</a>
									<ul>
										<li><a href="#">NSS</a></li>
										<li><a href="#">Social Heart Beat</a></li>
										<li><a href="#">Training and placement cell </a></li>
									</ul>
								</li>

							</ul>
						</li>
						<li class="menu-has-children"><a href="">Admission</a>
							<ul>
								<li><a href="<?=base_url('/admission/eligibility');?>">Eligibility</a></li>
								<li><a href="<?=base_url('/admission/scholership');?>">Scholarships</a></li>
								<li><a href="<?=base_url('/admission/prospectus');?>">Admission Prospectus</a></li>
								
							</ul>
						</li>
						<li class="menu-has-children"><a href="">News & Events</a>
							<ul>
								<li><a href="<?= base_url('/events/' . base64_encode(env('EVENT_PAGE_LOAD_LIMIT'))); ?>">Events</a></li>
								<li><a href="<?= base_url('/news/' . base64_encode(env('NEWS_PAGE_LOAD_LIMIT'))); ?>">News</a></li>

							</ul>
						</li>
						<li class="menu-has-children"><a href="">Academic</a>
							<ul>

								<li class="menu-has-children"><a href="">Departments</a>
									<ul>
										<li><a href="<?= base_url('/administration_department'); ?>">Administration Department</a></li>
										<?php foreach ($departments as $row) { ?>
											<li><a href="<?= base_url('/department_details/' . $row['name']); ?>"><?= $row['name']; ?></a></li>
										<?php } ?>
									</ul>
								</li>
								<li><a href="#">Faculty</a></li>
								<li><a href="#">Academic Calender</a></li>
								<li><a href="#">Examination Cell</a></li>
							</ul>
						</li>




						<li class="menu-has-children"><a href="">NAAC</a>
							<ul>
								<?php foreach ($naac_data as $data): ?>
									<li><a href="<?= base_url('' . $data['url']); ?>"><?= $data['title']; ?></a></li>
								<?php endforeach; ?>
								<!--  -->

								<li class="menu-has-children"><a href="">VACS Policy</a>
									<ul>
										<li><a href="<?= base_url('/naac/vacs/academic_calender'); ?>">Academic Calendar</a></li>
										<li><a href="<?= base_url('/naac/vacs/startup_and_innovation_cell'); ?>">Start-Up and Innovation Cell</a></li>
										<li><a href="<?= base_url('/naac/vacs/year_wise_report'); ?>">Year Wise Report</a></li>
										<li><a href="<?= base_url('/naac/vacs/year_wise_event_and_program'); ?>">Year Wise Events and Program</a></li>

									</ul>
								</li>
							</ul>
						</li>
						<li><a href="<?= base_url('/contact'); ?>">contact</a></li>

					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->