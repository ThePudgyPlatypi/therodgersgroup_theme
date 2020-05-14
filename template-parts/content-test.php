<!-- The body content of the testimonial page -->

<header class="grid-container">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php 

    // this grabs the first key value from current page
    // then use that to filter out, by matching key, on the custom post type contents
    // to use set the first custom field key and value to the exact values of the custom fields of your custom posts
    global $wp_query;
    $page_meta = get_the_title();
    wp_reset_query();

    if(!$page_meta) {
        $page_meta="no_posts";
    }
    // print_r($page_meta);
    // print_r(get_post_meta($postid));
    // echo get_the_title();

    $body = array(
        'post_type' => 'contents',
        'nopaging' => true,
        'meta_key' => $page_meta,
        'order' => 'ASC',
        'orderby' => 'meta_value_num',
    );

    $the_query = new WP_Query($body);

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {

                $the_query->the_post();
            
                the_content();
                edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); 
        }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }

    ?>

</header>

<div class="testimonial-slider grid-container">
    <div class="orbit testimonials" role="region" aria-label="The Rodgers Group Client Testimonials" data-orbit>

        <div class="orbit-wrapper">
            <div class="orbit-controls">
                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            </div>

            <ul class="orbit-container">
                <?php
                // loop for all the Testimonials to be placed in Orbit Slider
                $body = array(
                    'post_type' => 'testimonials',
                    'nopaging' => true,
                );

                $the_query = new WP_Query($body);

                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {

                            $the_query->the_post(); ?>
                            
                            <!-- // each individual orbit slide -->
                            <li class="orbit-slide">
                                <div class="card">
                                    <div class="card-divider">
                                        <h4 class="title"><strong><?php the_title(); ?></strong></h4>
                                    </div>
                                    <div class="card-section">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="testimonial-content">
                                            <?php the_excerpt(); ?>
                                            <a class="read-more" href="<?php the_permalink(); ?>" >read more ...</a>
                                        </div>
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </li>
                                    
                            <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); 
                    }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    } else {
                        // no posts found
                    } ?>
            </ul>
        </div>

    </div><!-- end of orbit -->
</div><!-- end of testimonial slider -->