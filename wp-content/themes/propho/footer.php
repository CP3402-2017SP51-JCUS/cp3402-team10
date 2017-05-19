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
		<div class="col-md-2"></div>
		<div class="col-md-4">
			<div class="follow-footer">
				<p>Follow Us</p>
				<ul>
					<li>
						<div class="social-media"><i class="fa fa-facebook"></i><a href="<?php echo get_option('facebook_url'); ?>">ProPho</a></div>
					</li>
					<li>
						<div class="social-media"><i class="fa fa-twitter"></i><a href="<?php echo get_option('twitter_url'); ?>">@ProPho_Sg</a></div>
					</li>
					<li>
						<div class="social-media"><i class="fa fa-instagram"></i><a href="<?php echo get_option('instagram_url'); ?>">propho_sg</a></div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 contact">
			<div class="contact-footer">
				<p>Contact Us</p>
				<ul>
					<li>
						<div>+65 8116 6818<i class="fa fa-phone"></i></div>
					</li>
					<li>
						<div>+65 8116 6818<i class="fa fa-fax"></i></div>
					</li>
					<li>
						<div>313 Orchard Rd, Singapore 238895<i class="fa fa-map-marker"></i></div>
					</li>
					<li>
						<div>ProPho2017@gmail.com<i class="fa fa-envelope"></i></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>

</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
