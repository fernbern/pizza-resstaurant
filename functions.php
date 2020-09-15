<?php
function lapizzeria_setup() {
    // add thumbnails
    add_theme_support('post-thumbnails');
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