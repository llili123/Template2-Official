<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8">
        <title><?php get_bloginfo('name'); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link rel="shortcut icon" href="favicon.ico"/>
        <?php wp_head(); ?>
    </head>
    <body style="margin-top: -40px;">
                <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="<?php bloginfo('template_directory'); ?>/img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="http://localhost/TestTemplate/">首页</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="http://localhost/TestTemplate/about04/">关于我们</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="http://localhost/TestTemplate/product04/">产品介绍</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="http://localhost/TestTemplate/price04/">价格介绍</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="http://localhost/TestTemplate/zhaopin04/">人才招聘</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="http://localhost/TestTemplate/contact04/">联系我们</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->