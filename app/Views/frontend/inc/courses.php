<?php 

//get data from database 
 

$course_data = [
    [
        "img" => "p1.jpg",
        "course_name" => "Bachelor Of Science",
		"short_name"=>"bsc",
        "desc" => "An undergraduate academic degree awarded upon completion of a science-focused program, typically lasting 3 to 4 years."
    ],
    [
        "img" => "p2.jpg",
        "course_name" => "Bachelor Of Business Management",
		"short_name"=>"bbm",
        "desc" => "A bachelor's degree offering broad knowledge of business management to prepare students for leadership roles in the corporate world. typically lasting 3 to 4 years."
	],
	[
        "img" => "p3.jpg",
        "course_name" => "Bachelor Of Business Administration",
		"short_name"=>"bba",
        "desc" => " an undergraduate degree focused on business management and administration.typically lasting 3 to 4 years."
	],
	[
        "img" => "p4.jpg",
        "course_name" => "Bachelor Of Commerce",
		"short_name"=>"bcom",
        "desc" => "a three-year undergraduate degree focused on commerce and business management, providing students with a comprehensive understanding of business principles and practices."
	],
	[
        "img" => "p1.jpg",
        "course_name" => "Bachelor Of Computer Applications",
		"short_name"=>"bca",
        "desc" => "a three-year undergraduate degree focused on computer applications and IT skills, providing students with a strong foundation in programming, software development, and computer science principles."
	],
	[
        "img" => "p2.jpg",
        "course_name" => "Bachelor of Business Administration in international Business",
		"short_name"=>"bbaib",
        "desc" => "an undergraduate degree that focuses on the principles and practices of conducting business on a global scale, typically lasting 3 to 4 years."
	],
	[
        "img" => "p3.jpg",
        "course_name" => "Masters in Commerce",
		"short_name"=>"mcom",
        "desc" => "a postgraduate degree focusing on commerce, accounting, finance, economics, and business management. It typically lasts 2 years and prepares students for advanced roles in the business world."
	],
	[
        "img" => "p4.jpg",
        "course_name" => "Masters in Science",
		"short_name"=>"msc",
        "desc" => "a postgraduate academic degree focused on advanced study in a science-related field, typically lasting 2 years. It involves coursework and research, preparing students for careers in research, academia, or specialized industry roles."
	]

];

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
							<?php foreach($course_data as $course): ?>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" style="width: 263px; height: 200px;"src="<?=base_url('frontend/img/courses/'.$course['img']);?>" loading="lazy" alt="<?=$course['course_name'];?>">
									</div>
									
								</div>
								<div class="details">
									<a href="<?=base_url('/course_details/'.$course['short_name']);?>">
										<h4>
											<?=$course['course_name'];?>
										</h4>
									</a>
									<p>
										<?=$course['desc'];?>
									</p>
								</div>
							</div>	
									
							<?php endforeach; ?>
						</div>
					</div>
				</div>	
			</section>