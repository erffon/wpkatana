<?php

class Ktn_Introduction_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'introduction-widget',
            'ktn introduction',
        );
        add_action('widgets_init', function () {
            register_widget('Ktn_Introduction_Widget');
        });
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'];
        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }
        echo $args['after_title'];
        echo get_bloginfo('description');
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : 'عنوان پیشفرض'; ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">عنوان ویجت:</label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>

    <?php }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';

        return $instance;
    }
}

add_action('widgets_init', function () {
    register_widget('Ktn_Introduction_Widget');
});
