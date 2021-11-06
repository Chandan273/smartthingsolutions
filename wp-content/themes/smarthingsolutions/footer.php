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
						<div class="col-lg-3 col-md-6 col-12 widget_area">
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
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								</ul>
								<!--/ End Social -->
								<!-- Copyright -->
								<div class="copyright">
									<p>&copy; 2021 All Right Reserved. Design & Development By <a target="_blank" href="http://SiliconValley.com">SiliconValley.com</a>, Theme Provided By  <a target="_blank" href="https://SiliconValley.com">Silicon Valley.com</a></p>
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
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gmap.min.js"></script>	
    </body>
</html>