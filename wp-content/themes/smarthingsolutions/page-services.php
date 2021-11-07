<?php 
    get_header(); 
?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><i class="fa fa-pencil"></i>Our Services</h2>
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
                        <?php the_content(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-magic"></i>
                        <h2><a href="service-single.html">Consulting</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-lightbulb-o"></i>
                        <h2><a href="service-single.html">Creative Idea</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-wordpress"></i>
                        <h2><a href="service-single.html">Development</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-bullhorn "></i>
                        <h2><a href="service-single.html">Marketing</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-magic"></i>
                        <h2><a href="service-single.html">Consulting</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-lightbulb-o"></i>
                        <h2><a href="service-single.html">Creative Idea</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-wordpress"></i>
                        <h2><a href="service-single.html">Development</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-bullhorn "></i>
                        <h2><a href="service-single.html">Marketing</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">	
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-bullseye "></i>
                        <h2><a href="service-single.html">Direct Work</a></h2>
                        <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt a tristique tortor maximus</p>
                    </div>
                    <!-- End Single Service -->	
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
    