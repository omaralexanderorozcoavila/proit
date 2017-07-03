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
	<title>PROIT technologies</title>

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
						<a href="index" class="standard-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo.png" alt="Canvas Logo"></a>
						<a href="index" class="retina-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li><a href="index"><div><?php echo $this->lang->line('link_home'); ?></div></a>
							</li>
							
							<li><a href="#"><div><?php echo $this->lang->line('link_home_proit'); ?></div></a>
								<ul>
									<li><a href="about_us"><div><?php echo $this->lang->line('link_nosotros'); ?></div></a></li>
									<li><a href="partnerships"><div><?php echo $this->lang->line('link_partnerships'); ?></div></a></li>
								</ul>
							</li>
							<li class="current"><a href="smartcities"><div><?php echo $this->lang->line('link_ciudades'); ?></div></a></li>
							<li><a href="smartindustries"><div><?php echo $this->lang->line('link_smartindustries'); ?></div></a></li>
							<li><a href="#"><div><?php echo $this->lang->line('link_soluciones'); ?></div></a>
								<ul>
									<li><a href="energyconsumption"><div><?php echo $this->lang->line('link_energia'); ?></div></a></li>
									<li><a href="greenspaces"><div><?php echo $this->lang->line('link_greenspaces'); ?></div></a></li>
									<li><a href="wastlecollection"><div><?php echo $this->lang->line('link_wastlecollection'); ?></div></a></li>
									<li><a href="fleetmanagement"><div><?php echo $this->lang->line('link_fleetmanagement'); ?></div>
