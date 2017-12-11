<?php get_header(); ?>
<!--========== SLIDER ==========-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="container">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
    </div>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/1920x1080/01.jpg" alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h1 class="carousel-title">Hi-Tech Design</h1>
                        <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                    </div>
                    <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/1920x1080/02.jpg" alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h2 class="carousel-title">Hi-Tech Design</h2>
                        <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                    </div>
                    <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--========== SLIDER ==========-->

<!-- Service -->
<?php include 'template-service.php'; ?>
<!-- End Service -->

<!-- Latest Products -->
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2>最新产品</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
        </div>
    </div>
    <div class="row">
        <?php
        $latest_cat_post = new WP_Query(array('category_name' => 'guan2-product', tag => 'last', 'posts_per_page' => 3));
        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" />
                        </div>
                    </div>
                    <h4><a href="#"><?php the_title(); ?></a> <span class="text-uppercase margin-l-20 excerptspan"><?php the_excerpt(); ?></span></h4>
                    <p><?php the_content(); ?></p>
                    <a class="link" href="#">Read More</a>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<!-- End Latest Products -->

<!-- Clients -->
<?php include 'template_client.php'; ?>
<!-- End Clients -->

<!-- Testimonials -->
<div class="content-lg container">
    <div class="row">
        <div class="col-sm-9">
            <h2>Customer Reviews</h2>
            <div class="swiper-slider swiper-testimonials">
                <div class="swiper-wrapper">
                    <?php
                    $latest_cat_post = new WP_Query(array('category_name' => 'guan2-review', 'posts_per_page' => 9));
                    if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                            ?>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <?php the_content(); ?>
                                    <p><span class="fweight-700 color-link"><?php the_title(); ?></span><?php the_excerpt(); ?></p>
                                </blockquote>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="swiper-testimonials-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Pricing -->
<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="row row-space-1">
            <div class="col-sm-4 sm-margin-b-2">
                <!-- Pricing -->
                <div class="pricing">
                    <div class="margin-b-30">
                        <i class="pricing-icon icon-chemistry"></i>
                        <h3>Starter Kit <span> - $</span> 49</h3>
                        <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                    </div>
                    <ul class="list-unstyled pricing-list margin-b-50">
                        <li class="pricing-list-item">Basic Features</li>
                        <li class="pricing-list-item">Up to 5 products</li>
                        <li class="pricing-list-item">50 Users Panels</li>
                    </ul>
                    <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                </div>
                <!-- End Pricing -->
            </div>
            <div class="col-sm-4 sm-margin-b-2">
                <!-- Pricing -->
                <div class="pricing pricing-active">
                    <div class="margin-b-30">
                        <i class="pricing-icon icon-badge"></i>
                        <h3>Professional <span> - $</span> 149</h3>
                        <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                    </div>
                    <ul class="list-unstyled pricing-list margin-b-50">
                        <li class="pricing-list-item">Basic Features</li>
                        <li class="pricing-list-item">Up to 100 products</li>
                        <li class="pricing-list-item">100 Users Panels</li>
                    </ul>
                    <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                </div>
                <!-- End Pricing -->
            </div>
            <div class="col-sm-4">
                <!-- Pricing -->
                <div class="pricing">
                    <div class="margin-b-30">
                        <i class="pricing-icon icon-shield"></i>
                        <h3>Advanced <span> - $</span> 249</h3>
                        <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                    </div>
                    <ul class="list-unstyled pricing-list margin-b-50">
                        <li class="pricing-list-item">Extended Features</li>
                        <li class="pricing-list-item">Unlimited products</li>
                        <li class="pricing-list-item">Unlimited Users Panels</li>
                    </ul>
                    <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                </div>
                <!-- End Pricing -->
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Pricing -->

<!-- Promo Section -->
<?php include('template_ourclient.php'); ?>
<!-- End Promo Section -->

<!-- Work -->
<div class="bg-color-sky-light overflow-h">
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Showcase</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
        </div>
        <!--// end row -->

        <!-- Masonry Grid -->
        <div class="masonry-grid">

            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="<?php bloginfo('template_directory'); ?>/img/800x400/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Art Of Coding</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="<?php bloginfo('template_directory'); ?>/img/397x400/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="<?php bloginfo('template_directory'); ?>/img/397x300/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".4s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="<?php bloginfo('template_directory'); ?>/img/397x300/02.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="<?php bloginfo('template_directory'); ?>/img/397x300/03.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
        </div>
        <!-- End Masonry Grid -->
    </div>
</div>
<!-- End Work -->
<!--========== END PAGE LAYOUT ==========-->
<?php get_footer(); ?>