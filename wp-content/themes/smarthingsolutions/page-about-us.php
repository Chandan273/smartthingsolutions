<?php 
    get_header(); 
?>	
<?php $about_section_arr = get_field('about_section'); ?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><?php echo $about_section_arr['about_title']; ?></h2>
                    <ul class="breadcrumb-cls"><?php get_breadcrumb(); ?></ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                    
                    <?php if(have_posts()): the_post(); ?>
                        <span class="title-bg"><?php echo $about_section_arr['about_background_title']; ?></span>
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo $about_section_arr['about_descprition']; ?></p>
                        <?php the_content(); ?>
                    <?php endif; ?>     
                                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    
                    <div class="about-video">
                        <div class="single-video overlay">
                            <a href="<?php echo $about_section_arr['about_video_url']; ?>" class="video-popup mfp-fade"><i class="fa fa-play"></i></a>
                            <img src="<?php echo $about_section_arr['about_image']; ?>" alt="#">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-12">
                    <!-- About Content -->
                    <div class="about-content">
                        <h2><?php echo $about_section_arr['about_heading']; ?></h2>
                        <p><?php echo $about_section_arr['about_text']; ?></p>
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="progress-main">
                        <div class="row">
                            <?php if( have_rows('about_skill') ):
                                    while( have_rows('about_skill') ) : the_row(); ?>    
                                <div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- Single Skill -->
                                    <div class="single-progress">
                                        <h4><?php echo get_sub_field('skill_name'); ?></h4>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo get_sub_field('percentage'); ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent"><?php echo get_sub_field('percentage'); ?></span></div>
                                        </div>
                                    </div>
                                    <!--/ End Single Skill -->
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
    <!--/ End About Us -->
    
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
    