<?php get_header();

if (have_posts()):while (have_posts()):
the_post();
?>

    <!-- section main content -->
<section class="main-content mt-3">
    <div class="container-xl">


        <div class="row gy-4">

            <div class="col-lg-8">
                <!--                   breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                        <li class="breadcrumb-item"><a href="#">الهام بخش</a></li>
                        <li class="breadcrumb-item active" aria-current="page">3 راه آسان برای سریعتر کردن آیفون
                        </li>
                    </ol>
                </nav>
                <!-- post single -->
                <div class="post post-single">
                    <!-- post header -->
                    <div class="post-header">
                        <h1 class="title mt-0 mb-3"><?php echo get_the_title(); ?></h1>
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><img
                                            src="<?php echo get_template_directory_uri() . '/assets/images/other/author-sm.png' ?>"
                                            class="author" alt="author"/><?php echo get_the_author(); ?></a></li>
                            <li class="list-inline-item"><a href="#"><?php $cat = get_the_category();
                                    echo $cat[0]->name; ?></a></li>
                            <li class="list-inline-item"><?php echo get_the_date(); ?></li>
                        </ul>
                    </div>
                    <!-- featured image -->
                    <div class="featured-image">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                    </div>
                    <!-- post content -->
                    <?php echo get_the_content(); ?>
                    <!-- post bottom section -->
                    <div class="post-bottom">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6 col-12 text-center text-md-start">
                                <?php $tags = wp_get_post_tags(get_the_ID());
                                if (has_tag()):
                                    foreach ($tags as $tag) :
                                        ?>
                                        <!-- tags -->
                                        <a href="#" class="tag"><?php echo $tag->name ?></a>
                                    <?php
                                    endforeach;
                                    ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 col-12">
                                <!-- social icons -->
                                <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i
                                                    class="fab fa-telegram-plane"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="spacer" data-height="50"></div>

                <div class="about-author padding-30 rounded">
                    <div class="thumb">
                        <?php echo get_avatar(get_the_author_meta('ID')); ?>
                    </div>
                    <div class="details">
                        <h4 class="name"><a href="#"><?php echo get_the_author_meta('display_name'); ?></a></h4>
                        <p><?php echo get_the_author_meta('description') ?></p>
                    </div>
                </div>

                <div class="spacer" data-height="50"></div>

                <!-- section header -->
                <div class="section-header mt-4">
                    <h3 class="section-title"><?php echo wp_count_comments(get_the_ID())->approved . ' نظر ثبت شده' ?></h3>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/wave.svg' ?>" class="wave"
                         alt="wave"/>
                </div>
                <?php if (comments_open(get_the_ID())): ?>
                    <?php comments_template('', true); ?>
                <?php endif; ?>
                

            </div>
            <?php endwhile;
            endif; ?>

            <div class="col-lg-4">

                <?php get_template_part('partials/sidebar/sidebar-wrapper', 'sidebar-wrapper'); ?>

            </div>

        </div>

    </div>
</section>


<?php get_footer(); ?>

<!--<figure class="figure">-->
<!--    <img src="images/posts/post-lg-2.jpg" class="figure-img img-fluid rounded" alt="...">-->
<!--    <figcaption class="figure-caption text-center">یک عنوان برای تصویر بالا.</figcaption>-->
<!--</figure>-->
