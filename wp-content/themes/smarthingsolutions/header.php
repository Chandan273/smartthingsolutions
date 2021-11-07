<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<title><?php echo bloginfo(); ?></title>
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="Radix" content="Responsive Multipurpose Business Template">
		<meta name='copyright' content='Radix'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

        <?php wp_head(); ?>	

    </head>
    <body>
	
		<!-- Preloader -->
		 <div class="preloader">
		  <div class="preloader-inner">
			<div class="single-loader one"></div>
			<div class="single-loader two"></div>
			<div class="single-loader three"></div>
			<div class="single-loader four"></div>
			<div class="single-loader five"></div>
			<div class="single-loader six"></div>
			<div class="single-loader seven"></div>
			<div class="single-loader eight"></div>
			<div class="single-loader nine"></div>
		  </div>
		</div>
		<!-- End Preloader -->
		
		<!-- Get Pro Button -->
		<ul class="pro-features">
			<a class="get-pro" href="#">Contact Us</a>
			<li class="title">Demo Version Some Features</li>
			<li>Multipage & Onepage Homepage</li>
			<li>26+ HTML5 pages</li>
			<li>All Premium Features</li>
			<li>Documentation Included</li>
			<li>6+ Month Dedicated Support!</li>
			<div class="button">
				<a href="#" target="_blank" class="btn">Check Our Pricing</a>
			</div>
		</ul>
		
		<!-- Start Header -->
		<header id="header" class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12">
							<!-- Contact -->
							<ul class="contact">
								<li><i class="fa fa-headphones"></i><?php echo get_option('smartthingsolutions_phone_number_options'); ?></li>
								<li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo get_option('smartthingsolutions_email_options'); ?>"><?php echo get_option('smartthingsolutions_email_options'); ?></a></li>
								<li><i class="fa fa-clock-o"></i><?php echo get_option('smartthingsolutions_work_time_option'); ?></li>
							</ul>
							<!--/ End Contact -->
						</div>
						<div class="col-lg-6 col-12">
							<div class="topbar-right">
								<!-- Search Form -->
								<div class="search-form active">
								<?php echo do_shortcode('[ivory-search id="108" title="Default Search Form"]');?>
								</div>
								<!--/ End Search Form -->
								<!-- Social -->
									<?php echo do_shortcode(get_option('smartthingsolutions_social_icons_option')); ?>
								<!--/ End Social -->
							</div>
						</div>
					</div>
				</div>	
			</div>
			<!--/ End Topbar -->
			<!-- Middle Bar -->
			<div class="middle-bar">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-12">
							<!-- Logo -->
							<div class="logo">
								<?php the_custom_logo(); ?>
							</div>
							<div class="link"><?php the_custom_logo(); ?></div>
							<!--/ End Logo -->
							<button class="mobile-arrow"><i class="fa fa-bars"></i></button>
							<div class="mobile-menu"></div>
						</div>
						<div class="col-lg-10 col-12">
							<!-- Main Menu -->
							<div class="mainmenu">
								<?php wp_nav_menu(
									array( 
										'container'=>false,
										'menu_class'=>'nav menu'
										//'theme_location'=>'header_menu'
									)
								); ?>
								<!-- Button -->
								<div class="button">
									<a href="<?php echo get_option('smartthingsolutions_buttonurl_option'); ?>" class="btn"><?php echo get_option('smartthingsolutions_headerquote_option'); ?></a>
								</div>
								<!--/ End Button -->
							</div>
							<!--/ End Main Menu -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Bar -->
		</header>
		<!--/ End Header -->        