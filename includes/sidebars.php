<?php

add_action('init', 'register_menu');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 1',
        'id' => 'footer_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 2',
        'id' => 'footer_2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 3',
        'id' => 'footer_3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer 4',
        'id' => 'footer_4',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}