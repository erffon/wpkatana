<?php

//make theme compatible with post covers
add_theme_support('post-thumbnails');
add_theme_support('excerpt');

// enqueue styles and scripts
function ktn_enqueue_stylesheets()
{
    $uri = get_stylesheet_directory_uri();
    $path = get_stylesheet_directory();

    wp_enqueue_style('ktn-style-all-min', $uri . '/assets/css/all.min.css', array(), filemtime($path .
        '/assets/css/all.min.css'));
    wp_enqueue_style('ktn-style-slick', $uri . '/assets/css/slick.css', array(), filemtime($path . '/assets/css/slick.css'));
    wp_enqueue_style('ktn-style-simple-line-icons', $uri . '/assets/css/simple-line-icons.css', array(), filemtime($path . '/assets/css/simple-line-icons.css'));
    wp_enqueue_style('ktn-stylecss', $uri . '/assets/css/style.css', array(), filemtime($path . '/assets/css/style.css'));
    wp_enqueue_style('ktn-style-vazirfont', $uri . '/assets/css/vazir-font.css', array(), filemtime($path . '/assets/css/vazir-font.css'));
    wp_enqueue_style('ktn-style-bootstrap', $uri . '/assets/css/bootstrap.min.css', array(), filemtime($path . '/assets/css/bootstrap.min.css'));

}

add_action('wp_enqueue_scripts', 'ktn_enqueue_stylesheets');

function ktn_enqueue_scripts()
{
    $uri = get_stylesheet_directory_uri();
    $path = get_stylesheet_directory();

    wp_enqueue_script('jquery');
    wp_enqueue_script('ktn-popper', $uri . '/assets/js/popper.min.js', array('jquery'), filemtime($path . '/assets/js/popper.min.js'), true);
    wp_enqueue_script('ktn-bootstrap', $uri . '/assets/js/bootstrap.min.js', array('jquery', 'ktn-popper'), filemtime($path . '/assets/js/bootstrap.min.js'), true);
    wp_enqueue_script('ktn-slick', $uri . '/assets/js/slick.min.js', array('jquery'), filemtime($path . '/assets/js/slick.min.js'), true);
    wp_enqueue_script('ktn-stickysidebar', $uri . '/assets/js/sticky-sidebar.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('ktn-custom', $uri . '/assets/js/custom.js', array('jquery'), filemtime($path . '/assets/js/custom.js'), true);
}

add_action('wp_enqueue_scripts', 'ktn_enqueue_scripts');