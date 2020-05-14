<?php

add_shortcode('thumbnail_url', 'thumbnail_in_content_url');

function thumbnail_in_content_url($atts) {
    global $post;

    return get_the_post_thumbnail_url($post->ID);
}

add_shortcode('thumbnail', 'thumbnail_in_content');

function thumbnail_in_content($atts) {
    global $post;

    return get_the_post_thumbnail($post->ID);
}

add_shortcode('permalink_url', 'permalink_in_content_url');

function permalink_in_content_url($atts) {
    $link = shortcode_atts( array(
		'link' => 'something'
	), $atts );
    return get_site_url(null, "/".$link['link'], null);
}
