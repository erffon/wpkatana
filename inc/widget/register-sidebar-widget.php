<?php

function ktn_register_sidebar_widget()
{

    register_sidebar(array(
        'name' => 'ویجت معرفی سایت',
        'id' => 'sidebar-1',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'ویجت آخرین مقالات',
        'id' => 'sidebar-2',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'ویجت برچسب‌های مقاله',
        'id' => 'sidebar-3',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}

add_action('widgets_init', 'ktn_register_sidebar_widget');

