<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-dark">

	<div class="container clearfix">
		<h1><?php echo $this->lang->line('nav_title'); ?></h1>
		<span><?php echo $this->lang->line('nav_sub_text'); ?></span>
		<ol class="breadcrumb">
			<li><a href="inicio"><?php echo $this->lang->line('nav_link'); ?></a></li>
			<li class="active"><?php echo $this->lang->line('nav_text_route4'); ?></li>
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
				<h3><?php echo $this->lang->line('form_title'); ?></h3>
			</div>

			<div class="contact-widget">

				<div class="contact-form-result"></div>

				<!-- Contact Form
				============================================= -->
				<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

					<div class="col_full">
						<label for="template-contactform-name"><?php echo $this->lang->line('field_name'); ?> <small>*</small></label>
						<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
					</div>

					<div class="col_full">
						<label for="template-contactform-email"><?php echo $this->lang->line('field_email'); ?> <small>*</small></label>
						<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
					</div>

					<div class="clear"></div>

					<div class="col_full">
						<label for="template-contactform-phone"><?php echo $this->lang->line('field_phone'); ?></label>
						<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
					</div>

					<!--<div class="col_full">
						<label for="template-contactform-service">Services</label>
						<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
							<option value="">-- Select One --</option>
							<option value="Wordpress">Wordpress</option>
							<option value="PHP / MySQL">PHP / MySQL</option>
							<option value="HTML5 / CSS3">HTML5 / CSS3</option>
							<option value="Graphic Design">Graphic Design</option>
						</select>
					</div>-->

					<div class="clear"></div>

					<div class="col_full">
						<label for="template-contactform-subject"><?php echo $this->lang->line('field_subject'); ?> <small>*</small></label>
						<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
					</div>

					<div class="col_full">
						<label for="template-contactform-message"><?php echo $this->lang->line('field_messaje'); ?> <small>*</small></label>
						<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
					</div>

					<div class="col_full hidden">
						<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
					</div>

					<div class="col_full">
						<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit"><?php echo $this->lang->line('send_button'); ?></button>
					</div>

				</form>

			</div>


		</div><!-- Contact Form Overlay End -->

	</div>

	<!-- Google Map
	============================================= -->
	<section id="google-map" class="gmap"></section>

</section><!-- Contact Form & Map Overlay Section End -->
