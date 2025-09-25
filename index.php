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


            <div class="col-lg-8">

                <!-- section header -->
                <div class="section-header">
                    <h3 class="section-title">پیشنهاد سردبیر</h3>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/wave.svg' ?>" class="wave"
                         alt="wave"/>
                </div>

                <div class="padding-30 rounded bordered">
                    <div class="row gy-5">
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post">
                                <div class="thumb rounded">
                                    <a href="category.html" class="category-badge position-absolute">سبک زندگی</a>
                                    <span class="post-format">
											<i class="icon-picture"></i>
										</span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/editor-lg.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <ul class="meta list-inline mt-4 mb-0">
                                    <li class="list-inline-item"><a href="#"><img
                                                    src="<?php echo get_template_directory_uri() . '/assets/images/other/author-sm.png' ?>"
                                                    class="author" alt="author"/>کاتن</a>
                                    </li>
                                    <li class="list-inline-item">30 اردیبهشت 1401</li>
                                </ul>
                                <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">15 راه ناشنیده برای
                                        دستیابی به واکر بزرگ</a></h5>
                                <p class="excerpt mb-0">آرامشی شگفت انگیز همه جانم را فرا گرفته است، مثل این صبح های
                                    شیرین بهاری که از آن لذت می برم</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- post -->
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/editor-sm-1.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0"><a href="blog-single.html">3 راه آسان برای سریعتر
                                            کردن آیفون</a></h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post -->
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/editor-sm-2.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0"><a href="blog-single.html">یک روش فوق العاده آسان که
                                            برای همه کار می کند</a></h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post -->
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/editor-sm-3.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0"><a href="blog-single.html">10 راه برای شروع فوری
                                            فروش مبلمان</a></h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post -->
                            <div class="post post-list-sm square">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/editor-sm-4.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0"><a href="blog-single.html">15 راه ناشنیده برای
                                            دستیابی به واکر بزرگ</a></h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spacer" data-height="50"></div>

                <!-- horizontal ads -->
                <div class="ads-horizontal text-md-center">
                    <span class="ads-title">- تبلیغات -</span>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/ads/ad-750.png' ?>"
                             alt="Advertisement"/>
                    </a>
                </div>

                <div class="spacer" data-height="50"></div>

                <!-- section header -->
                <div class="section-header">
                    <h3 class="section-title">پرطرفدار</h3>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/wave.svg' ?>" class="wave"
                         alt="wave"/>
                </div>

                <div class="padding-30 rounded bordered">
                    <div class="row gy-5">
                        <div class="col-sm-6">
                            <!-- post large -->
                            <div class="post">
                                <div class="thumb rounded">
                                    <a href="category.html" class="category-badge position-absolute">فرهنگ</a>
                                    <span class="post-format">
											<i class="icon-picture"></i>
										</span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/trending-lg-1.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <ul class="meta list-inline mt-4 mb-0">
                                    <li class="list-inline-item"><a href="#"><img
                                                    src="<?php echo get_template_directory_uri() . '/assets/images/other/author-sm.png' ?>"
                                                    class="author" alt="author"/>کاتن</a>
                                    </li>
                                    <li class="list-inline-item">30 اردیبهشت 1401</li>
                                </ul>
                                <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">حقایقی در مورد تجارت که
                                        به موفقیت شما کمک می کند</a></h5>
                                <p class="excerpt mb-0">آرامشی شگفت انگیز همه جانم را فرا گرفته است، مثل این صبح های
                                    شیرین بهاری که از آن لذت می برم</p>
                            </div>
                            <!-- post -->
                            <div class="post post-list-sm square before-seperator">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/trending-sm-1.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0"><a href="blog-single.html">3 راه آسان برای سریعتر
                                            کردن آیفون</a></h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post -->
                            <div class="post post-list-sm square before-seperator">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/trending-sm-2.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0"><a href="blog-single.html">یک روش فوق العاده آسان که
                                            برای همه کار می کند</a></h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- post large -->
                            <div class="post">
                                <div class="thumb rounded">
                                    <a href="category.html" class="category-badge position-absolute">الهام بخش</a>
                                    <span class="post-format">
											<i class="icon-earphones"></i>
										</span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/trending-lg-2.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <ul class="meta list-inline mt-4 mb-0">
                                    <li class="list-inline-item"><a href="#"><img
                                                    src="<?php echo get_template_directory_uri() . '/assets/images/other/author-sm.png' ?>"
                                                    class="author" alt="author"/>کاتن</a>
                                    </li>
                                    <li class="list-inline-item">30 اردیبهشت 1401</li>
                                </ul>
                                <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">5 راه آسان که می توانید
                                        آینده را به موفقیت تبدیل کنید</a></h5>
                                <p class="excerpt mb-0">آرامشی شگفت انگیز همه جانم را فرا گرفته است، مثل این صبح های
                                    شیرین بهاری که از آن لذت می برم</p>
                            </div>
                            <!-- post -->
                            <div class="post post-list-sm square before-seperator">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/trending-sm-3.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0"><a href="blog-single.html">در اینجا 8 راه برای
                                            موفقیت سریعتر وجود دارد</a></h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- post -->
                            <div class="post post-list-sm square before-seperator">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/trending-sm-4.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details clearfix">
                                    <h6 class="post-title my-0"><a href="blog-single.html">با این 7 نکته بر هنر
                                            طبیعت مسلط شوید</a></h6>
                                    <ul class="meta list-inline mt-1 mb-0">
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="spacer" data-height="50"></div>

                <!-- section header -->
                <div class="section-header">
                    <h3 class="section-title">الهام بخش</h3>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/wave.svg' ?>" class="wave"
                         alt="wave"/>
                    <div class="slick-arrows-top">
                        <button type="button" data-role="none" class="carousel-topNav-prev slick-custom-buttons"
                                aria-label="بعدی"><i class="icon-arrow-right"></i></button>
                        <button type="button" data-role="none" class="carousel-topNav-next slick-custom-buttons"
                                aria-label="قبلی"><i class="icon-arrow-left"></i></button>
                    </div>
                </div>

                <div class="row post-carousel-twoCol post-carousel">
                    <!-- post -->
                    <div class="post post-over-content col-md-6">
                        <div class="details clearfix">
                            <a href="category.html" class="category-badge">الهام بخش</a>
                            <h4 class="post-title"><a href="blog-single.html">آیا می خواهید خالکوبی جذاب تری داشته
                                    باشید؟</a></h4>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#">کاتن</a></li>
                                <li class="list-inline-item">30 اردیبهشت 1401</li>
                            </ul>
                        </div>
                        <a href="blog-single.html">
                            <div class="thumb rounded">
                                <div class="inner">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/inspiration-1.jpg' ?>"
                                         alt="thumb"/>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- post -->
                    <div class="post post-over-content col-md-6">
                        <div class="details clearfix">
                            <a href="category.html" class="category-badge">الهام بخش</a>
                            <h4 class="post-title"><a href="blog-single.html">با کمک این ۷ نکته احساس بهتری داشته
                                    باشید:</a></h4>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#">کاتن</a></li>
                                <li class="list-inline-item">30 اردیبهشت 1401</li>
                            </ul>
                        </div>
                        <a href="blog-single.html">
                            <div class="thumb rounded">
                                <div class="inner">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/inspiration-2.jpg' ?>"
                                         alt="thumb"/>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- post -->
                    <div class="post post-over-content col-md-6">
                        <div class="details clearfix">
                            <a href="category.html" class="category-badge">الهام بخش</a>
                            <h4 class="post-title"><a href="blog-single.html">نور شما نزدیک به توقف شدن است:</a>
                            </h4>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#">کاتن</a></li>
                                <li class="list-inline-item">30 اردیبهشت 1401</li>
                            </ul>
                        </div>
                        <a href="blog-single.html">
                            <div class="thumb rounded">
                                <div class="inner">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/inspiration-3.jpg' ?>"
                                         alt="thumb"/>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="spacer" data-height="50"></div>

                <!-- section header -->
                <div class="section-header">
                    <h3 class="section-title">آخرین مطالب</h3>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/wave.svg' ?>" class="wave"
                         alt="wave"/>
                </div>

                <div class="padding-30 rounded bordered">

                    <div class="row">

                        <div class="col-md-12 col-sm-6">
                            <!-- post -->
                            <div class="post post-list clearfix">
                                <div class="thumb rounded">
										<span class="post-format-sm">
											<i class="icon-picture"></i>
										</span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/latest-sm-1.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-3">
                                        <li class="list-inline-item"><a href="#"><img
                                                        src="<?php echo get_template_directory_uri() . '/assets/images/other/author-sm.png' ?>"
                                                        class="author"
                                                        alt="author"/>کاتن</a></li>
                                        <li class="list-inline-item"><a href="#">پرطرفدار</a></li>
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                    <h5 class="post-title"><a href="blog-single.html">60 کاری که باید فوراً در مورد
                                            ساختمان انجام دهید</a></h5>
                                    <p class="excerpt mb-0">آرامشی شگفت انگیز تمام روحم را گرفته است، مثل این صبح
                                        های شیرین</p>
                                    <div class="post-bottom clearfix d-flex align-items-center">
                                        <div class="social-share me-auto">
                                            <button class="toggle-button icon-share"></button>
                                            <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-pinterest"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-telegram-plane"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="far fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="blog-single.html"><span class="icon-options"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6">
                            <!-- post -->
                            <div class="post post-list clearfix">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/latest-sm-2.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-3">
                                        <li class="list-inline-item"><a href="#"><img
                                                        src="<?php echo get_template_directory_uri() . '/assets/images/other/author-sm.png' ?>"
                                                        class="author"
                                                        alt="author"/>کاتن</a></li>
                                        <li class="list-inline-item"><a href="#">سبک زندگی</a></li>
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                    <h5 class="post-title"><a href="blog-single.html">با این 7 نکته بر هنر طبیعت
                                            مسلط شوید</a></h5>
                                    <p class="excerpt mb-0">آرامشی شگفت انگیز تمام روحم را گرفته است، مثل این صبح
                                        های شیرین</p>
                                    <div class="post-bottom clearfix د-flex align-items-center">
                                        <div class="social-share me-auto">
                                            <button class="toggle-button icon-share"></button>
                                            <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-pinterest"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-telegram-plane"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="far fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="blog-single.html"><span class="icon-options"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6">
                            <!-- post -->
                            <div class="post post-list clearfix">
                                <div class="thumb rounded">
										<span class="post-format-sm">
											<i class="icon-camrecorder"></i>
										</span>
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/latest-sm-3.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-3">
                                        <li class="list-inline-item"><a href="#"><img
                                                        src="<?php echo get_template_directory_uri() . '/assets/images/other/author-sm.png' ?>"
                                                        class="author"
                                                        alt="author"/>کاتن</a></li>
                                        <li class="list-inline-item"><a href="#">مد روز</a></li>
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                    <h5 class="post-title"><a href="blog-single.html">حقایقی در مورد تجارت که به
                                            موفقیت شما کمک می کند</a></h5>
                                    <p class="excerpt mb-0">آرامشی شگفت انگیز تمام روحم را گرفته است، مثل این صبح
                                        های شیرین</p>
                                    <div class="post-bottom clearfix د-flex align-items-center">
                                        <div class="social-share me-auto">
                                            <button class="toggle-button icon-share"></button>
                                            <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-pinterest"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-telegram-plane"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="far fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="blog-single.html"><span class="icon-options"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6">
                            <!-- post -->
                            <div class="post post-list clearfix">
                                <div class="thumb rounded">
                                    <a href="blog-single.html">
                                        <div class="inner">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/posts/latest-sm-4.jpg' ?>"
                                                 alt="post-title"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <ul class="meta list-inline mb-3">
                                        <li class="list-inline-item"><a href="#"><img
                                                        src="<?php echo get_template_directory_uri() . '/assets/images/other/author-sm.png' ?>"
                                                        class="author"
                                                        alt="author"/>کاتن</a></li>
                                        <li class="list-inline-item"><a href="#">سیاست</a></li>
                                        <li class="list-inline-item">30 اردیبهشت 1401</li>
                                    </ul>
                                    <h5 class="post-title"><a href="blog-single.html">نور شما نزدیک به توقف شدن
                                            است:</a></h5>
                                    <p class="excerpt mb-0">آرامشی شگفت انگیز تمام روحم را گرفته است، مثل این صبح
                                        های شیرین</p>
                                    <div class="post-bottom clearfix د-flex align-items-center">
                                        <div class="social-share me-auto">
                                            <button class="toggle-button icon-share"></button>
                                            <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-pinterest"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="fab fa-telegram-plane"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                                class="far fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="more-button float-end">
                                            <a href="blog-single.html"><span class="icon-options"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div
                    >
                    <!-- بارگذاری بیشتر button -->
                    <div class="text-center">
                        <button class="btn btn-simple">بارگذاری بیشتر</button>
                    </div>

                </div>

            </div>
            <div class="col-lg-4">

                <?php get_template_part('partials/sidebar/sidebar-wrapper', 'sidebar-wrapper'); ?>

            </div>


        </div>

    </div>
</section>


<?php get_footer(); ?>
