            <footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p style="color: rgb(251, 251, 251);">Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger hidden" id="newsletterError"></div>

								<form action="<?= base_url('pages/subscribe'); ?>" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="email" type="email" required>
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-5">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
                                    <li><p style="color: rgb(251, 251, 251);"><i class="icon icon-map-marker"></i> <strong>Address:</strong> 26<sup>th</sup> Floor, UAP OLD MUTUAL Towers, Upper Hill Road, Upper Hill, Nairobi, KENYA</p></li>
									<li><p style="color: rgb(251, 251, 251);"><i class="icon icon-phone"></i> <strong>Phone:</strong> (+254) 791 009 974 / (+254) 20 222 0099</p></li>
                                    <li><p style="color: rgb(251, 251, 251);"><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:info@mwavuli.co.ke"> info@mwavuli.co.ke</a></p></li>
                                    <li><p style="color: rgb(251, 251, 251);"><i class="icon icon-location-arrow"></i> <strong>Address:</strong> P.O.Box 15850-00100 Nairobi, Kenya</p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="facebook"><a href="https://www.facebook.com/Mwavuli-Pension-Fund-221743605257349/" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
                                    <li class="twitter"><a href="https://twitter.com/MwavuliF" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
                                    <li class="linkedin"><a href="https://www.linkedin.com/company/mwavuli-pension-fund/" target="_blank" data-placement="bottom" rel="tooltip" title="LinkedIn">Linkedin</a></li>
									<li class="googleplus"><a href="http://www.plus.google.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Google +">Google +</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="assets/img/logo-footer.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Copyright &copy; <script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="faq.html">FAQ's</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="https://www.mwavuli.co.ke/admin/">Admin</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<script src="<?= base_url('assets/vendor/jquery.js'); ?>"></script>
		<script src="<?= base_url('assets/js/plugins.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/jquery.easing.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/jquery.appear.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/jquery.cookie.js'); ?>"></script>
		
		<script src="<?= base_url('assets/vendor/bootstrap.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/twitterjs/twitter.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/owl-carousel/owl.carousel.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/circle-flip-slideshow/js/jquery.flipshow.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/magnific-popup/magnific-popup.js'); ?>"></script>
		<script src="<?= base_url('assets/vendor/jquery.validate.js'); ?>"></script>

		<!-- Current Page Scripts -->
		<script src="<?= base_url('assets/js/views/view.home.js'); ?>"></script>

		<!-- Theme Initializer -->
		<script src="<?= base_url('assets/js/theme.js'); ?>"></script>

		<!-- Custom JS -->
		<script src="<?= base_url('assets/js/custom.js'); ?>"></script>

	</body>
</html>
