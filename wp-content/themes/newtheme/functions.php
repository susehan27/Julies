<?php

function sus_theme_support(){
    //adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'sus_theme_support');

function sus_menus(){

    $locations = array(
        'primary' => "Main Header Menu",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'sus_menus');

function sus_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('sus-style', get_template_directory_uri() . "/style.css", array('sus-bootstrap'), rand(111,9999), 'all');
    wp_enqueue_style('sus-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '5.2.0', 'all');
    wp_enqueue_style('sus-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css", array(), '6.2.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'sus_register_styles');


function sus_register_scripts(){

    wp_enqueue_script('sus-jquery', 'https://code.jquery.com/jquery-3.6.1.slim.min.js', array(), '3.6.1', true);
    wp_enqueue_script('sus-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), '2.11.6', true);
    wp_enqueue_script('sus-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js', array(), '5.2.1', true);
    wp_enqueue_script('sus-js', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
    
}

add_action( 'wp_enqueue_scripts', 'sus_register_scripts');

function sus_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'sus_widget_areas');

?>