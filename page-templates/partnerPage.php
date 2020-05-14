<?php
/*
Template Name: Partner Page
*/
get_header();

// retrieving featured image to put in background of header below
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<header class="featured-hero half-hero" role="banner" style="background-image:url('<?php echo $backgroundImg[0]?>')">
				<div class="header-overlay"></div>
				<div class="round-bottom">
					<div class="menu-logo-container">
						<div class="menu-logo"></div>
					</div>
				</div>
			</header>

			<section class="partners-page body">
                <div class="threeCol-block-grid grid-container">
                    <?php include(locate_template('template-parts/content-partners.php',false,false) ); ?>
                </div>
			</section>
		</main>
	</div>
</div>
<?php get_footer();