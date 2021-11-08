<?php 
    get_header();
    $about_section_arr = get_field('about_section');
?>
    <!-- Hero Area -->
    <section id="hero-area" class="hero-area">
        <!-- Slider -->
        <div class="slider-area">
            <!-- Single Slider -->
            <div class="single-slider" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-image1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-12">
                            <!-- Slider Text -->
                            <div class="slider-text">
                                <h1>Radix <span>Business</span> World That Possible anything<span>!</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. </p>
                                <div class="button">
                                    <a href="portfolio-3-column.html" class="btn">Our Portfolio</a>
                                    <a href="https://www.youtube.com/watch?v=WfMgkLWPZ-w" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
                                </div>
                            </div>
                            <!--/ End Slider Text -->
                        </div>
                        <div class="col-lg-5 col-md-6 col-12">
                            <!-- Image Gallery -->
                            <div class="image-gallery">
                                <div class="single-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/gallery-image1.jpg" alt="#">
                                </div>
                                <div class="single-image two">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/gallery-image2.jpg" alt="#">
                                </div>
                            </div>
                            <!--/ End Image Gallery -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
            <!-- Single Slider -->
            <div class="single-slider slider-right" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-image2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">
                            <!-- Image Gallery -->
                            <div class="image-gallery">
                                <div class="single-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/gallery-image1.jpg" alt="#">
                                </div>
                                <div class="single-image two">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider/gallery-image2.jpg" alt="#">
                                </div>
                            </div>
                            <!--/ End Image Gallery -->
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <!-- Slider Text -->
                            <div class="slider-text text-right">
                                <h1>Radix <span>Business</span> World That Possible anything<span>!</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. </p>
                                <div class="button">
                                    <a href="services.html" class="btn">Our Services</a>
                                    <a href="https://www.youtube.com/watch?v=WfMgkLWPZ-w" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
                                </div>
                            </div>
                            <!--/ End Slider Text -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
            <!-- Single Slider -->
            <div class="single-slider slider-center" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/slider/slider-image1.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 col-12">
                            <!-- Slider Text -->
                            <div class="slider-text text-center">
                                <h1>Build your website with Radix Multipurpose <span>Business</span> Template.</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet urna ante, quis luctus nisi sodales sit amet. Aliquam a enim in massa molestie mollis Proin quis velit at nisl vulputate egestas non in arcu Proin a magna hendrerit, tincidunt neque sed. </p>
                                <div class="button">
                                    <a href="about-us.html" class="btn">About Company</a>
                                    <a href="https://www.youtube.com/watch?v=WfMgkLWPZ-w" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
                                </div>
                            </div>
                            <!--/ End Slider Text -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Single Slider -->
        </div>
        <!--/ End Slider -->
    </section>
    <!--/ End Hero Area -->
    
    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title wow fadeInUp">
                        <span class="title-bg"><?php echo $about_section_arr['about_background_title']; ?></span>
                        <h1><?php echo $about_section_arr['about_title']; ?></h1>
                        <p><?php echo $about_section_arr['about_descprition']; ?><p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.6s">
                    <!-- Video -->
                    <div class="about-video">
                        <div class="single-video overlay">
                            <a href="<?php echo $about_section_arr['about_video_url']; ?>" class="video-popup mfp-fade"><i class="fa fa-play"></i></a>
                            <img src="<?php echo $about_section_arr['about_image']; ?>" alt="#">
                        </div>
                    </div>
                    <!--/ End Video -->
                </div>
                <div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.8s">
                    <!-- About Content -->
                    <div class="about-content">
                        <?php echo $about_section_arr['about_text']; ?>
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
    
    <!-- Services -->
    <section id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title">
                        <span class="title-bg">Services</span>
                        <h1>What we provide</h1>
                        <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="service-slider">
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-magic"></i>
                            <h2><a href="service-single.html">Consulting</a></h2>
                            <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-lightbulb-o"></i>
                            <h2><a href="service-single.html">Creative Idea</a></h2>
                            <p>Creative and erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-wordpress"></i>
                            <h2><a href="service-single.html">Development</a></h2>
                            <p>just fine erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-bullhorn "></i>
                            <h2><a href="service-single.html">Marketing</a></h2>
                            <p>Possible of erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-magic"></i>
                            <h2><a href="service-single.html">Consulting</a></h2>
                            <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-lightbulb-o"></i>
                            <h2><a href="service-single.html">Creative Idea</a></h2>
                            <p>Creative and erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-wordpress"></i>
                            <h2><a href="service-single.html">Development</a></h2>
                            <p>just fine erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-bullhorn "></i>
                            <h2><a href="service-single.html">Marketing</a></h2>
                            <p>Possible of erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-bullseye "></i>
                            <h2><a href="service-single.html">Direct Work</a></h2>
                            <p>Everything ien erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat Latin</p>
                        </div>
                        <!-- End Single Service -->	
                        <!-- Single Service -->
                        <div class="single-service">
                            <i class="fa fa-cube"></i>
                            <h2><a href="service-single.html">Creative Plan</a></h2>
                            <p>Information sapien erat,  non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Services -->
    
    <!-- Fun Facts -->
    <section id="fun-facts" class="fun-facts section">
        <div class="container">	
            <div class="row">
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
                    <?php $achievements_section = get_field('achievements_section'); ?>
                    <div class="text-content">
                        <div class="section-title">
                            <h1><?php echo $achievements_section['tiltle']; ?></h1>
                            <p><?php echo $achievements_section['description']; ?></p>
                            <a href="<?php echo $achievements_section['button_link']; ?>" class="btn primary"><?php echo $achievements_section['button_name']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">

                        <?php foreach($achievements_section['fact_section'] as $fact_section): ?>	
                        <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
                            <!-- Single Fact -->
                            <div class="single-fact">
                                <div class="icon"><?php echo $fact_section['icon']; ?></div>
                                <div class="counter">
                                    <p><span class="count"><?php echo $fact_section['count']; ?></span><?php echo $fact_section['letter']; ?></p>
                                    <h4><?php echo $fact_section['title']; ?></h4>
                                </div>
                            </div>
                            <!--/ End Single Fact -->
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Fun Facts -->

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title">
                        <span class="title-bg">Projects</span>
                        <h1>Our Portfolio</h1>
                        <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/p1.jpg" alt="#"/>
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
                            <div class="cbp-item website package development">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/p2.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Responsive Design</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=WfMgkLWPZ-w" class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/p4.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Clean Design</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=WfMgkLWPZ-w" class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/p5.jpg" alt="#"/>
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
                            <div class="cbp-item website animation printing">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/p6.jpg" alt="#"/>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="portfolio-single.html">Parallax</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim</p>
                                        <div class="button">
                                            <a href="https://www.youtube.com/watch?v=WfMgkLWPZ-w" class="primary cbp-lightbox"><i class="fa fa-play"></i></a>
                                            <a href="portfolio-single.html"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->	
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="button">
                            <a class="btn primary" href="portfolio-3-column.html">More Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End portfolio -->
    
    <!-- Call To Action -->
    <section class="call-to-action section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <?php $experience_section_arr = get_field('experience_section'); ?>
                <div class="col-lg-6 col-12 wow fadeInUp">
                    <div class="call-to-main">
                        <h2><?php echo $experience_section_arr['heading']; ?></h2>
                        <p><?php echo $experience_section_arr['description']; ?></p>
                        <a href="<?php echo $experience_section_arr['button_link']; ?>" class="btn"><?php echo $experience_section_arr['button_name']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call To Action -->
    
    <!-- Blogs Area -->
    <section class="blogs-main section">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="section-title">
                        <span class="title-bg">News</span>
                        <h1>Latest Blogs</h1>
                        <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row blog-slider">
                        
                    <?php $blogArr = array('numberposts' => 5, 'post_type'=>'post');
                        $posts = get_posts($blogArr);
                        foreach($posts as $post): setup_postdata($post); ?>

                        <div class="col-lg-4 col-12">
                            <div class="single-blog">
                                <div class="blog-head">
                                    
                                <?php the_post_thumbnail('medium'); ?> 

                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html"><?php the_title(); ?></a></h4>
                                        <?php the_content(); ?>
                                        <div class="meta">
                                            <span>
                                                <i class="fa fa-bolt"></i>
                                                <a href="javascript:void(0)">
                                                <?php $category_detail = get_the_category($post->ID);
                                                    foreach($category_detail as $cat_name){
                                                    echo ucfirst($cat_name->cat_name); } 
                                                    ?>
                                                </a>
                                            </span>
                                            <span><i class="fa fa-calendar"></i></i><?php echo get_the_time('d, F, Y', $post->ID); ?></span>
                                            <span><a href="javascript:void(0)"><?php echo do_shortcode('[post-views]'); ?></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blogs Area -->
    
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
    
