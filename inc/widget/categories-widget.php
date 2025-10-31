<?php

class Ktn_Categories_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'ktn-categories-widget',
            'ktn Categories widget',
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        $title = !empty($instance['title']) ? $instance['title'] : 'دسته‌بندی‌ها';
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        if ($title) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        }

        echo '<div class="widget-content">';
        echo '<ul class="list widget-categories" >';
        echo wp_list_categories([
            'title_li' => '',
            'show_count' => false,
            'echo' => 0,
            'orderby' => 'count',
            'order' => 'DESC',
        ]);
        echo '</ul>';
        echo '</div>';

        echo $args['after_widget'];


    }

    public function form($instance)
    {
        $title = $instance['title'] ?? 'دسته‌بندی‌ها'; ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">عنوان:</label>
            <input class="widefat"
                   id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                   type="text"
                   value="<?php echo esc_attr($title); ?>">
        </p>
    <?php }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = isset($new_instance['title']) ? sanitize_text_field($new_instance['title']) : '';
        return $instance;
    }
}

add_action('widgets_init', function () {
    register_widget('Ktn_Categories_Widget');
});
add_filter('wp_list_categories', function ($output) {
    return str_replace('<a ', '<a style="text-decoration:none;" ', $output);
});