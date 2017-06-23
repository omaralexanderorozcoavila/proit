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
						<a href="inicio" class="standard-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark.png"><img src="<?php echo assets_url(); ?>images/logo.png" alt="Canvas Logo"></a>
						<a href="inicio" class="retina-logo" data-dark-logo="<?php echo assets_url(); ?>images/logo-dark@2x.png"><img src="<?php echo assets_url(); ?>images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="sub-title">

						<ul>
							<li><a href="inicio"><div><?php echo $this->lang->line('link_home'); ?></div><span><?php echo $this->lang->line('sub_text_link_home'); ?></span></a>
								<ul>
									<li><a href="nosotros"><div><?php echo $this->lang->line('link_nosotros'); ?></div></a></li>
								</ul>
							</li>
							<li><a href="#"><div><?php echo $this->lang->line('link_mercados'); ?></div><span><?php echo $this->lang->line('sub_text_link_mercados'); ?></span></a>
								<ul>
									<li><a href="admin_p"><div><?php echo $this->lang->line('link_admin'); ?></div></a></li>
									<li><a href="ambiente"><div><?php echo $this->lang->line('link_ambiente'); ?></div></a></li>
									<li><a href="agricultura"><div><?php echo $this->lang->line('link_agricultura'); ?></div></a></li>
									<li><a href="energia"><div><?php echo $this->lang->line('link_energia'); ?></div></a></li>
									<li><a href="industria"><div><?php echo $this->lang->line('link_industria'); ?></div></a></li>
									<li><a href="mar"><div><?php echo $this->lang->line('link_mar'); ?></div></a></li>
									<li><a href="salud"><div><?php echo $this->lang->line('link_salud'); ?></div></a></li>
									<li><a href="servicios_f"><div><?php echo $this->lang->line('link_servicios'); ?></div></a></li>
									<li><a href="telecomunicaciones"><div><?php echo $this->lang->line('link_telecomunicaciones'); ?></div></a></li>
									<li><a href="transporte"><div><?php echo $this->lang->line('link_transporte'); ?></div></a></li>
									<li><a href="ciudades_i"><div><?php echo $this->lang->line('link_ciudades'); ?></div></a></li>
								</ul>
							</li>
							<li class="current"><a href="#"><div><?php echo $this->lang->line('link_soluciones'); ?></div><span><?php echo $this->lang->line('sub_text_link_soluciones'); ?></span></a>
								<ul>
									<li><a href="soluciones"><div><?php echo $this->lang->line('link_soluciones_n'); ?></div></a></li>
									<li><a href="intraestructura"><div><?php echo $this->lang->line('link_infraestructura'); ?></div></a></li>
									<li><a href="seguridad"><div><?php echo $this->lang->line('link_seguridad'); ?></div></a></li>
									<li><a href="plataformas"><div><?php echo $this->lang->line('link_plataformas'); ?></div></a></li>
									<li><a href="redes_i"><div><?php echo $this->lang->line('link_redes'); ?></div></a></li>
									<li><a href="gestion_s"><div><?php echo $this->lang->line('link_gestion'); ?></div></a></li>
									<li><a href="outsourcing"><div><?php echo $this->lang->line('link_outsourcing'); ?></div></a></li>
									<li><a href="productos"><div><?php echo $this->lang->line('link_productos'); ?></div></a></li>
								</ul>
							</li>
							<li>
								<a href="contacto"><div><?php echo $this->lang->line('link_contactos'); ?></div><span><?php echo $this->lang->line('sub_text_link_contactos'); ?></span></a>
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
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo assets_url(); ?>images/about/parallax.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1>Plataformas de aplicaciones</h1>
				<span></span>
				<ol class="breadcrumb">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Soluciones</a></li>
					<li class="active">Plataformas de aplicaciones</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="section header-stick dark">
				<div class="container clearfix">
					<div class="row">

						<div class="col-md-9">
							<div class="heading-block bottommargin-sm">
								<h3>Transforme su negocio, digitalizando su empresa.</h3>
							</div>
						</div>

						<!--<div class="col-md-3">
							<a href="#" class="button button-3d button-dark button-large btn-block center" style="margin-top: 30px;">Check our Services</a>
						</div>-->

					</div>
				</div>
			</div>
			
			<div class="container clearfix">

				<div class="col_half topmargin-sm bottommargin">
					<img data-animate="fadeInLeftBig" src="<?php echo assets_url(); ?>images/services/imac.png" alt="Imac">
				</div>

				<div class="col_half col_last topmargin-sm bottommargin-lg col_last">

					<div class="heading-block topmargin">
						<h2>Especialistas en:</h2>
						<span></span>
					</div>
					
					<ul class="iconlist iconlist-large iconlist-color">
						<li><i class="icon-ok-sign"></i> Plataformas de CRM</li>
						<li><i class="icon-ok-sign"></i> Movilidad y APP</li>
						<li><i class="icon-ok-sign"></i> Experiencia de cliente</li>
						<li><i class="icon-ok-sign"></i> Análisis de Procesos de Negocio</li>
						<li><i class="icon-ok-sign"></i> Gestión de Contenidos</li>
						<li><i class="icon-ok-sign"></i> Workflow de negocio</li>
						<li><i class="icon-ok-sign"></i> Portales colaborativos</li>
						<li><i class="icon-ok-sign"></i> Social Enterprise</li>
					</ul>

					<p>Una vez que el mercado busca respuestas en tiempo real, las empresas tienen cada vez más que ajustarse a esa realidad. La expresión "empresa en tiempo real" nunca ha tenido tanto sentido, cambiando el paradigma en que vivimos.</p>
					
					<p>De esta forma, debe mirar a su negocio y a sus clientes, y tomar en cuenta la innovación digital de su empresa y su actividad. Sólo de este modo (recurso a procesos y tecnología disruptiva) podrá ofrecer a sus clientes un viaje unificado, una experiencia de relación única y personal.</p>

					<!--<a href="#" class="button button-border button-rounded button-large noleftmargin topmargin-sm">Experience More</a>-->

				</div>

				<!--<div class="line"></div>-->

			</div>
			
			<!--<div class="container">

				<div class="col_half">
					<h5>Half Width</h5>
					Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.
				</div>

				<div class="col_half col_last">
					<h5>Half Width (Last)</h5>
					Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.
				</div>

			</div>-->

		</section><!-- #content end -->
		
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark">
			<div class="container clearfix">
				<div class="col_half topmargin nobottommargin dark">
					<div class="heading-block topmargin">
						<h3>TENEMOS LA VISIÓN Y EXPERIENCIA</h3>
						<span></span>
					</div>					

					<p>Posibilitamos la catalogación de toda la información producida por sus clientes, podemos sistematizar por hábitos de compra, preferencias, canales más utilizados, entre muchas otras características.Es importante poder contar con un mapa que permite identificar los comportamientos de sus clientes nunca ha sido tan fácil, así usted podrá conocer claramente las necesidades y exigencias de sus clientes.</p>
					
					<p>Su negocio necesita nuevos procesos y soluciones tecnológicas que permitan no sólo aprovechar los recursos que la era digital le proporciona, sino también estar mejor preparados para organizar sus respuestas.</p>
					
					<p>El Grupo COMPTA tiene una vasta experiencia en la transformación de procesos de negocio, poseyendo competencias al nivel de la entrega de la mejor tecnología y de las mejores aplicaciones. Además, tenemos la visión y la experiencia.</p>
					
					<p>En conjunto podremos desarrollar su actividad de negocio, e implementarlo en las herramientas tecnológicas que hoy día estamos expuestos.</p>

					<!--<div class="divider divider-short"><i class="icon-circle"></i></div>

					<ul class="iconlist iconlist-large iconlist-color">
						<li><i class="icon-ok-sign"></i> Interactive Live Builder</li>
						<li><i class="icon-ok-sign"></i> Valid HTML5 &amp; CSS3 Semantics</li>
						<li><i class="icon-ok-sign"></i> 100% Open Source &amp; Customizable</li>
						<li><i class="icon-ok-sign"></i> Responsive &amp; Retina Devices Support</li>
						<li><i class="icon-ok-sign"></i> Easy Embeddable Media &amp; Graphics</li>
						<li><i class="icon-ok-sign"></i> Lifetime <strong>FREE</strong> Updates</li>
					</ul>-->

				</div>

				<div class="col_half col_last topmargin nobottommargin">

					<img src="<?php echo assets_url(); ?>images/icons/macbook.png" alt="Macbook Video Underlay" data-animate="fadeInRightBig">

				</div>
			</div>
		</section><!-- #page-title end -->
		
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-dark">
			<a class="button button-full center tright footer-stick">
				<div class="container clearfix">
					¡Estamos enfocados en la solución! <strong>Contáctenos</strong> <i class="icon-caret-right" style="top:4px;"></i>
				</div>
			</a>
		</section><!-- #page-title end -->
		
		<!-- Page Title
		============================================= -->
		<!--<section id="page-title" class="page-title-dark">
			<div class="container clearfix">

				<div class="col_one_third dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-screen i-alt"></i></a>
						</div>
						<h3>Responsive Layout</h3>
						<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
					</div>
				</div>

				<div class="col_one_third dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-eye i-alt"></i></a>
						</div>
						<h3>Retina Graphics</h3>
						<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
					</div>
				</div>

				<div class="col_one_third col_last dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-beaker i-alt"></i></a>
						</div>
						<h3>Powerful Performance</h3>
						<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
					</div>
				</div>

				<div class="clear"></div>

				<div class="col_one_third dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-stack i-alt"></i></a>
						</div>
						<h3>Premium Sliders</h3>
						<p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
					</div>
				</div>

				<div class="col_one_third dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-tint i-alt"></i></a>
						</div>
						<h3>Unlimited Colors</h3>
						<p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
					</div>
				</div>

				<div class="col_one_third col_last dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-text-width i-alt"></i></a>
						</div>
						<h3>Customizable Fonts</h3>
						<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
					</div>
				</div>

				<div class="clear"></div>

				<div class="col_one_third nobottommargin dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-stack i-alt"></i></a>
						</div>
						<h3>Premium Sliders</h3>
						<p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
					</div>
				</div>

				<div class="col_one_third nobottommargin dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-tint i-alt"></i></a>
						</div>
						<h3>Unlimited Colors</h3>
						<p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
					</div>
				</div>

				<div class="col_one_third nobottommargin col_last dark">
					<div class="feature-box fbox-rounded fbox-effect">
						<div class="fbox-icon">
							<a href="#"><i class="icon-text-width i-alt"></i></a>
						</div>
						<h3>Customizable Fonts</h3>
						<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
					</div>
				</div>

			</div>
		</section>--><!-- #page-title end -->

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
