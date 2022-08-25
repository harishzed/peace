<?php
include('header.php')
?>

			<div role="main" class="main">

				

				<div class="container">

					<div class="row py-4">
						<div class="col-lg-6">

							<h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
							<p class="mb-4">Feel free to ask for details, don't save any questions!</p>

							<form class="contact-form" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

							

								


								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Full Name</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Email Address</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
									</div>
								</div>


								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Company Name</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="form-label mb-1 text-2">Position</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
									</div>
								</div>


								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Mobile Number</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
									</div>
								</div>


								
								<div class="row">
									<div class="form-group col">


										
											<!-- <label class="form-group col">Subject/category</label> -->
											
												<!-- <select class="form-control form-control-lg mb-3">
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
												</select> -->
												<!-- <select class="form-control mb-3">
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
												</select> -->
												<!-- <select class="form-control form-control-sm mb-3">
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
												</select> -->
											
										













										<label class="form-label mb-1 text-2">Subject</label>
										
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label mb-1 text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control text-3 h-auto py-2" name="message" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-lg-6">


							

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">Business Inquiries</h4>
								<p> Including Services, Become a partner</p>
								
									
									<i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> +91-1234567890<br>
									<i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:info@neilengg.com"> Info@NeilEngg.com</a></p>
								
							</div>

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">Recruiting &nbsp; &amp; &nbsp;Job Oppurtunities</h4>
								<p> Including job application submission and Application status</p>
								
									
									<i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> +91-1234567890<br>
									<i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:info@neilengg.com"> Career@NeilEngg.com</a></p>
								
							</div>

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">HR, Job Recruiters and Business<br>Ethics and Policies Inquiries </h4>
								<p>

								</p>
								
									
									<i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> +91-1234567890<br>
									<i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:info@neilengg.com">HR@NeilEngg.com</a></p>
								
							</div>

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<h4 class="pt-5">Job Opportunities</h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
									<li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
									<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
								</ul>
							</div>

							<h4 class="pt-5">Get in <strong>Touch</strong></h4>
							<p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div>

					</div>

				</div>

			</div>






















		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/lazysizes/lazysizes.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

	<!-- Examples -->
		<script src="js/examples/examples.portfolio.js"></script>

	</body>
</html>
