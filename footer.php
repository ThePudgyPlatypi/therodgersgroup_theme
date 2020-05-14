<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<div class="grid-container full contact-background">
	<div class="footer-contact animation-element fade-in" id="contact-form">
		<!-- place holder for if I ever need a widget -->
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</div>
</div>

<footer class="footer-container">
	<div class="footer-grid">
		<div class="footer-left" itemscope itemtype="https://schema.org/Organization">
			<img itemprop="logo" src="<?php bloginfo('template_url'); ?>/dist/assets/images/Logo-subtitle.svg" alt="The Rodgers Group LLC. One Team. One Mission. Committed to Public Safety Professionalism">
			<?php echo do_shortcode("[contact-card show_map=0]"); ?>
			<!-- <p class="company-name" itemprop="legalName"><strong>The Rodgers Group, LLC.</strong></p>
			<p class="address" itemprop="address">850 Bear Tavern Rd. Ste. 303<br> Ewing, NJ 08628</p>
			<p class="phone" itemprop="telephone"><a href="tel:732-279-66571">1 (732) 279-6657</a></p>
			<p class="email" itemprop="email"><a href="mailto:732-279-66571">info@rodgersgroupllc.com</a></p> -->

			<div class="social-media">
				<?php foundationpress_social_nav(); ?>
			</div>
		</div>
		<div class="footer-center">
		</div>
		<div class="footer-right">
			<p>Please take a moment to visit our teammates website at CRG</p>
			<a href="https://www.crgplans.com" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/dist/assets/images/CRGLogo.svg" alt="affliate company logo Critical Response Group">
			</a>	
		</div>
	</div>
	<div class="credit-bar">
		<p>
			Theme "The Rodgers Group" created by <a href="http://www.chrisstehm.com">Chris Stehm</a>. Copyright &copy; 2019
		</p>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
