<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
					
						<div class="contact-info">
							<h3>Contact Info</h3>
							<a href="mailto:info@inhabitent.com><i class="fa fa-envelope"></i> info@inhabitent.com</a>
							<p><i class="fas fa-phone"></i> 778-456-7891</p>
							<p class="media-icons"><i class="fab fa-facebook-square"></i>
							<i class="fab fa-twitter-square"></i>
							<i class="fab fa-google-plus-square"></i></p>
						</div>

					<div class="business-hours">
						<h3>Business Hours</h3>
						<p><strong>Monday-Friday:</strong> 9am to 5pm</p>
						<p><strong>Saturday:</strong> 10am to 2pm</p>
						<p><strong>Sunday:</strong> Closed</p>
					</div>

					<div class="logo">
					<img src=<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-text.svg'?> alt="inhabitent-logo-text">
					</div>

					</div>
					
					<div class="copyright">
						<p>Copyright &copy; 2019 Inhabitent</p>
					</div>

			</footer><!-- #colophon -->
	
		<?php wp_footer(); ?>
	</body>
</html>
