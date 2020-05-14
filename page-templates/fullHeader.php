<?php
/*
Template Name: Full Header
*/
get_header(); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<header class="front-hero" role="banner">
				<div class="read-more-arrow">
					<a href="#scroller" data-smooth-scroll>
						<h6>Scroll</h6>
						<i class="fas fa-chevron-down"></i>
					</a>
				</div>

				<div class="video-overlay"></div>
				<video playsinline autoplay muted loop class="hero-video" autoplay loop poster="<?php the_post_thumbnail_url(); ?>">
					<source src="<?php bloginfo('template_url'); ?>\dist\assets\video\HeaderMovie-V1.1_720-veryfast.mp4" type="video/mp4">
					<source src="<?php bloginfo('template_url'); ?>\dist\assets\video\HeaderMovie-V1.1_720-veryfast.webm" type="video/webm">
					Your browser does not support the video tag.
				</video>

				<div class="marketing animation-element fade-in">
					<div class="tagline" itemscope itemtype="https://schema.org/Organization">
						<img itemprop="logo" src="<?php bloginfo('template_url'); ?>\dist\assets\images\Logo-Yellow.svg" alt="The Rodgers Group LLC. One Team. One Mission. Committed to Public Safety Professionalism">
						<h2 class="h2-tagline">Real experience and a verifiable record of success</h2>
						<div class="button-group">
							<a role="button" class="download large button sites-button" href="#contact-form" data-smooth-scroll>Contact Us</a>
						</div>	
					</div>
					
					<div class="social-media">
						<?php foundationpress_social_nav(); ?>
					</div>
				</div>

				
				<div class="round-bottom" id="scroller">
					<div class="menu-logo-container">
						<div class="menu-logo"></div>
					</div>
				</div>
			</header>

			<section class="body">
				
				<!-- Homepage -->
				<?php if(is_front_page()) { include(locate_template('template-parts/content-custom-posts.php',false,false) ); }; ?>
				
			</section>
		</main>
	</div>
</div>
<?php get_footer();
