<?php

class Ktn_Recent_Posts_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'recent-posts-widget',
            'ktn Recent Posts',
        );
    }

    public function widget($args, $instance)
    {
        $args = array(
            'posts_per_page' => !empty($instance['count']) ? $instance['count'] : 3,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
        );
        $the_query = new WP_Query($args);


        ?>
        <div class="widget-content">
            <?php
            if ($the_query->have_posts()) :
                $counter = 1;
                while ($the_query->have_posts()): $the_query->the_post();
                    ?>
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <span class="number"><?php echo $counter; ?></span>
                            <a href="<?php the_permalink(); ?>">
                                <div class="inner">
                                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?>
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a
                                        href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item"><?php echo get_the_date('d M Y'); ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $counter++;
                endwhile;
            endif;
            ?>
        </div>
        <?php

    }

    public function form($instance)
    {
        $count = !empty($instance['count']) ? $instance['count'] : 3;
        ?>
        <label for="<?php $this->get_field_id('count'); ?>">تعداد پست:</label>
        <input type="number" class="widefat" id="<?php $this->get_field_id('count'); ?>"
               name="<?php echo esc_attr($this->get_field_name('count')); ?>"
               value="<?php echo esc_attr($count); ?>">
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['count'] = (!empty($new_instance['count'])) ? sanitize_text_field($new_instance['count']) : 3;
        return $instance;
    }
}

add_action('widgets_init', function () {
    register_widget('Ktn_Recent_Posts_Widget');
});