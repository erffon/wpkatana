<?php get_header(); ?>


<!-- hero section -->
<section id="hero">

    <div class="container-xl">

        <div class="row gy-4">
            <?php get_template_part('partials/index/featured-post', 'featured-post') ?>
            <?php get_template_part('partials/index/post-tabs', 'post-tabs') ?>
        </div>
    </div>
</section>

<!-- section main content -->
<section class="main-content">
    <div class="container-xl">

        <div class="row gy-4">
            <?php get_template_part('partials/index/selected-posts', 'selected-posts'); ?>
            <?php get_template_part('partials/sidebar/sidebar-wrapper', 'sidebar-wrapper'); ?>
        </div>


    </div>

    </div>
</section>


<?php get_footer(); ?>
