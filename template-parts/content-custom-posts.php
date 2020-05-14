<!-- The body content of the home page -->

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