</a></li>								
									<li><a href="citizeninterface"><div><?php echo $this->lang->line('link_citizeninterface'); ?></div></a></li>
									<li ><a href="agriculture"><div><?php echo $this->lang->line('link_agriculture'); ?></div></a></li>
									<li><a href="cargomanagement"><div><?php echo $this->lang->line('link_cargomanagement'); ?></div></a></li>
									<li><a href="aquaculture"><div><?php echo $this->lang->line('link_aquaculture'); ?></div></a></li>
									<li><a href="products"><div><?php echo $this->lang->line('link_products'); ?></div></a></li>
								</ul>
							</li>
							<li>
								<a href="contacto"><div><?php echo $this->lang->line('link_contactos'); ?></div></a>
							</li>
						</ul>
						

						<!-- Top Search
						============================================= -->
						<!--<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div>--><!-- #top-search end -->
						
						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/portuguese';" href="#">
							<?php if($this->session->userdata('site_lang') == 'portuguese') echo '<span style="color:#3DAAD6;">Pt</span>'; 
							else echo '<span>Pt</span>';?>
							</a>
						</div><!-- #top-search end -->
						
						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/spanish';" href="#">
							<?php if($this->session->userdata('site_lang') == 'spanish') echo '<span style="color:#3DAAD6;">Es</span>'; 
							else echo '<span>Es</span>';?>
							</a>
						</div><!-- #top-search end -->
						
						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/english';" href="#">
							<?php if($this->session->userdata('site_lang') == 'english') echo '<span style="color:#3DAAD6;">En</span>'; 
							else echo '<span>En</span>';?>
							</a>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Process Steps</h1>
				<span>Go through a Definite Process</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li class="active">Process Steps</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				<div class="container clearfix">
					<div class="row clearfix">

						<div class="col-lg-5">
							<div class="heading-block topmargin">
								<h1>Welcome to Canvas.<br>MultiPurpose Template.</h1>
							</div>
							<p class="lead">Create a website that you are gonna be proud of. Be it Business, Portfolio, Agency, Photography, eCommerce &amp; much more.</p>
						</div>

						<div class="col-lg-7">

							<div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
								<img src="/assets/images/services/main-fbrowser.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
								<img src="/assets/images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">
							</div>

						</div>

					</div>
				</div>
				
				<div class="line"></div>
				
				<div class="container divcenter clearfix">

					<div class="heading-block center">
						<h2>Canvas: We know you want it!</h2>
						<span>Built with passion &amp; intuitiveness in mind. Canvas is a masterclass piece of work presented to you.</span>
					</div>

					<div style="position: relative;" data-height-lg="624" data-height-md="518" data-height-sm="397" data-height-xs="242" data-height-xxs="154">
						<img src="/assets/images/services/fbrowser.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
						<img src="/assets/images/services/fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">
						<img src="/assets/images/services/fbrowser2.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeIn" data-delay="1200" alt="iPad">
					</div>
				</div>
				
				<div class="line"></div>



				<div class="section dark parallax notopmargin nobottommargin noborder" style="height: 500px; padding: 145px 0;">

					<div class="container clearfix">

						<div class="slider-caption slider-caption-center" style="position: relative;">
							<div data-animate="fadeInUp">
								<h2 style="font-size: 42px;">Beautiful HTML5 Videos</h2>
								<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
								<a href="#" class="button button-border button-rounded button-white button-light button-large noleftmargin nobottommargin" style="margin-top: 20px;">Show More</a>
							</div>
						</div>

					</div>

					<div class="video-wrap">
						<video poster="/assets/images/videos/explore.jpg" preload="none" loop autoplay muted>
							<source src='/assets/images/videos/explore.mp4' type='video/mp4' />
							<source src='/assets/images/videos/explore.webm' type='video/webm' />
						</video>
						<div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
					</div>
					
					

				</div>
				
				<div class="divider divider-short divider-center"><i class=""></i></div>
				
				<div class="container clearfix">

					<div id="section-features" class="heading-block title-center page-section">
						<h2>Features Overview</h2>
						<span>Some of the Features that are gonna blow your mind off</span>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn">
								<a href="#"><img src="/assets/images/icons/features/responsive.png" alt="Responsive Layout"></a>
							</div>
							<h3>Responsive Layout</h3>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
								<a href="#"><img src="/assets/images/icons/features/retina.png" alt="Retina Graphics"></a>
							</div>
							<h3>Retina Graphics</h3>
							<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
								<a href="#"><img src="/assets/images/icons/features/performance.png" alt="Powerful Performance"></a>
							</div>
							<h3>Powerful Performance</h3>
							<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="600">
								<a href="#"><img src="/assets/images/icons/features/flag.png" alt="Responsive Layout"></a>
							</div>
							<h3>Endless Possibilities</h3>
							<p>You have complete easy control on each &amp; every element that provides endless customization possibilities.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="800">
								<a href="#"><img src="/assets/images/icons/features/tick.png" alt="Retina Graphics"></a>
							</div>
							<h3>Light &amp; Dark Scheme</h3>
							<p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="1000">
								<a href="#"><img src="/assets/images/icons/features/tools.png" alt="Powerful Performance"></a>
							</div>
							<h3>Customizable Fonts</h3>
							<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="1200">
								<a href="#"><img src="/assets/images/icons/features/map.png" alt="Responsive Layout"></a>
							</div>
							<h3>Responsive Layout</h3>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="1400">
								<a href="#"><img src="/assets/images/icons/features/seo.png" alt="Retina Graphics"></a>
							</div>
							<h3>Retina Graphics</h3>
							<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="1600">
								<a href="#"><img src="/assets/images/icons/features/support.png" alt="Powerful Performance"></a>
							</div>
							<h3>Powerful Performance</h3>
							<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

					

				</div>
				
				<div class="row clearfix common-height">

					<div class="col-md-6 center col-padding" style="background: url('/assets/images/services/main-bg.jpg') center center no-repeat; background-size: cover;">
						<div>&nbsp;</div>
					</div>

					<div class="col-md-6 center col-padding" style="background-color: #F5F5F5;">
						<div>
							<div class="heading-block nobottomborder">
								<span class="before-heading color">Easily Understandable &amp; Customizable.</span>
								<h3>Walkthrough Videos &amp; Demos</h3>
							</div>

							<div class="center bottommargin">
								<a href="http://vimeo.com/101373765" data-lightbox="iframe" style="position: relative;">
									<img src="images/services/video.jpg" alt="Video">
									<span class="i-overlay nobg"><img src="images/icons/video-play.png" alt="Play"></span>
								</a>
							</div>
							<p class="lead nobottommargin">Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>
						</div>
					</div>
					<div class="divider divider-short divider-center"><i class=""></i></div>

				</div>
				<div class="container clearfix">

					<div id="processTabs">
						<ul class="process-steps bottommargin clearfix">
							<li style="width: 16%;">
								<a href="#ptab1" class="i-alt divcenter">
									<img style="width: 55px;" src="/assets/images/icons/features/responsive.png">
								</a>
								<h5>Review Cart</h5>
							</li>
							<li style="width: 16%;">
								<a href="#ptab2" class="i-alt divcenter">
									<img style="width: 55px;" src="/assets/images/icons/features/tools.png">
								</a>
								<h5>Enter Shipping Info</h5>
							</li>
							<li style="width: 16%;">
								<a href="#ptab3" class="i-alt divcenter">
									<img style="width: 55px;" src="/assets/images/icons/features/tick.png">
								</a>
								<h5>Complete Payment</h5>
							</li>
							<li style="width: 16%;">
								<a href="#ptab4" class="i-alt divcenter">
									<img style="width: 55px;" src="/assets/images/icons/features/flag.png">
								</a>
								<h5>Order Complete</h5>
							</li>
							<li style="width: 16%;">
								<a href="#ptab5" class="i-alt divcenter">
									<img style="width: 55px;" src="/assets/images/icons/features/performance.png">
								</a>
								<h5>Order Complete</h5>
							</li>
							<li style="width: 16%;">
								<a href="#ptab6" class="i-alt divcenter">
									<img style="width: 55px;" src="/assets/images/icons/features/retina.png">
								</a>
								<h5>Order Complete</h5>
							</li>
						</ul>
						<div>
							<div id="ptab1">
								<div class="alert alert-success">
									<strong>Thank You.</strong> ptab2
								</div>
							</div>
							<div id="ptab2">
								<div class="alert alert-success">
									<strong>Thank You.</strong> ptab2
								</div>
							</div>
							<div id="ptab3">
								<div class="alert alert-success">
									<strong>Thank You.</strong> ptab3
								</div>
							</div>
							<div id="ptab4">
								<div class="alert alert-success">
									<strong>Thank You.</strong> ptab4
								</div>
							</div>
							<div id="ptab5">
								<div class="alert alert-success">
									<strong>Thank You.</strong> ptab5
								</div>
							</div>
							<div id="ptab6">
								<div class="alert alert-success">
									<strong>Thank You.</strong> ptab6
								</div>
							</div>
						</div>
					</div>
					

					
				</div>
				
				
				
				
				

			</div>

		</section>
		
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<img src="<?php echo assets_url(); ?>images/footer-logo.png" alt="" class="footer-logo">
						<?php echo $this->lang->line('rights_message'); ?>
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="inicio"><?php echo $this->lang->line('link_home_footer'); ?></a>/<a href="admin_p"><?php echo $this->lang->line('link_mercado_footer'); ?></a>/<a href="soluciones"><?php echo $this->lang->line('link_soluciones_footer'); ?></a>/<a href="contacto"><?php echo $this->lang->line('link_contact_footer'); ?></a>
						</div>
						<br>
						<div class="fright clearfix col_last">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<!--<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
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
							</a>-->

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

</body>
</html>
