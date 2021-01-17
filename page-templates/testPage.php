<?php
/*
Template Name: Testimonials Page
*/
get_header();

// retrieving featured image to put in background of header below
// $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<header class="no-header-header-container">
				<div class="no-header-bg"></div>
				<div class="header-overlay"></div>
				<div class="round-bottom">
					<div class="menu-logo-container">
						<div class="menu-logo"></div>
					</div>
				</div>
			</header>

			<section class="body">
				<?php include(locate_template('template-parts/content-test.php', false, false)); ?>
			</section>
		</main>
	</div>
</div>
<?php get_footer(); ?>