<?php

function ktn_register_sidebar_init()
{

    register_sidebar(array(
        'name' => 'سایدبار قالب',
        'id' => 'sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
    {

    }
}

add_action('widgets_init', 'ktn_register_sidebar_init');