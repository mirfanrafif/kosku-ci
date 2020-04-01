<!DOCTYPE HTML>
<html>

<head>
	<title>Luxury Resorts a Hotel and Restaurants Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
	<link href="<?= base_url() ?>assets/welcome_templates/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url() ?>assets/welcome_templates/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= base_url() ?>assets/welcome_templates/css/flexslider.css" type="text/css" media="screen" />
	<script src="<?= base_url() ?>assets/welcome_templates/js/jquery-1.8.3.min.js"></script>
	<script src="<?= base_url() ?>assets/welcome_templates/js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$("#slider1").responsiveSlides({
				auto: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<!----->
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="<?= base_url() ?>assets/welcome_templates/js/move-top.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/welcome_templates/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!---End-smoth-scrolling---->
	<link rel="stylesheet" href="<?= base_url() ?>assets/welcome_templates/css/swipebox.css">
	<script src="<?= base_url() ?>assets/welcome_templates/js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
</head>

<body>
	<div class="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.html">Luxury <span>resorts</span></a>
				</div>
				<div class="top-menu">
					<span class="menu"><img src="<?= base_url() ?>assets/welcome_templates/images/nav.png" alt="" /> </span>
					<ul>
						<nav class="cl-effect-3">
							<li><a href="#home" class="active scroll">Login</a></li>
							<li><a href="#aboutus" class="scroll">Daftar</a></li>
						</nav>
					</ul>
				</div>
				<!--script-nav-->
				<script>
					$("span.menu").click(function() {
						$(".top-menu ul").slideToggle("slow", function() {});
					});
				</script>
				<div class="clearfix"></div>
			</div>
		</div>
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slider-info">
							<img src="<?= base_url() ?>assets/welcome_templates/images/banner1.jpg" class="img-responsive" alt="" style="height: 200px;">
						</div>
					</li>
				</ul>
			</div>
		</section>
		<!-- FlexSlider -->
		<script defer src="<?= base_url() ?>assets/welcome_templates/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(function() {
				SyntaxHighlighter.all();
			});
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!-- FlexSlider -->
		<!-- slider -->
	</div>
	<div class="content">
		<div class="about-section" id="aboutus">
			<div class="container">
				<h3>about <span>us<span></h3>
				<div class="about-grids">
					<div class="col-md-2"></div>
					<div class="col-md-8 about-grid">
						<img src="<?= base_url() ?>assets/welcome_templates/images/page1_img3.jpg" style="width: 200px; height: auto;">
						<h4>Apa Itu Kosku?</h4>
						<p>Di aplikasi ini, kamu dapat mengetahui, menyimpan, mengubah
							dan menghapus data anak kos kamu. Jadi, kamu tidak perlu membawa buku untuk mendata
							anak kos mu. Cukup di dalam aplikasi ini. Dan juga, Di aplikasi ini, kamu dapat mengetahui,
							menyimpan, mengubah dan menghapus data pembayaran anak kos kamu. Jadi, kamu tidak perlu membawa buku untuk
							mendata pembayaran anak kos mu. Cukup di dalam aplikasi ini.</p>
					</div>
				</div>
			</div>
			<a class="button hvr-shutter-in-vertical" href="#" style="margin-top: 50px;">read more</a>
		</div>
		<div class="services-section" id="services">
			<div class="container">
				<h3>our <span>services</span></h3>
				<div class="services-grids">
					<div class="col-md-6 service-leftgrid">
						<div class="service1">
							<div class="left-grid1">
								<h4>01</h4>
							</div>
							<div class="left-grid2">
								<h4>Manajemen Data Anak Kos</h4>
								<p>Dengan aplikasi ini, kamu bisa dengan cepat melihat, mengubah
									dan menghapus data pengguna kosmu sehingga tak perlu repot
									lagi membawa buku tabalmu</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="service2">
							<div class="left-grid1">
								<h4>02</h4>
							</div>
							<div class="left-grid2">
								<h4 class="card-title">Komplain seputar kos mu</h4>
								<p class="card-text">
									Dengan aplikasi ini, kamu dapat dengan mudah mengetahui data
									komplain yang kamu dapat dari anak kos mu.
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-6 service-rightgrid">
						<div class="service1">
							<div class="left-grid1">
								<h4>03</h4>
							</div>
							<div class="left-grid2">
								<h4 class="card-title">Manajemen Pembayaran Anak Kos</h4>
								<p class="card-text">
									Dengan aplikasi ini, kamu dapat dengan mudah mengetahui,
									mencatat, dan mengubah data pembayaran pengguna kosmu.
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"> </div>

				</div>
			</div>
		</div>
		<div class="price-section" id="pricing">
			<div class="container">
				<div class="contact-grid">
					<div class="col-md-6 contactdetails-grid">
						<h4>contact form</h4>
						<h5>name <span>*</span></h5>
						<input type="text">
						<h5>email address <span>*</span></h5>
						<input type="text">
						<h5>subject <span>*</span></h5>
						<input type="text">
						<h5>message <span>*</span></h5>
						<textarea> </textarea>
						<input type="button" value="send">
					</div>
					<div class="col-md-6 contactdetails-grid1">
						<div class="address">
							<h4>Address</h4>
							<p>500 Lorem Ipsum Dolor Sit,</p>
							<p>22-56-2-9 Sit Amet, Lorem,</p>
							<p>USA</p>
							<p>Phone:(00) 222 666 444</p>
							<p>Fax: (000) 000 00 00 0</p>
							<p>Email: <a href="mailto:example@mail.com">info@mycompany.com</a></p>
							<p>Follow on: <a href="#">Facebook</a> , <a href="#">Twitter</a></p>
						</div>
						<div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3021.0814617966994!2d-73.96467908332265!3d40.782223218920294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral+Park!5e0!3m2!1sen!2sin!4v1420805667126"></iframe>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="contact-section" id="contact">

		</div>
		<div class="footer-section">
			<div class="container">
				<div class="footer-top">
					<div class="social-icons">
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
					</div>
				</div>
				<div class="footer-bottom">
					<p> Copyright &copy;2015 All rights Reserved | Design by<a href="http://w3layouts.com" target="target_blank">W3Layouts</a></p>
				</div>
				<script type="text/javascript">
					$(document).ready(function() {
						/*
								var defaults = {
						  			containerID: 'toTop', // fading element id
									containerHoverID: 'toTopHover', // fading element hover id
									scrollSpeed: 1200,
									easingType: 'linear' 
						 		};
								*/

						$().UItoTop({
							easingType: 'easeOutQuart'
						});

					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
	</div>
</body>

</html>