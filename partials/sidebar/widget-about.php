<!-- widget about -->
<div class="widget rounded">
    <?php if (is_active_sidebar('sidebar-1')) { ?>
        <ul id="sidebar" style="list-style: none">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </ul>
    <?php } ?>
</div>
