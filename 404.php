<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container">
	<div class="main-grid align-center">
		<main class="main-content-full-width error-404">
			<article class="grid-x">
				<header class="cell small-12">
					<section>
						<div class="grid-container">
							<h1 class="entry-title"><?php _e( 'File Not Found', 'foundationpress' ); ?></h1>
						</div>
					</section>	
				</header>
				<div class="entry-content cell small-12">
					<div class="grid-container">
						<div class="error">
							<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'foundationpress' ); ?></p>
						</div>
						<p><?php _e( 'Please try the following:', 'foundationpress' ); ?></p>
						<ul>
							<li>
								<?php _e( 'Check your spelling', 'foundationpress' ); ?>
							</li>
							<li>
								<?php
									/* translators: %s: home page url */
									printf(
										__( 'Return to the <a href="%s">home page</a>', 'foundationpress' ),
										home_url()
									);
								?>
							</li>
							<li>
								<?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'foundationpress' ); ?>
							</li>
						</ul>
					</div>
				</div>
			</article>
		</main>
	</div>
</div>
<?php get_footer();
