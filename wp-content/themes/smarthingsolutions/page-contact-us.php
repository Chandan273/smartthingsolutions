<?php 
    get_header(); 
?>
		<!-- Breadcrumbs -->
		<section class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
					<?php
						$contact_us = get_field('contact_us');
					?>						
						<h2><?php echo $contact_us['banner_heading']; ?></h2>
						<ul class="breadcrumb-cls"><?php get_breadcrumb(); ?></ul>
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
							<h1><?php the_title(); ?></h1>
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
											<h2><?php echo $contact_us['form_heading']; ?></h2>
										</div>
										<?php echo do_shortcode($contact_us['shortcode']); ?>	
									</div>
								</div>
								<!--/ End Contact Form -->
								<!-- Contact Address -->
								<div class="col-lg-4 col-12">
									<div class="contact-address">
										<!-- Address -->
										<?php echo $contact_us['address']; ?>
										<!--/ End Address -->
										<!-- Social -->
										<?php echo do_shortcode('[social_icons_group id="186"]'); ?>
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
					<div class="col-12 wow fadeInUp">
						<?php $client_section_arr = get_field('client_section','option'); ?>
						<div class="section-title">
							<span class="title-bg"><?php echo $client_section_arr['client_background_title']; ?></span>
							<h1><?php echo $client_section_arr['client_heading']; ?></h1>
							<p><?php echo $client_section_arr['client_description']; ?><p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="partners-inner">
							<div class="row no-gutters">
								<?php if( have_rows('our_partner_gallery','option') ):
									while( have_rows('our_partner_gallery','option') ) : the_row(); ?>
										<!-- Single Partner -->
										<div class="col-lg-2 col-md-3 col-12">
											<div class="single-partner">
												<a href="#" target="_blank"><img src="<?php echo get_sub_field('partner_logo'); ?>" alt="partner_
												logo"></a>
											</div>
										</div>
								<?php endwhile;
									endif; 
								?>	
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