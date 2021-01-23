<?php
/*
Template Name: Half header
*/
get_header();

// retrieving featured image to put in background of header below
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

// this is all for Accreditation servcies page
$mainImage[] = get_the_post_thumbnail(get_the_ID(), "full");
$additionalImages = get_post_meta(get_the_ID(), 'another_featured_image_id');
$additionalImagesHtml = [];

if ($additionalImages) {
    foreach ($additionalImages as $key => $image) {
        $additionalImagesHtml[$key] = wp_get_attachment_image($image, 'full');
    }
    $imageArray = array_merge($mainImage, $additionalImagesHtml);
}
?>

<div class="main-container">
    <div class="main-grid">
        <main class="main-content-full-width">

            <!-- header for accrediation services has a image slideshow... -->
            <?php if (is_page("Accreditation Services")) { ?>
            <header class="featured-hero half-hero" role="banner">
                <div class="read-more-arrow">
                    <a href="#scroller" data-smooth-scroll>
                        <h6>Scroll</h6>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
                <div class="orbit half-header" role="region" aria-label="accreditation services header slider"
                    data-orbit
                    data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out; timerDelay: 3000">
                    <div class="orbit-wrapper">
                        <ul class="orbit-container">
                            <?php foreach ($imageArray as $key => $image) { ?>
                                <li class="<?= $key !== 0 ? "" : "is-active " ?>orbit-slide">
                                    <figure class="orbit-figure">
                                        <?= $image ?>
                                    </figure>
                                </li>
                            <?php } ?>    
                        </ul>
                    </div>
                    
                </div>
            <?php } elseif (is_page("corporate-values")) { ?>
                <header class="featured-hero half-hero-video" role="banner"
                    style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                    <video playsinline autoplay muted loop class="hero-video" autoplay loop
                        poster="<?php the_post_thumbnail_url(); ?>">
                        <source src="<?php bloginfo('template_url'); ?>\dist\assets\video\corporateValues-small.mp4"
                            type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="marketing animation-element fade-in">
                        <div class="tagline" itemscope itemtype="https://schema.org/Organization">
                            <img itemprop="logo"
                                src="<?php bloginfo('template_url'); ?>\dist\assets\images\Logo-subtitle.svg"
                                alt="The Rodgers Group LLC. One Team. One Mission. Committed to Public Safety Professionalism">
                        </div>
                    </div>

                    <div class="read-more-arrow">
                        <a href="#scroller" data-smooth-scroll>
                            <h6>Scroll</h6>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                    <!-- <div class="video-overlay"></div> -->

                <?php } else { ?>
                    <header class="featured-hero half-hero" role="banner"
                        style="background-image:url('<?php echo $backgroundImg[0] ?>')">
                        <div class="read-more-arrow">
                            <a href="#scroller" data-smooth-scroll>
                                <h6>Scroll</h6>
                                <i class="fas fa-chevron-down"></i>
                            </a>
                        </div>
                <?php }; ?>

                        <div class="header-overlay"></div>
                        <div class="round-bottom" id="scroller">
                            <div class="menu-logo-container">
                                <div class="menu-logo"></div>
                            </div>
                        </div>
                    </header>

                    <section class="body">
                        <?php include(locate_template('template-parts/content-custom-posts.php', false, false)); ?>
                    </section>
        </main>
    </div>
</div>
<?php get_footer();