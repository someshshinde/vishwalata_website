<?php

use PhpParser\Node\Stmt\Foreach_;

$review = [
	[
		"name" => "Aniket Khaire",
		"url" => "https://www.google.com/maps/contrib/106007792827982601548/reviews/@20.0685053,74.4449413,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D",
		"star" => [1, 1, 1, 1, 1],
		"msg" => "The best of vishavalata collage for a teaching and the first best nss camp experience for in my life .nss camp head Mr. Pawar sir is so motivational for a studentVishwalata college"
	],
	[
		"name" => "Geetu Borade",
		"url" => "https://www.google.com/maps/contrib/110919702685175353580/reviews/@20.0685039,74.4449389,17.01z/data=!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D",
		"star" => [1, 1, 1, 1, 0],
		"msg" => "Activities of poster presentations in vishwalata college for BBA and BBM students, Best education facilities"
	],
	[
		"name" => "Ashok Tambe",
		"url" => "https://www.google.com/maps/contrib/114467675679494388774/reviews/@20.0685053,74.4449413,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D",
		"star" => [1, 1, 1, 1, 1],
		"msg" => "Best College For Management Courses with Best Faculty for Good Result",
	],
	[
		"name" => "Yashraj Chavhan",
		"url" => "https://www.google.com/maps/contrib/101998244201748295527/reviews/@19.2651055,74.1291138,9z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D",
		"star" => [1, 1, 1, 1, 1],
		"msg" => "One of best college , all teachers are experienced and supportive. College campus Excellent 👌👍 …"
	],
	[
		"name" => "Krushna ugale",
		"url" => "https://www.google.com/maps/contrib/117765382186093246315/reviews/@20.0525986,74.4663922,14z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D",
		"star" => [1, 1, 1, 1, 0],
		"msg" => "People also ask
How do you write a good feedback for college?
In my two years at this college I had learnt many thing and have greatly improved my knowledge."
	],
	[
		"name" => "Jyoti Urade",
		"url" => "https://www.google.com/maps/contrib/105234095562275390301/reviews/@19.8459025,74.5261189,11z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D",
		"star" => [1, 1, 1, 1, 1],
		"msg" => "Very good collage the college focus on academic as well as external development of students"
	]
	,[
		"name" => "Mahesh Jagzap",
		"url" => "https://www.google.com/maps/contrib/114607852317811478183/reviews/@19.3260967,74.0902687,9z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D",
		"star" => [1, 1, 1, 1, 1],
		"msg" => "Toady I started New Position in this Company And first Day Experience was Very Good All the Hr and management Was Very helpful."
	]
]

?>


<section class="review-area section-gap relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row">
			<div class="active-review-carusel">
				<?php foreach ($review as $row): ?>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="<?= $row['url']; ?>" target="_blank">
								<h4><?= $row['name']; ?></h4>
							</a>
							<div class="star">
								<?php for ($i = 0; $i < 5; $i++): ?>
									<span class="fa fa-star <?= ($row['star'][$i] ?? 0) === 1 ? 'checked' : ''; ?>"></span>
								<?php endfor; ?>
							</div>
						</div>
						<p style="text-align: justify;">
							<?= $row['msg']; ?>
						</p>
					</div>
				<?php endforeach; ?>
				<!-- <div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="https://www.google.com/maps/contrib/106007792827982601548/reviews/@20.0685053,74.4449413,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D">
							<h4>Aniket Khaire</h4>
						</a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Tha best of vishavalata collage for a teaching and the first best nss camp experience for in my life .nss camp head Mr. Pawar sir is so motivational for a studentVishwalata college
					</p>
				</div>
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href=https://www.google.com/maps/contrib/114467675679494388774/reviews/@20.0685053,74.4449413,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D">
							<h4>Ashok Tambe</h4>
						</a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Best College For Management Courses with Best Faculty for Good Resulta.
					</p>
				</div>
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="https://www.google.com/maps/contrib/113463985408895065517/reviews/@20.0685053,74.4449413,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D">
							<h4>Gayatri Deore</h4>
						</a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Teaching staff are knowledgeable and supportive, courses offered are diverse and interesting. The college provides students great opportunities for extracurricular activities...
					</p>
				</div>
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="https://www.google.com/maps/contrib/110919702685175353580/reviews/@20.0685053,74.4449413,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D">
							<h4>Geetu Borade</h4>
						</a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						Activities of poster presentations in vishwalata college for BBA and BBM students", Best education
					</p>
				</div>
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#">
							<h4>Yashraj Chavhan</h4>
						</a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						One of best college , all teachers are experienced and supportive. College campus Excellent 👌👍
					</p>
				</div>
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="#">
							<h4>Krushna Ugale</h4>
						</a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
						</div>
					</div>
					<p>
						People also ask
						How do you write a good feedback for college?In my two years at this college I had learnt many thing and have greatly improved my knowledge.
					</p>
				</div>
				<div class="single-review item">
					<img src="frontend/img/r1.png" alt="">
					<div class="title justify-content-start d-flex">
						<a href="#">
							<h4>Jyoti Urade</h4>
						</a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Very good collage the college focus on academic as well as external development of students
					</p>
				</div>
				<div class="single-review item">
					<div class="title justify-content-start d-flex">
						<a href="https://www.google.com/maps/contrib/114607852317811478183/reviews/@19.3260967,74.0902687,9z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-GB&entry=ttu&g_ep=EgoyMDI1MDUxNS4wIKXMDSoASAFQAw%3D%3D">
							<h4>Mahesh Jagzap</h4>
						</a>
						<div class="star">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p>
						Very good college the college focuses on the academic as well as external develop if student resulting in good environment for students growth.
					</p>
				</div> -->
			</div>
		</div>
	</div>
</section>