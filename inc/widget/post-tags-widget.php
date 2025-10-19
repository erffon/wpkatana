<?php

class Ktn_post_tags_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'ktn_post_tags_widget',
            'ktn post tags',
        );
    }

    function widget($args, $instance)
    {

        global $post;
        $tagsList = get_tags($post->ID);
        foreach ($tagsList as $tag) :
            ?>
            <a href="#" class="tag"><?php echo $tag->name; ?></a>
        <?php
        endforeach;
        
    }
}

add_action('widgets_init', function () {
    register_widget('Ktn_post_tags_widget');
});