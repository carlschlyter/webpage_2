<?php 

/**
 * Theme Functions
 * 
 * @package Webpage_2
 */


 //Register css
function load_css() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');


//Register JavaScript
function load_js() {

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

}
add_action('wp_enqueue_scripts', 'load_js');


//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');


//Add custom image sizes
add_image_size('hero-image-max', 2560, 1200, true);


//Menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )

);


// Custom Gutenberg Blocks

if( function_exists('acf_register_block_type')){
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){

    acf_register_block_type(
        array(
            'name'              => 'hero-image-section',
            'title'             => __('Hero Image Section'),
            'description'       => __('Setting Frontpage Hero and Welcome Message'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/hero_image_section/hero_image_section.php',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'testsidan',
            'title'             => __('Testsidan'),
            'description'       => __('Sida för att testa...'),
            'render_template'   => '/template-parts/blocks/testsidan/testsidan.php',
            'category'          => 'design',
        )
    );    
}

