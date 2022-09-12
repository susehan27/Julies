<?php

function load_stylesheets()
{

    wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css",
        array(), rand(111,9999), "all");
    wp_enqueue_style("bootstrap");

    wp_register_style("style", get_template_directory_uri() . "/style.css",
        array(), rand(111,9999), "all");
    wp_enqueue_style("style");

}

add_action("wp_enqueue_scripts", "load_stylesheets");

function include_jquery()
{
    wp_deregister_script("jquery");
    wp_register_script("jquery", get_template_directory_uri() . "/js/jquery-3.3.1.min.js", "", 1, true );
    wp_enqueue_script("jquery");
}

add_action("wp_enqueue_scripts", "include_jquery");

function load_scripts() 
{
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts', 'load_scripts');

function loadjs() 
{
    wp_register_script("customjs", get_template_directory_uri() . "/js/scripts.js", "", 1, true);
    wp_enqueue_script("customjs");
}
add_action("wp_enqueue_scripts", "loadjs");


add_theme_support("menus");

add_theme_support("post-thumbnails");

register_nav_menus(
    array(
        "top-menu" => __("Top Menu", "theme"),
        "footer-menu" => __("Footer Menu", "theme")
    )
);

add_image_size("smallest", 300, 300, true);
add_image_size("largest", 500, 500, true);


add_theme_support("custom-logo");

function themename_custom_logo_setup() 
{
    $defaults = array(
        "height" => 90,
        "width" => 200,
        "flex-height" => false,
        "flex-width" => true,
        "header-text" => array("site-title", "site-description"),
    );
    
    add_theme_support("custom-logo", $defaults);
}

add_action("after_setup_theme", "themename_custom_logo_setup");


function custom_add_google_fonts() 
{
    wp_enqueue_style("custom-google-fonts", "https://fonts.googleapis.com/css?family=Karla|Unna", false);
}

add_action("wp_enqueue_scripts", "custom_add_google_fonts");

function add_adobe_fonts() 
{
    wp_enqueue_script( "adobe_edge_web_fonts", "//use.edgefonts.net/bebas-neue.js" );
}

add_action( "wp_enqueue_scripts", "add_adobe_fonts" );

add_action( "wp_enqueue_scripts", "add_font_awesome");

function add_font_awesome()
{
    wp_enqueue_style( "custom-fa", "https://use.fontawesome.com/releases/v5.0.6/css/all.css");
}

?>