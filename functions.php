<?php 

/**
 * Theme Functions
 * 
 * @package Webpage_2
 */


 //Register css
function load_css() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
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
add_image_size('icon-image', 60, 60, true);
add_image_size('offers-image', 300, 150, true);
add_image_size('article-image', 600, 450, true);


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
            'description'       => __('Settings Frontpage Hero and Welcome Message'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/hero_image_section/hero_image_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/hero_image_section/hero_image_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'icon-bar-section',
            'title'             => __('Icon Bar Section'),
            'description'       => __('Settings Icon Bar'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/icon_bar_section/icon_bar_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/icon_bar_section/icon_bar_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'offers-section',
            'title'             => __('Offers Section'),
            'description'       => __('Settings Offers Section'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/offers_section/offers_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/offers_section/offers_section.css',
            'category'          => 'design',
        )
    );    

    acf_register_block_type(
        array(
            'name'              => 'articles-section',
            'title'             => __('Articles Section'),
            'description'       => __('Settings Articles Section'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/articles_section/articles_section.php',
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/articles_section/articles_section.css',
            'category'          => 'design',
        )
    );    
    
}

