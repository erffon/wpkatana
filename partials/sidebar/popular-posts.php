<!-- widget مطالب محبوب -->
<div class="widget rounded">
    <div class="widget-header text-center">
        <h3 class="widget-title">مطالب محبوب</h3>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/wave.svg' ?>"
             class="wave" alt="wave"/>
    </div>
    <?php
    if (is_active_sidebar('sidebar-2')) {
        ?>

        <?php dynamic_sidebar('sidebar-2'); ?>

        <?php
    }
    ?>
</div>