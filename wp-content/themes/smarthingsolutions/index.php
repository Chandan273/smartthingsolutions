<?php 
    get_header(); 
?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><?php $post = $wp_query->get_queried_object(); echo ucfirst($post->post_name);?></h2>
                    <ul class="breadcrumb-cls"><?php get_breadcrumb(); ?>&nbsp;&nbsp;»&nbsp;&nbsp;<?php echo ucfirst($post->post_name);?></ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->
    
    <!-- Blogs Area -->
    <section class="blogs-main archives section">
        <div class="container">
            <div class="row">
            <?php $wp_all_query = new WP_Query(array('post_type'=>'post','posts_per_page' => 6,'post_status'=>'publish')) ?>

            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type'=>'post',
                'posts_per_page' => 6,
                'paged' => $paged,
            );

            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-blog">
                        <div class="blog-head">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                        <div class="blog-bottom">
                            <div class="blog-inner">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
                                    <span><i class="fa fa-calendar"></i><?php echo get_the_time('d, F, Y', $post->ID); ?></span>
                                    <span><a href="javascript:void(0)"><?php echo do_shortcode('[post-views]'); ?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; }
            wp_reset_postdata(); ?>

            </div>
            <div class="row">
                <div class="col-md-12 mt-5">
                    <!-- Start Pagination -->
                    <div class="pagination-main">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type'=>'post',
                            'posts_per_page' => 6,
                            'paged' => $paged,
                        );

                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) {
                            $total_pages = $loop->max_num_pages;

                            if ($total_pages > 1){

                                $current_page = max(1, get_query_var('paged'));

                                echo paginate_links(array(
                                    'base' => get_pagenum_link(1) . '%_%',
                                    'format' => '/page/%#%',
                                    'current' => $current_page,
                                    'total' => $total_pages,
                                    'prev_text'    => __('<<'),
                                    'next_text'    => __('>>'),
                                ));
                            } 
                        }
                            wp_reset_postdata();
                        ?>

                    </div>
                    <!--/ End Pagination -->
                </div>
            </div>			
        </div>
    </section>
    <!--/ End Blogs Area -->

<?php 
    get_footer(); 
?>