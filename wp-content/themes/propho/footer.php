<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package propho
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
			<div class="follow-footer">
				<p>Follow Us</p>
				<div class="social-media"><a href="<?php echo get_option('facebook_url'); ?>"><i class="fa fa-facebook"></i></a></div>
				<div class="social-media"><a href="<?php echo get_option('twitter_url'); ?>"><i class="fa fa-twitter"></i></a></div>
				<div class="social-media"><a href="<?php echo get_option('instagram_url'); ?>"><i class="fa fa-instagram"></i></a></div>
			</div>
			<div class="contact-footer">
				<p>Contact Us</p>
				<div class="contacts">
					<div class="contact-item"><i class="fa fa-phone"></i>+65 8116 6818</div>
					<div class="contact-item"><i class="fa fa-fax"></i>+65 8116 6818</div>
					<div class="contact-item"><i class="fa fa-map-marker"></i>313 Orchard Rd, Singapore 238895</div>
					<div class="contact-item"><i class="fa fa-envelope"></i>ProPho2017@gmail.com</div>
				</div>
			</div>
	</div>

</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
