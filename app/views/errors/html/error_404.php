<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mwavuli | 404 Page Not Found</title>
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/fonts/font-awesome/css/font-awesome.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/vendor/owl-carousel/owl.carousel.css'); ?>" media="screen">
		<link rel="stylesheet" href="<?= base_url('assets/vendor/owl-carousel/owl.theme.css'); ?>" media="screen">
		<link rel="stylesheet" href="<?= base_url('assets/vendor/magnific-popup/magnific-popup.css'); ?>" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/css/theme.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/theme-elements.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/theme-animate.css'); ?>">

		<!-- Current Page Styles -->
		<link rel="stylesheet" href="<?= base_url('assets/vendor/rs-plugin/css/settings.css'); ?>" media="screen">
		<link rel="stylesheet" href="<?= base_url('assets/vendor/circle-flip-slideshow/css/component.css'); ?>" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/css/skins/blue.css'); ?>">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/css/theme-responsive.css'); ?>" />
		<link rel="stylesheet" href="<?= base_url('assets/css/theme-shop.css'); ?>" />
		<link rel="stylesheet" href="<?= base_url('assets/css/theme-blog.css'); ?>" />

		<!-- Head Libs -->
		<script src="<?= base_url('assets/vendor/modernizr.js'); ?>"></script>

		<link rel="shortcut icon" href="<?= base_url('assets/img/logo.png'); ?>" type="image/x-icon">
	</head>
	
	<body>
		<div class="body">
			<div class="container">
				<div role="main" class="main">

					<hr class="tall">

					<div id="content" class="content full">

						<div class="container">

							<section class="http-error">
								<div class="row justify-content-center py-3">
									<div class="col-md-7 text-center">
										<div class="http-error-main">
											<h1>404!</h1>
											<p>We're sorry, but the page you were looking for doesn't exist.</p>
										</div>
									</div>
									<div class="col-md-4 mt-4 mt-md-0">
										<h4 class="text-primary">Here are some useful links</h4>
										<ul class="nav nav-list flex-column">
											<li class="nav-item"><a class="nav-link" href="<?= base_url('/'); ?>">Home</a></li>
											<li class="nav-item"><a class="nav-link" href="<?= base_url('/about'); ?>">About Us</a></li>
											<li class="nav-item"><a class="nav-link" href="<?= base_url('/FAQ'); ?>">FAQ's</a></li>
											<li class="nav-item"><a class="nav-link" href="<?= base_url('/contact'); ?>">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>

				<hr class="tall">
			</div>
		</div>

		<script src="<?= base_url('assets/vendor/bootstrap.js'); ?>"></script>
		<script src="<?= base_url('assets/js/theme.js'); ?>"></script>
		<script src="<?= base_url('assets/js/custom.js'); ?>"></script>

	</body>
</html>