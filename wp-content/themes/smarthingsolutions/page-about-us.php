<?php 
    get_header(); 
?>	
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><i class="fa fa-pencil"></i>About Our Company</h2>
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
                        <span class="title-bg"><?php the_title(); ?></span>
                        <?php the_content(); ?>
                    <?php endif; ?>     
                                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Video -->
                    <div class="about-video">
                        <div class="single-video overlay">
                            <a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="video-popup mfp-fade"><i class="fa fa-play"></i></a>
                            <img src="http://localhost/smartthingsolutions/wp-content/uploads/2021/11/gallery-4.jpg" alt="#">
                        </div>
                    </div>
                    <!--/ End Video -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- About Content -->
                    <div class="about-content">
                        <h2>We are professional website design & development company!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.  You think water moves fast? You should see ice.</p>
                        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a weeked do incididunt magna Lorem</p>
                        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalancip isicing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="progress-main">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Single Skill -->
                                <div class="single-progress">
                                    <h4>Communication</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">78%</span></div>
                                    </div>
                                </div>
                                <!--/ End Single Skill -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Single Skill -->
                                <div class="single-progress">
                                    <h4>Business Develop</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">80%</span></div>
                                    </div>
                                </div>
                                <!--/ End Single Skill -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Single Skill -->
                                <div class="single-progress">
                                    <h4>Creative Work</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">90%</span></div>
                                    </div>
                                </div>
                                <!--/ End Single Skill -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Single Skill -->
                                <div class="single-progress">
                                    <h4>Bootstrap 4</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="percent">95%</span></div>
                                    </div>
                                </div>
                                <!--/ End Single Skill -->
                            </div>
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
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
                                </div>
                            </div>
                            <!--/ End Single Partner -->
                            <!-- Single Partner -->
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="single-partner">
                                    <a href="#" target="_blank"><img src="http://via.placeholder.com/140x95" alt="#"></a>
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
    