<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- preloader -->
<!--<div id="preloader">-->
<!--    <div class="book">-->
<!--        <div class="inner">-->
<!--            <div class="left"></div>-->
<!--            <div class="middle"></div>-->
<!--            <div class="right"></div>-->
<!--        </div>-->
<!--        <ul>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--            <li></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->

<!-- site wrapper -->
<div class="site-wrapper">
    <div class="main-overlay"></div>

    <!-- header -->
    <header class="header-default">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xl">
                <!-- site logo -->
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img
                            src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg'; ?>"
                            alt="logo"/></a>

                <!--                <div class="collapse navbar-collapse">-->
                <!-- menus -->
                <?php
                if (has_nav_menu('top-menu')) {
                    wp_nav_menu([
                        'theme_location' => 'top-menu',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                        'menu_class' => 'navbar-nav ml-auto',
                        'depth' => 2,
                        'fallback_cb' => '__return_false',
                        'walker' => new Katen_Bootstrap_Navwalker(),
                    ]);
                }

                ?>
                <!-- header right section -->
                <div class="header-right">
                    <!-- social icons -->
                    <ul class="social-icons list-unstyled list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <!-- header buttons -->
                    <div class="header-buttons">
                        <button class="search icon-button">
                            <i class="icon-magnifier"></i>
                        </button>
                        <button class="burger-menu icon-button">
                            <span class="burger-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

    </header>