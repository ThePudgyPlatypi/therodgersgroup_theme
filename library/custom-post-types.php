<?php /*
* Creating a function to create our CPT
*/
 
function custom_post_type_content() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Contents', 'Post Type General Name', 'TheRodgersGroup' ),
        'singular_name'       => _x( 'Content', 'Post Type Singular Name', 'TheRodgersGroup' ),
        'menu_name'           => __( 'Contents', 'TheRodgersGroup' ),
        'parent_item_colon'   => __( 'Parent Content', 'TheRodgersGroup' ),
        'all_items'           => __( 'All Contents', 'TheRodgersGroup' ),
        'view_item'           => __( 'View Content', 'TheRodgersGroup' ),
        'add_new_item'        => __( 'Add New Content', 'TheRodgersGroup' ),
        'add_new'             => __( 'Add New', 'TheRodgersGroup' ),
        'edit_item'           => __( 'Edit Content', 'TheRodgersGroup' ),
        'update_item'         => __( 'Update Content', 'TheRodgersGroup' ),
        'search_items'        => __( 'Search Content', 'TheRodgersGroup' ),
        'not_found'           => __( 'Not Found', 'TheRodgersGroup' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'TheRodgersGroup' ),
    );
     
// Set other options for Custom Post Type
     
    $args1 = array(
        'label'               => __( 'Contents', 'TheRodgersGroup' ),
        'description'         => __( 'Content of the website', 'TheRodgersGroup' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'taxonomies'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'page_content' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'contents', $args1 );
 
}

function custom_post_type_employee() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Employees', 'Post Type General Name', 'TheRodgersGroup' ),
            'singular_name'       => _x( 'Employee', 'Post Type Singular Name', 'TheRodgersGroup' ),
            'menu_name'           => __( 'Employees', 'TheRodgersGroup' ),
            'parent_item_colon'   => __( 'Parent Employee', 'TheRodgersGroup' ),
            'all_items'           => __( 'All Employees', 'TheRodgersGroup' ),
            'view_item'           => __( 'View Employee', 'TheRodgersGroup' ),
            'add_new_item'        => __( 'Add New Employee', 'TheRodgersGroup' ),
            'add_new'             => __( 'Add New', 'TheRodgersGroup' ),
            'edit_item'           => __( 'Edit Employee', 'TheRodgersGroup' ),
            'update_item'         => __( 'Update Employee', 'TheRodgersGroup' ),
            'search_items'        => __( 'Search Employee', 'TheRodgersGroup' ),
            'not_found'           => __( 'Not Found', 'TheRodgersGroup' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'TheRodgersGroup' ),
        );
         
    // Set other options for Custom Post Type
         
        $args2 = array(
            'label'               => __( 'Employees', 'TheRodgersGroup' ),
            'description'         => __( 'Employees of Rodgers Group', 'TheRodgersGroup' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'taxonomies'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'page_employee' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'show_in_rest'        => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
         
        // Registering your Custom Post Type
        register_post_type( 'employees', $args2 );
     
    }

function custom_post_type_partner() {

    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Partners', 'Post Type General Name', 'TheRodgersGroup' ),
            'singular_name'       => _x( 'Partner', 'Post Type Singular Name', 'TheRodgersGroup' ),
            'menu_name'           => __( 'Partners', 'TheRodgersGroup' ),
            'parent_item_colon'   => __( 'Parent Partner', 'TheRodgersGroup' ),
            'all_items'           => __( 'All Partners', 'TheRodgersGroup' ),
            'view_item'           => __( 'View Partner', 'TheRodgersGroup' ),
            'add_new_item'        => __( 'Add New Partner', 'TheRodgersGroup' ),
            'add_new'             => __( 'Add New', 'TheRodgersGroup' ),
            'edit_item'           => __( 'Edit Partner', 'TheRodgersGroup' ),
            'update_item'         => __( 'Update Partner', 'TheRodgersGroup' ),
            'search_items'        => __( 'Search Partner', 'TheRodgersGroup' ),
            'not_found'           => __( 'Not Found', 'TheRodgersGroup' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'TheRodgersGroup' ),
        );
            
    // Set other options for Custom Post Type
            
        $args3 = array(
            'label'               => __( 'Partners', 'TheRodgersGroup' ),
            'description'         => __( 'Partners of Rodgers Group', 'TheRodgersGroup' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'taxonomies'),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'page_Partner' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'show_in_rest'        => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
            
        // Registering your Custom Post Type
        register_post_type( 'partners', $args3 );
        
    }

    function custom_post_type_testimonial() {
 
        // Set UI labels for Custom Post Type
            $labels = array(
                'name'                => _x( 'Testimonials', 'Post Type General Name', 'TheRodgersGroup' ),
                'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'TheRodgersGroup' ),
                'menu_name'           => __( 'Testimonials', 'TheRodgersGroup' ),
                'parent_item_colon'   => __( 'Parent Testimonial', 'TheRodgersGroup' ),
                'all_items'           => __( 'All Testimonials', 'TheRodgersGroup' ),
                'view_item'           => __( 'View Testimonial', 'TheRodgersGroup' ),
                'add_new_item'        => __( 'Add New Testimonial', 'TheRodgersGroup' ),
                'add_new'             => __( 'Add New', 'TheRodgersGroup' ),
                'edit_item'           => __( 'Edit Testimonial', 'TheRodgersGroup' ),
                'update_item'         => __( 'Update Testimonial', 'TheRodgersGroup' ),
                'search_items'        => __( 'Search Testimonial', 'TheRodgersGroup' ),
                'not_found'           => __( 'Not Found', 'TheRodgersGroup' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'TheRodgersGroup' ),
            );
             
        // Set other options for Custom Post Type
             
            $args1 = array(
                'label'               => __( 'Testimonials', 'TheRodgersGroup' ),
                'description'         => __( 'Testimonial of the website', 'TheRodgersGroup' ),
                'labels'              => $labels,
                // Features this CPT supports in Post Editor
                'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'taxonomies'),
                // You can associate this CPT with a taxonomy or custom taxonomy. 
                'taxonomies'          => array( 'testimonial', 'category' ),
                /* A hierarchical CPT is like Pages and can have
                * Parent and child items. A non-hierarchical CPT
                * is like Posts.
                */ 
                'hierarchical'        => false,
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_nav_menus'   => true,
                'show_in_admin_bar'   => true,
                'show_in_rest'        => true,
                'menu_position'       => 5,
                'can_export'          => true,
                'has_archive'         => true,
                'exclude_from_search' => false,
                'publicly_queryable'  => true,
                'capability_type'     => 'page',
            );
             
            // Registering your Custom Post Type
            register_post_type( 'testimonials', $args1 );
         
        }
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
add_action( 'init', 'custom_post_type_testimonial', 0 );
add_action( 'init', 'custom_post_type_content', 0 );
add_action( 'init', 'custom_post_type_employee', 0 );
add_action( 'init', 'custom_post_type_partner', 0 );