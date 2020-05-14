<?php
/*
Template Name: No header
*/
get_header(); ?>

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
				<?php include(locate_template('template-parts/content-custom-posts.php',false,false) ); ?>
			</section>
		</main>
	</div>
</div>

<?php get_footer();
