		<!-- Footer -->
		<footer id="footer" class="footer wow fadeIn">
			<!-- Top Arrow -->
			<div class="top-arrow">
				<a href="#header" class="btn"><i class="fa fa-angle-up"></i></a>
			</div>
			<!--/ End Top Arrow -->
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12 widget_area">
							<?php dynamic_sidebar('footer_area1'); ?>
						</div>	
						<div class="col-lg-3 col-md-6 col-12 widget_area">
							<?php dynamic_sidebar('footer_area2'); ?>
						</div>
						<div class="col-lg-3 col-md-6 col-12 post_area widget_area">
							<?php dynamic_sidebar('footer_area3'); ?>
						</div>
						<div class="col-lg-3 col-md-6 col-12 widget_area">
							<?php dynamic_sidebar('footer_area4'); ?>
						</div>
					</div>
				</div>    
			</div>
			<!--/ End Footer Top -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="bottom-top">
								<!-- Social -->
									<?php echo do_shortcode(get_option('smartthingsolutions_social_icons_option')); ?>
								<!--/ End Social -->
								<!-- Copyright -->
								<div class="copyright">
									<p><?php echo get_option('smartthingsolutions_footercopyright_option'); ?></p>
								</div>
								<!--/ End Copyright -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Bottom -->
		</footer>
		<!--/ End footer -->
		
		<?php wp_footer(); ?>
    </body>
</html>