<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
						<div class="contact-info">
							<h3>Contact Info</h3>
							<p><i class="fa fa-envelope"></i> info@inhabitent.com</p>
							<p><i class="fas fa-phone"></i> 778-456-7891</p>
						</div>
						<div class="social-media">
							<i class="fab fa-facebook-square"></i>
							<i class="fab fa-twitter-square"></i>
							<i class="fab fa-google-plus-square"></i>
						</div>

					<div class="business-hours">
						<h3>Business Hours</h3>
						<p>Monday-Friday: 9am to 5pm</p>
						<p>Saturday: 10am to 2pm</p>
						<p>Sunday: Closed</p>
					</div>
					<div class="copyright">
						<p>Copyright &copy; 2019 Inhabitent</p>
					</div>
					<div class="logo">
						<img src=<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-text.svg'?>>
					</div>
				</div><!-- #page -->	
			</footer><!-- #colophon -->
	
		<?php wp_footer(); ?>

	</body>
</html>
