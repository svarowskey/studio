<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');

function style_theme() {
    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/bower_components/simplelightbox/dist/simplelightbox.min.css');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/packages/fontawesome-pro/css/all.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/packages/slick/slick/slick.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

function scripts_theme() {
    wp_enqueue_script('initjquery', get_template_directory_uri() . '/assets/js/jquery.js');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/bower_components/simplelightbox/dist/simple-lightbox.min.js');
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/packages/slick/slick/slick.min.js');
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js');
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/script.js');
}