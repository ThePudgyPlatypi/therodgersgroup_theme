<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<header class="no-header-header-container">
				<div class="no-header-bg"></div>
				<div class="header-overlay"></div>
				<div class="round-bottom"></div>
			</header>

			<section class="team-page">
                <div class="threeCol-column-grid grid-container">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content'); ?>
					<?php endwhile; ?>
                </div>
			</section>
		</main>
	</div>
</div>

<?php get_footer();
