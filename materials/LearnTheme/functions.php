<?php

add_action('after_setup_theme', 'learn_theme_setup');
add_action('wp_enqueue_scripts', 'load_learn_theme_scripts');

function learn_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu' ),
        'footer'  => __( 'Footer Links Menu' ),
        'top_phone' => __('Top phone menu'),
        'top_account' => __('Top account menu'),
    ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 200,
        'width'       => 200,
        'flex-height' => true,
    ) );
}

function load_learn_theme_scripts() {
    // Load our main stylesheet.
    wp_enqueue_style( 'main-css', get_stylesheet_uri() );
    wp_enqueue_style( 'learn_theme_styles', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'jquery', true );

    wp_register_script( 'learn_theme_script',  get_template_directory_uri() . '/scripts/app.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'learn_theme_script' );
}