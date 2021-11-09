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
                            <?php $cat_args = array(
                                    'orderby'       => 'term_id', 
                                    'order'         => 'ASC',
                                    'hide_empty'    => true, 
                                );

                                $terms = get_terms('portfolios_categories', $cat_args);
                                    foreach($terms as $category): ?>  

                            <li data-filter=".<?php echo $category->slug; ?>" class="cbp-filter-item"><?php echo $category->name; ?><div class="cbp-filter-counter"></div></li>  
                            <?php endforeach; ?>                
                        </ul>  		
                    </div>
                    <!--/ End portfolio Nav -->
                </div>
            </div>
            <div class="portfolio-inner">
                <div class="row">	
                    <div class="col-12">	
                        <div id="portfolio-item">
                        <?php $portfolioArr = array('post_type'=>'portfolios','posts_per_page' => -1,'post_status'=>'publish');
                            $posts = get_posts($portfolioArr);
                            foreach($posts as $post): setup_postdata($post); ?>  

                            <!-- Single portfolio -->
                            <div class="cbp-item <?php $terms = get_the_terms( $post->ID, 'portfolios_categories');
                                        foreach($terms as $category):
                                            //echo $category->name .'<br>';
                                            echo $category->slug .' '; 
                                        endforeach; ?>">
                                <div class="portfolio-single">
                                    <div class="portfolio-head">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                    <div class="portfolio-hover">
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                        <?php the_content(); ?>
                                        <div class="button">
                                            <!-- <a href="javascript:void(0)"><?php //echo do_shortcode('[post-views]'); ?></a> -->
                                            <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End portfolio -->	
                            <?php endforeach; ?>
                            
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