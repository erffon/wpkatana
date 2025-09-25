<div class="col-lg-8">
    <?php
    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
    ];
    $query = new WP_Query($args);
    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post();

            ?>
            <div class="post featured-post-lg">
                <div class="details clearfix">
                    <?php $cat = get_the_category(); ?>
                    <a href="sample1" class="category-badge mb-2"><?php if (!empty($cat)) {
                            echo esc_html($cat[0]->name);
                        } ?></a>
                    <h2 class="post-title">
                        <a href="<?php echo get_permalink(); ?>"><?php esc_html(the_title()); ?></a>
                    </h2>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><?php the_author(); ?></a></li>
                        <li class="list-inline-item"><?php the_date(); ?></li>
                    </ul>
                </div>
                <a href="sample1/">
                    <div class="thumb rounded">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                </a>
            </div>
        <?php endwhile;
    endif; ?>
</div>
