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

add_theme_support('post-thumbnails');
add_theme_support('widgets');

add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => 'Меню в шапке',
        'cat_menu' => 'Меню категорий'
    ) );
});

add_action('init', function () {
    register_post_type('slider', array(
        'labels'             => array(
            'name'               => 'Слайдеры', // Основное название типа записи
            'singular_name'      => "Слайдер", // отдельное название записи типа Book
            'add_new'            => 'Добавить новый',
            'add_new_item'       => 'Добавить новый слайдер',
            'edit_item'          => 'Редактировать слайдер',
            'new_item'           => 'Новый слайдер',
            'view_item'          => 'Посмотреть сдайдер',
            'search_items'       => 'Найти слайдер',
            'not_found'          =>  'Слайдеров не найдено',
            'not_found_in_trash' => 'В корзине слайдеров не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Глав. слайдер'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail',)
    ) );
});


register_sidebar(array(
    'name' => 'Описание услуг',
    'id' => 'service-description',
    'description' => '',
    'class' => '',
    'before_widget' => '<div class="wrapper">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => ''));

register_sidebar(array(
    'name' => 'Переключение языков',
    'id' => 'lang',
    'description' => '',
    'class' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''));

register_sidebar(array(
    'name' => 'Переключение валюты',
    'id' => 'currency',
    'description' => '',
    'class' => '',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => ''));