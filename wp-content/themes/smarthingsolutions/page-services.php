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
                <?php $services_arr = get_field('services','option'); ?>
                <?php foreach($services_arr['services'] as $all_services): ?>			
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-service">
                            <?php echo $all_services['icon']; ?>
                            <h2><a href="<?php echo $all_services['url']; ?>"><?php echo $all_services['heading']; ?></a></h2>
                            <p><?php echo $all_services['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>	
            </div>
        </div>
    </section>
    <!--/ End Services -->

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
    