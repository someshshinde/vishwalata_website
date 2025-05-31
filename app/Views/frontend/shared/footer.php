			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>About</h4>
								<ul>
									<li><a href="<?= base_url('/about'); ?>">About Vishwalata</a></li>
									<li><a href="<?= base_url('/director_message'); ?>">Director Message</a></li>
									<li><a href="<?= base_url('/secretary_desk'); ?>">Secretory Desk</a></li>
									<li><a href="<?= base_url('/principal_desk'); ?>">Principal Desk</a></li>
									<li><a href="<?= base_url('/management_body'); ?>">Management Body</a></li>
									<li><a href="<?= base_url('/vision_mission') ?>">Vision and Mission</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Admission</h4>
								<ul>
									<li><a href="<?= base_url('/admission/eligibility'); ?>">Eligibility</a></li>
									<li><a href="<?= base_url('/admission/scholership'); ?>">Scholarships</a></li>
									<li><a href="<?= base_url('/admission/prospectus'); ?>">Admission Prospectus</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>News & Events</h4>
								<ul>
									<li><a href="<?= base_url('/events/' . base64_encode(env('EVENT_PAGE_LOAD_LIMIT'))); ?>">Events</a></li>
									<li><a href="<?= base_url('/news/' . base64_encode(env('NEWS_PAGE_LOAD_LIMIT'))); ?>">News</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Contact Us</h4>
								<ul>
									<li><a href="tel:+919545126722"><span class="lnr lnr-phone-handset"></span> <span class="text">+91 9545126722</span></a></li>
									<li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@colorlib.com</span></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
										<div class="input-group">
											<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
											<div class="input-group-btn">
												<button class="btn btn-default" type="submit">
													<span class="lnr lnr-arrow-right"></span>
												</button>
											</div>
											<div class="info"></div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="https://www.facebook.com/profile.php?id=100063743666294" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/vishwalata_institute?igsh=Mnd2bjBxdXFpdDY2&utm_source=ig_contact_invite" target="_blank"><i class="fa fa-instagram"></i></a>
							<a href="https://youtube.com/@vacs9545?si=-teYddm35zi8RDmt" target="_blank"><i class="fa fa-youtube-play"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
			<!-- Spinner Hide Script -->
			<script>
				window.addEventListener('load', function() {
					var loader = document.getElementById("spinner-loader");
					if (loader) {
						loader.style.display = "none";
					}
				});

			
			</script>

			<script src="<?= base_url('frontend/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.frontend/js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url('frontend/js/vendor/bootstrap.min.js'); ?>"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="<?= base_url('frontend/js/easing.min.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/hoverIntent.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/superfish.min.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/jquery.ajaxchimp.min.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/jquery.magnific-popup.min.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/jquery.tabs.min.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/jquery.nice-select.min.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/owl.carousel.min.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/mail-script.js'); ?>"></script>
			<script src="<?= base_url('frontend/js/main.js'); ?>"></script>


			</body>

			</html>