<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo assets_url(); ?>css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Home - Full Screen Image | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="inicio" class="standard-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo.png" alt="Canvas Logo"></a>
						<a href="inicio" class="retina-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark@2x.png"><img src="<?php echo assets_url(); ?>images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li><a href="inicio"><div>PROIT</div><span>Sobre Nosotros</span></a>
								<ul>
									<li><a href="nosotros"><div>Sobre Nosotros</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Mercados</div><span>Buy Now</span></a>
								<ul>
									<li><a href="admin_p"><div>Administración Pública</div></a></li>
									<li><a href="ambiente"><div>Ambiente</div></a></li>
									<li><a href="agricultura"><div>Agricultura</div></a></li>
									<li><a href="energia"><div>Energía</div></a></li>
									<li><a href="industria"><div>Industria 4.0</div></a></li>
									<li><a href="mar"><div>Mar y Crecimiento Azul</div></a></li>
									<li><a href="salud"><div>Salud</div></a></li>
									<li><a href="servicios_f"><div>Servicios Financieros</div></a></li>
									<li><a href="telecomunicaciones"><div>Telecomunicaciones</div></a></li>
									<li><a href="transporte"><div>Transporte</div></a></li>
									<li><a href="ciudades_i"><div>Ciudades inteligentes y IOT</div></a></li>
								</ul>
							</li>
							<li><a href="#"><div>Soluciones</div><span>Amazing Elements</span></a>
								<ul>
									<li><a href="soluciones"><div>Soluciones de Negocios</div></a></li>
									<li><a href="intraestructura"><div>Infraestructura</div></a></li>
									<li><a href="seguridad"><div>Seguridad</div></a></li>
									<li><a href="plataformas"><div>Plataformas en Aplicaciones</div></a></li>
									<li><a href="redes_i"><div>Redes Inteligentes</div></a></li>
									<li><a href="gestion_s"><div>Gestión de servicios</div></a></li>
									<li><a href="outsourcing"><div>Outsourcing Global</div></a></li>
									<li><a href="productos"><div>Productos Compra</div></a></li>
								</ul>
							</li>
							<li class="current">
								<a href="contacto"><div>Contactos</div><span>Información de contacto</span></a>
							</li>
						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo assets_url(); ?>images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="<?php echo assets_url(); ?>images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark">

			<div class="container clearfix">
				<h1>Contact</h1>
				<span>Get in Touch with Us</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Page Sub Menu
		============================================= -->
		<!--<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Contact <span>Options</span></div>

					<nav>
						<ul>
							<li class="current"><a href="contact-7.html"><div>Default</div></a></li>
							<li><a href="contact-7-recaptcha.html"><div>With reCaptcha</div></a></li>
							<li><a href="contact-7-file.html"><div>File Upload</div></a></li>
							<li><a href="contact-7-inline.html"><div>Inline Notification</div></a></li>
						</ul>
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div>--><!-- #page-menu end -->

		<!-- Contact Form & Map Overlay Section
		============================================= -->
		<section id="map-overlay">

			<div class="container clearfix">

				<!-- Contact Form Overlay
				============================================= -->
				<div id="contact-form-overlay-mini" class="clearfix">

					<div class="fancy-title title-dotted-border">
						<h3>Send us an Email</h3>
					</div>

					<div class="contact-widget">

						<div class="contact-form-result"></div>

						<!-- Contact Form
						============================================= -->
						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

							<div class="col_full">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col_full">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<label for="template-contactform-service">Services</label>
								<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Wordpress</option>
									<option value="PHP / MySQL">PHP / MySQL</option>
									<option value="HTML5 / CSS3">HTML5 / CSS3</option>
									<option value="Graphic Design">Graphic Design</option>
								</select>
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
							</div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
							</div>

						</form>

					</div>


				</div><!-- Contact Form Overlay End -->

			</div>

			<!-- Google Map
			============================================= -->
			<section id="google-map" class="gmap"></section>

		</section><!-- Contact Form & Map Overlay Section End -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<img src="<?php echo assets_url(); ?>images/footer-logo.png" alt="" class="footer-logo">

						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
						</div>
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/functions.js"></script>
	
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/jquery.gmap.js"></script>

	<script type="text/javascript">

		$('#google-map').gMap({
			//~ address: 'Melbourne, Australia',
			//~ maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					//~ address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "<?php echo assets_url(); ?>images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			latitude: 26.010593,
			longitude: -80.185812,
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});

	</script>

</body>
</html>
