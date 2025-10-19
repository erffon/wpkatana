<!-- widget tags -->
<div class="widget rounded">
    <div class="widget-header text-center">
        <h3 class="widget-title">برچسب ها</h3>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/wave.svg' ?>"
             class="wave" alt="wave"/>
    </div>
    <div class="widget-content">
        <?php
        dynamic_sidebar('sidebar-3');
        ?>
    </div>
</div>