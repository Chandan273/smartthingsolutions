<?php 
    get_header(); 
?>
		<!-- Breadcrumbs -->
		<section class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2><i class="fa fa-pencil"></i>Our Contact Details</h2>
						<ul>
							<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
							<li class="active"><a href="contact.html"><i class="fa fa-clone"></i>Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
	
		<!-- Start Contact -->
		<section id="contact-us" class="contact-us section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
                            
                        <?php if(have_posts()): the_post(); ?>
                            <span class="title-bg"><?php the_title(); ?></span>
                            <?php the_content(); ?>
                        <?php endif; ?>    

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="contact-main">
							<div class="row">
								<!-- Contact Form -->
								<div class="col-lg-8 col-12">
									<div class="form-main">
										<div class="text-content">
											<h2>Send Message Us</h2>
										</div>
										<?php echo do_shortcode('[contact-form-7 id="20" title="Contact us"]'); ?>	
									</div>
								</div>
								<!--/ End Contact Form -->
								<!-- Contact Address -->
								<div class="col-lg-4 col-12">
									<div class="contact-address">
										<!-- Address -->
										<div class="contact">
											<h2>Our Contact Address</h2>
											<ul class="address">
												<li><i class="fa fa-paper-plane"></i><span>Address: </span> Road no 3, Block-D, Khilgaon 1200, Dhaka Bangladesh</li>
												<li><i class="fa fa-phone"></i><span>Phone: </span>+(123) 31222183</li>
												<li class="email"><i class="fa fa-envelope"></i><span>Email: </span><a href="mailto:info@youremail.com">info@youremail.com</a></li>
											</ul>
										</div>
										<!--/ End Address -->
										<!-- Social -->
										<ul class="social">
											<li class="active"><a href="#"><i class="fa fa-facebook"></i>Like Us facebook</a></li>
											<li><a href="#"><i class="fa fa-twitter"></i>Follow Us twitter</a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i>Follow Us google-plus</a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i>Follow Us linkedin</a></li>
											<li><a href="#"><i class="fa fa-behance"></i>Follow Us behance</a></li>
										</ul>
										<!--/ End Social -->
									</div>
								</div>
								<!--/ End Contact Address -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact -->
	
		<!-- Partners -->
		<section id="partners" class="partners section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<span class="title-bg">Clients</span>
							<h1>Our Partners</h1>
							<p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="partners-inner">
							<div class="row no-gutters">
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-1.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-2.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-3.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-4.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-5.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-6.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-7.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-8.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-5.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-6.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-7.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
								<!-- Single Partner -->
								<div class="col-lg-2 col-md-3 col-12">
									<div class="single-partner">
										<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner-3.png" alt="#"></a>
									</div>
								</div>
								<!--/ End Single Partner -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Partners -->
<?php 
    get_footer(); 
?>
    