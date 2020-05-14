<?php 
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            // Replace [YOUR THEME TEXT DOMAIN] below with the text domain of your theme (found in the theme's `style.css`).
            'label' => __( 'Secondary Image', 'TheRodgersGroup'),
            'id' => 'secondary-image',
            'post_type' => 'page'
        )
    );
}