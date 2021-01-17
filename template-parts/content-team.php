<!-- The body content of the team page -->

<?php 

global $wp_query;
$page_meta = get_the_title();
wp_reset_query();

if(!$page_meta) {
    $page_meta="no_posts";
}

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

<div class="column-grid">

<?php
// loop for all the name links
$body = array(
    'post_type' => 'employees',
    'nopaging' => true,
    'order' => 'ASC',
    'orderby' => 'title',
);

$the_query = new WP_Query($body);

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {

            $the_query->the_post(); 

            if(get_the_title() === "Frank Rodgers") {
                continue;
            }; ?>

            <div class="grid-item">
                <svg  
                    x="0" 
                    y="0" 
                    height="100%" 
                    width="100%"
                    viewBox="0 0 100 100" 
                    preserveAspectRatio="none">
                    <image y="0" x="0" height="100%" width="100%" preserveAspectRatio="none" xlink:href="<?php bloginfo('template_url'); ?>/src/assets/images/Name-plaque.svg">
                </svg>
                
                <a href="<?php the_permalink(); ?>"><strong> <?php if(get_the_title() !== "zzzfiller") { the_title(); } ?> </strong> </a>
            </div>
            <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); 
       }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
    }

?>

</div>