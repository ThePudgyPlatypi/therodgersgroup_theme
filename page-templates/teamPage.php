

<?php
/*
Template Name: Half header
*/
get_header();

// retrieving featured image to put in background of header below
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<header class="featured-hero half-hero" role="banner" style="background-image:url('<?php echo $backgroundImg[0]?>')">
				<div class="read-more-arrow">
					<a href="#scroller" data-smooth-scroll>
						<h6>Scroll</h6>
						<i class="fas fa-chevron-down"></i>
					</a>
				</div>
				
				<div class="header-overlay"></div>
				<div class="round-bottom" id="scroller">
					<div class="menu-logo-container">
						<div class="menu-logo"></div>
					</div>
				</div>
			</header>

			<section class="team-page body">
                <div class="threeCol-column-grid grid-container">
                    <?php include(locate_template('template-parts/content-team.php',false,false) ); ?>
                </div>
			</section>
		</main>
	</div>
</div>
<?php get_footer(); ?>
