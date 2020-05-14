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

// The Loop for contents of the page
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

<div class="block-grid">
<?php
// loop for all the PARNTERS cards
$body = array(
    'post_type' => 'partners',
    'nopaging' => true,
    'meta_key' => 'order',
    'order' => 'ASC',
    'orderby' => 'meta_value_num',
);

$the_query = new WP_Query($body);

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {

            $the_query->the_post(); ?>
                
                <div class="grid-item">
                    <?php echo "<a class='partner-link' href='". get_post_meta(get_the_ID(), "url", true) . "'>" ?></a>
                    <div class="image">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <h4 class="title"><strong><?php the_title() ?></strong></h4>
                    <div class="desc"><?php the_content() ?></div>
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