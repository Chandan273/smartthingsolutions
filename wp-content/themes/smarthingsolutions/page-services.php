<?php 
    get_header(); 
	$serviceArr = get_field('service');
?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><?php echo $serviceArr['banner_heading']; ?></h2>
                    <ul class="breadcrumb-cls"><?php get_breadcrumb(); ?></ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- Services -->
    <section id="services" class="services archives section">
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
			
			<?php if( have_rows('what_we_provide') ):
				while( have_rows('what_we_provide') ) : the_row(); ?>			
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service">
                        <?php echo get_sub_field('icon'); ?>
                        <h2><a href="service-single.html"><?php echo get_sub_field('title'); ?></a></h2>
                        <p><?php echo get_sub_field('description'); ?></p>
                    </div>
                </div>
			<?php endwhile;
				endif; 
			?>	

                </div>
            </div>
        </div>
    </section>
    <!--/ End Services -->

    <!-- Partners -->
    <section id="partners" class="partners section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg"><?php echo $serviceArr['service_background_title']; ?></span>
                        <h1><?php echo $serviceArr['service_heading']; ?></h1>
                        <p><?php echo $serviceArr['service_description']; ?><p>
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
    