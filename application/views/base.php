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
	<div id="wrapper" class="clearfix" style="background-color:#333333 !important;">
		
		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="mailto:info@canvas.com"><i class="icon-email3"></i></a></li>
							<li><a href="login-register.html">Login</a>
								<div class="top-link-section">
									<form id="top-login" role="form">
										<div class="input-group" id="top-login-username">
											<span class="input-group-addon"><i class="icon-user"></i></span>
											<input type="email" class="form-control" placeholder="Email address" required="">
										</div>
										<div class="input-group" id="top-login-password">
											<span class="input-group-addon"><i class="icon-key"></i></span>
											<input type="password" class="form-control" placeholder="Password" required="">
										</div>
										<label class="checkbox">
										  <input type="checkbox" value="remember-me"> Remember me
										</label>
										<button class="btn btn-danger btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div class="top-links">
						<ul>
							<li>
								<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/portuguese';" href="#">
								<?php if($this->session->userdata('site_lang') == 'portuguese') echo '<span style="color:#3DAAD6;">Pt</span>'; 
								else echo '<span>Pt</span>';?>
								</a>
							</li>
							<li>
								<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/spanish';" href="#">
								<?php if($this->session->userdata('site_lang') == 'spanish') echo '<span style="color:#3DAAD6;">Es</span>'; 
								else echo '<span>Es</span>';?>
								</a>
							</li>
							<li>
								<a onclick="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/english';" href="#">
								<?php if($this->session->userdata('site_lang') == 'english') echo '<span style="color:#3DAAD6;">En</span>'; 
								else echo '<span>En</span>';?>
								</a>
							</li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="#" class="standard-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo.png" alt="Canvas Logo"></a>
						<a href="#" class="retina-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li id="li_index"><a href="index"><div><?php echo $this->lang->line('link_home'); ?></div><span>Lets Start</span></a>
							</li>
							
							<li id="li_proit"><a href="index"><div><?php echo $this->lang->line('link_home_proit'); ?></div><span>About us</span></a>
								<ul>
									<li><a href="about_us"><div><?php echo $this->lang->line('link_nosotros'); ?></div></a></li>
									<li><a href="partnerships"><div><?php echo $this->lang->line('link_partnerships'); ?></div></a></li>
								</ul>
							</li>
							<li id="li_smartcities"><a href="smartcities"><div><?php echo $this->lang->line('link_ciudades'); ?></div><span>Intelligent Solutions</span></a></li>
							<li id="li_smartindustries"><a href="smartindustries"><div><?php echo $this->lang->line('link_smartindustries'); ?></div><span>4.0 Industry</span></a></li>
							<li id="li_products"><a href="#"><div><?php echo $this->lang->line('link_soluciones'); ?></div><span>Innovations for Industry & Smartcities</span></a>
								<ul>
									<li><a href="energyconsumption"><div><?php echo $this->lang->line('link_energia'); ?></div></a></li>
									<li><a href="greenspaces"><div><?php echo $this->lang->line('link_greenspaces'); ?></div></a></li>
									<li><a href="wastlecollection"><div><?php echo $this->lang->line('link_wastlecollection'); ?></div></a></li>
									<li><a href="fleetmanagement"><div><?php echo $this->lang->line('link_fleetmanagement'); ?></div>
</a></li>								
									<li><a href="citizeninterface"><div><?php echo $this->lang->line('link_citizeninterface'); ?></div></a></li>
									<li><a href="agriculture"><div><?php echo $this->lang->line('link_agriculture'); ?></div></a></li>
									<li><a href="cargomanagement"><div><?php echo $this->lang->line('link_cargomanagement'); ?></div></a></li>
									<li><a href="aquaculture"><div><?php echo $this->lang->line('link_aquaculture'); ?></div></a></li>
									<li><a href="products"><div><?php echo $this->lang->line('link_products'); ?></div></a></li>
								</ul>
							</li>
							<li id="li_contact">
								<a href="contacto"><div><?php echo $this->lang->line('link_contactos'); ?></div><span>Know us</span></a>
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
						
						

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<?php
		// Carga de páginas
		require_once($pagina);
		?>

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
								<input type="text" id="section" value="<?php echo $section;?>">
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
	
	<!-- Google Maps
	============================================= -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script type="text/javascript" src="<?php echo assets_url(); ?>js/jquery.gmap.js"></script>

	<script type="text/javascript">
		
		// Marcar la sección actual
		if($("#section").val() == "index"){
			$("#li_index").addClass('current');
		}else if($("#section").val() == "proit"){
			$("#li_proit").addClass('current');
		}else if($("#section").val() == "smartcities"){
			$("#li_smartcities").addClass('current');
		}else if($("#section").val() == "smartindustries"){
			$("#li_smartindustries").addClass('current');
		}else if($("#section").val() == "products"){
			$("#li_products").addClass('current');
		}else if($("#section").val() == "contact"){
			$("#li_contact").addClass('current');
		}
		
		// Agregar mapa de la empresa en la sección de mapa de contacto
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
