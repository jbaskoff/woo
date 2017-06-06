<?php

add_action('after_setup_theme', function () {
  add_theme_support('woocommerce');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('f-awesome', get_template_directory_uri() . '/libs/font-awesome-4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('slick-st', get_template_directory_uri() . '/libs/slick-1.6.0/slick/slick.css');
    wp_enqueue_style('slick-tm', get_template_directory_uri() . '/libs/slick-1.6.0/slick/slick-theme.css');
    wp_enqueue_style('ani-css', get_template_directory_uri() . '/libs/animate.css');
    wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('jquery-my', get_template_directory_uri() . '/js/jquery-2.1.3.js');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/libs/slick-1.6.0/slick/slick.min.js');
    wp_enqueue_script('my-pl', get_template_directory_uri() . '/js/myplugin.js');
    wp_enqueue_script('my-js', get_template_directory_uri() . '/js/js.js');
});

