<?php 
    get_header(); 
?>

    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><i class="fa fa-pencil"></i>Our Blogs</h2>
                    <ul class="breadcrumb-cls"><?php get_breadcrumb(); ?></ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->
    
    <!-- Blogs Area -->
    <section class="blogs-main archives single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                <?php the_post_thumbnail('large'); ?> 
                                </div>
                                <div class="blog-inner">
                                    <div class="blog-top">
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
                                        <ul class="social-share">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                    <h2><a href="blog-single.html"><?php the_title(); ?></a></h2>
                                    <?php the_content(); ?>
                                    <div class="bottom-area">
                                        <ul class="arrow">
                                            <li class="prev"><?php previous_post_link( '%link', __( '<i class="fa fa-angle-double-left"></i>Previews Posts', 'smartthingsolutions' ) ); ?></li>
                                            <li class="next"><?php next_post_link( '%link', __( 'Next Posts<i class="fa fa-angle-double-right"></i>', 'smartthingsolutions' ) ); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-12">
						<?php $args = array('post_type' => 'post');
								
							$post_obj = new WP_Query($args);
								while($post_obj->have_posts() ) : $post_obj->the_post();

								$comments = get_comments(array(
									'post_id' => $post->ID
								));
								foreach($comments as $comment) {
									//echo "<pre>"; print_r($comment); echo "</pre>";
								}
						endwhile; ?>
                            <div class="author-details">
                                <div class="author-left">
								<?php $author_id=$post->post_author; ?>
									<img src="http://localhost/smartthingsolutions/wp-content/uploads/2021/11/t4.jpg" width="140" height="140" class="avatar" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" />
									<h4><?php the_author_meta( 'user_nicename' , $author_id ); ?></h4> 
                                    <p><a href="javascript:void(0)"><?php the_author_posts(); ?> posts</a></p>
                                </div>
                                <div class="author-content">
                                    <p><?php the_author_meta('description'); ?></p>
									<?php echo do_shortcode(get_option('smartthingsolutions_social_icons_option')); ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="blog-comments">
                                <h2 class="title">37 Comments Found!</h2>
                                <div class="comments-body">
                                    <div class="single-comments">
                                        <div class="main">
                                            <div class="head">
                                                <img src="images/client1.jpg" alt="#">
                                            </div>
                                            <div class="body">
                                                <h4>Lufia Roshan</h4>
                                                <div class="comment-info"> 
                                                    <p><span>03 May, 2018 at<i class="fa fa-clock-o"></i>12:20PM,</span><a href="#"><i class="fa fa-comment-o"></i>replay</a></p>
                                                </div>
                                                <p>some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
                                            </div>
                                        </div>
                                        <div class="comment-list">
                                            <div class="head">
                                                <img src="images/client2.jpg" alt="#">
                                            </div>
                                            <div class="body">
                                                <h4>Josep Bambo</h4>
                                                <div class="comment-info"> 
                                                    <p><span>03 May, 2018 at<i class="fa fa-clock-o"></i>12:40PM,</span><a href="#"><i class="fa fa-comment-o"></i>replay</a></p>
                                                </div>
                                                <p>sagittis ex consectetur sed. Ut viverra elementum libero, nec tincidunt orci vehicula quis</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-comments">
                                        <div class="main">
                                            <div class="head">
                                                <img src="images/client3.jpg" alt="#">
                                            </div>
                                            <div class="body">
                                                <h4>Trolia Ula</h4>
                                                <div class="comment-info"> 
                                                    <p><span>05 May, 2018 at<i class="fa fa-clock-o"></i>08:00AM,</span><a href="#"><i class="fa fa-comment-o"></i>replay</a></p>
                                                </div>
                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica</p>
                                            </div>
                                        </div>
                                    </div>		

                                    <div class="single-comments">
                                        <div class="main">
                                            <div class="head">
                                                <img src="images/client4.jpg" alt="#">
                                            </div>
                                            <div class="body">
                                                <h4>James Romans</h4>
                                                <div class="comment-info"> 
                                                    <p><span>06 May, 2018 at<i class="fa fa-clock-o"></i>02:00PM,</span><a href="#"><i class="fa fa-comment-o"></i>replay</a></p>
                                                </div>
                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam</p>
                                            </div>
                                        </div>
                                    </div>		
									
                                </div>
                            </div>
                        </div> -->
                        <div class="col-12">
                            <div class="comments-form"> 	
								<?php
									$comments_args = array(
										// Change the title of send button 
										'label_submit' => __( 'Submit Comment', 'textdomain' ),
										// Change the title of the reply section
										'title_reply' => __( '<h2 class="title">Leave a comment</h2>', 'textdomain' ),
										// Remove "Text or HTML to be displayed after the set of comment fields".
										
										'comment_notes_after' => '',

										'comment_field' => '<div class="row"><div class="col-12"><div class="form-group"><textarea id="comment" name="comment" placeholder="Type Your Message Here" aria-required="true"></textarea></div></div></div>',
									);
									comment_form( $comments_args );
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
        </div>
    </section>
    <!--/ End Blogs Area -->
<?php 
    get_footer(); 
?>
    
