<?php

function ktn_register_sidebar_widget()
{

    register_sidebar(array(
        'name' => 'سایدبار 1 قالب',
        'id' => 'sidebar-1',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'سایدبار 2 قالب',
        'id' => 'sidebar-2',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}

add_action('widgets_init', 'ktn_register_sidebar_widget');

