<?php 
    get_header(); 
?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><i class="fa fa-pencil"></i>Our Portfolio</h2>
                    <ul class="breadcrumb-cls"><?php get_breadcrumb(); ?></ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- Start portfolio -->
    <section id="portfolio" class="portfolio section">
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
                    <!-- portfolio Nav -->
                    <div class="portfolio-nav">
                        <ul class="tr-list list-inline" id="portfolio-menu">
                            <li data-filter="*" class="cbp-filter-item active">All Works<div class="cbp-filter-counter"></div></li>  
                            <li data-filter=".animation" class="cbp-filter-item">Animation<div class="cbp-filter-counter"></div></li>
                            <li data-filter=".website" class="cbp-filter-item">Website<div class="cbp-filter-counter"></div></li>
                            <li data-filter=".package" class="cbp-filter-item">Package<div class="cbp-filter-counter"></div></li>
                            <li data-filter=".development" class="cbp-filter-item">Development<div class="cbp-filter-counter"></div></li>
                            <li data-filter=".printing" class="cbp-filter-item">Printing<div class="cbp-filter-counter"></div></li>
                        </ul>  		
                    </div>
                    <!--/ End portfolio Nav -->
                </div>
            </div>
            <div class="portfolio-inner">
                <div class="row">	
                    <div class="col-12">	
                        <div id="portfolio-item">
                            <!-- Single portfolio -->
                            <div class="cbp-item website animation printing">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-masonry1.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Creative Work</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a class="primary" data-fancybox="gallery" href="images/portfolio/p1.jpg"><i class="fa fa-search"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->	
                            <!-- Single portfolio -->
                            <div class="cbp-item website package development animation">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/p2.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Responsive Design</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->	
                            <!-- Single portfolio -->
                            <div class="cbp-item website animation">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/p3.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Bootstrap Based</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a class="primary" data-fancybox="gallery" href="images/portfolio/p3.jpg"><i class="fa fa-search"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->	
                            <!-- Single portfolio -->
                            <div class="cbp-item development printing">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-masonry2.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Clean Design</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->	
                            <!-- Single portfolio -->
                            <div class="cbp-item development package">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-masonry3.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Animation</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a class="primary" data-fancybox="gallery" href="images/portfolio/p5.jpg"><i class="fa fa-search"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->	
                            <!-- Single portfolio -->
                            <div class="cbp-item website printing">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/p6.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Parallax</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End portfolio -->
    
<?php 
    get_footer(); 
?>