<?php
function lapizzeria_setup() {
    // add thumbnails
    add_theme_support('post-thumbnails');
    add_image_size('boxes', 437, 291, true);
    add_image_size('special', 768, 515, true);
}

add_action('after_setup_theme', 'lapizzeria_setup');

function lapizzeria_styles() {
    // add files
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );
    wp_enqueue_style('fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );
    // enqueue stylehseets
    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');

    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', null, true);
    // add javascript files
    wp_enqueue_script('jquery');
    wp_enqueue_script('script');
}

add_action( 'wp_enqueue_scripts', 'lapizzeria_styles' );

// add menus
function lapizzeria_menus() {
    // register menus
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'lapizzeria'),
        'social-menu' => __('Social Menu', 'lapizzeria')
    ));
}

add_action('init', 'lapizzeria_menus');


function lapizzeria_specialties() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizza', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
		'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
		'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
		'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
		'not_found'          => __( 'No Pizzas found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Pizzas found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'specialties' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'specialties', $args );
}

add_action( 'init', 'lapizzeria_specialties' );