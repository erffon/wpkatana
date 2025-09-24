<?php


function ktn_after_theme_setup()
{
    add_filter('show_admin_bar', '__return_false');
    add_theme_support('post-thumbnails');
    add_theme_support('excerpt');
    add_theme_support('menus');

    // register menu
    register_nav_menu('top-menu', 'Top Menu');
}

add_action('after_setup_theme', 'ktn_after_theme_setup');