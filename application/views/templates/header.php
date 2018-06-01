<!DOCTYPE html>

<html lang="en">

    <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, width=device-width">

        <title><?php echo $title; ?></title>

        <meta name="title" content="<?php echo $meta_title; ?>">
        <!-- <meta name="keywords" content="<?php // echo $meta_keyword; ?>"> -->
        <meta name="description" content="<?php echo $meta_description; ?>">
        <meta name="robots" content="index, follow" />

        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php echo the_config('ga_id'); ?>', 'auto');
			ga('send', 'pageview');

		</script>

        <link href="<?php echo base_url('build/css/styles.css?v=1'); ?>" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>



    <body>

    	<header>

			<div class="navtop-info clearfix  hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-8">

						</div>
						<div class="col-md-6 col-sm-4 text-right">
							<p>
								Follow Us
								&nbsp;
								<a href="<?php echo the_config('facebook_link'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook icon"></i></a>
								&nbsp;&nbsp;
								<a href="<?php echo the_config('twitter_link'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter icon"></i></a>
								&nbsp;&nbsp;
								<a href="<?php echo the_config('googleplus_link'); ?>" target="_blank" title="Google Plus"><i class="fa fa-google-plus icon"></i></a>
								&nbsp;&nbsp;
								Call Us
								&nbsp;
								<a href="tel:<?php echo the_config('phone_number'); ?>" title="Call Us"><i class="fa fa-phone icon"></i> <?php echo the_config('phone_number'); ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<nav class="navbar master-nav">

				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  						<span class="sr-only">Toggle navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="<?php echo base_url(); ?>">
							<img src="<?php echo base_url('build/images/logo.png'); ?>" class="img-responsive hidden-xs" alt="<?php echo the_config('site_name'); ?>" title="<?php echo the_config('site_name'); ?>" />
							<img src="<?php echo base_url('build/images/logo-o.png'); ?>" class="img-responsive visible-xs" alt="<?php echo the_config('site_name'); ?>" title="<?php echo the_config('site_name'); ?>" />
						</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">

							<li><a href="<?php echo base_url('states'); ?>">All States</a></li>

							<?php if (!$this->uri->segment(1)) { ?>
								<li><a href="#section_majorcity" class="mjrcity">Major Cities</a></li>
							<?php } else { ?>
								<li><a href="#major_cities" data-toggle="modal">Major Cities</a></li>
							<?php } ?>

							<li><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>

							<li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>

							<li><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li>

							<li><a href="<?php echo base_url('faqs'); ?>">FAQs</a></li>

							<li><a href="<?php echo base_url('submit-your-business'); ?>" class="sbmt-biz">Submit Business</a></li>

						</ul>

						<!-- <ul class="nav navbar-nav navbar-right">

							<li>
								<a href="#" class="datetimer">
								  <span id="date"></span>
								  <span id="time"></span>
								  <span id="timezone"></span>
								</a>
							</li>

						</ul> -->

					</div>

				</div>

			</nav>

		</header>

        <main>
