<?php get_template_part('partials/footer/instagram-feed', 'instagram-feed'); ?>

<!-- footer -->
<footer>
    <?php wp_footer(); ?>
    <div class="container-xl">
        <div class="footer-inner">
            <div class="row d-flex align-items-center gy-4">
                <!-- copyright text -->
                <div class="col-md-4">
                    <span class="copyright">☕️ ارائه شده توسط  <a
                                href="https://weblight.agency">وبلایت</a></span>
                </div>

                <!-- social icons -->
                <div class="col-md-4 text-center">
                    <ul class="social-icons list-unstyled list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

                <!-- go to top button -->
                <div class="col-md-4">
                    <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>بازگشت به بالا</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>
    <!-- content -->
    <div class="search-content">
        <div class="text-center">
            <h3 class="mb-4 mt-0">ESC را فشار دهید تا بسته شود</h3>
        </div>
        <!-- form -->
        <form class="d-flex search-form">
            <input class="form-control me-2" type="search" placeholder="جستجو کنید و اینتر را فشار دهید ..."
                   aria-label="Search">
            <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
        </form>
    </div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>

    <!-- logo -->
    <div class="logo">
        <img src="images/logo.svg" alt="Katen"/>
    </div>

    <!-- menu -->
    <nav>
        <ul class="vertical-menu">
            <li class="active">
                <a href="index.html">صفحه اصلی</a>
                <ul class="submenu">
                    <li><a href="index.html">صفحه اصلی 1</a></li>
                    <li><a href="index-2.html">صفحه اصلی 2</a></li>
                    <li><a href="index-3.html">صفحه اصلی 3</a></li>
                    <li><a href="index-4.html">صفحه اصلی 4</a></li>
                    <li><a href="index-5.html">صفحه اصلی 5</a></li>
                </ul>
            </li>

            <li>
                <a href="#">صفحات</a>
                <ul class="submenu">
                    <li><a href="category.html">دسته بندی</a></li>
                    <li><a href="blog-single.html">جزییات وبلاگ 1</a></li>
                    <li><a href="blog-single-2.html">جزییات وبلاگ 2</a></li>

                </ul>
            </li>
            <li><a href="contact.html">تماس با ما</a></li>
            <li><a href="about.html">درباره ما</a></li>
        </ul>
    </nav>

    <!-- social icons -->
    <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
</div>


</body>

</html>