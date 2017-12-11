<?php
/*
  Template Name: price
 */
?>
<?php get_header(); ?>
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/1920x1080/01.jpg" style="background: url(http://localhost/TestTemplate/wp-content/themes/04/img/1920x1080/01.jpg);">
    <div class="parallax-content container">
        <h1 class="carousel-title">Product Pricing</h1>
        <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Pricing -->
<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="row row-space-1">
            <div class="col-sm-4 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
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
            </div>
            <div class="col-sm-4 sm-margin-b-2">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
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
            </div>
            <div class="col-sm-4">
                <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
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
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Pricing -->


<div class="content-lg container">
    <div class="row">
        <div class="col-sm-9">
            <h2>Why Customers Are Choosing Asentus?</h2>
            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">
                <div class="swiper-wrapper">
                    <div class="swiper-slider swiper-testimonials">
                        <div class="swiper-wrapper">
                            <?php
                            $latest_cat_post = new WP_Query(array('category_name' => 'guan2-review',));
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
                <div class="swiper-testimonials-pagination"></div>
            </div>
            <!-- End Swiper Testimonials -->
        </div>
    </div>
</div>
<!-- End Testimonials -->

<?php include 'template_client.php'; ?>


<?php get_footer(); ?>