<?php
/*
  Template Name: about
 */
?>
<?php get_header(); ?>
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/1920x1080/01.jpg" style="background: url(http://localhost/TestTemplate/wp-content/themes/04/img/1920x1080/01.jpg);">
    <div class="parallax-content container">
        <h1 class="carousel-title">About Us</h1>
        <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
    </div>
</div>
<!--========== PARALLAX ==========-->
<!--========== PAGE LAYOUT ==========-->
<!-- Features -->
<div class="section-seperator">
    <div class="content-lg container">
        <div class="row">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'guan2-aboutfeature', 'posts_per_page' => 9));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            <a class="link" href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- End Features -->

<!-- About -->
<div class="content-lg container">
    <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2>About</h2>
        </div>
    </div>
    <div class="row">
        <?php
        $latest_cat_post = new WP_Query(array('category_name' => 'guan2-about', 'posts_per_page' => 1));
        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p><?php the_content(); ?></p>
                    </div>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="about">
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</div>
<!-- End About -->


<?php include 'template-service.php'; ?>
<!-- Testimonials -->
<div class="content-lg container">
    <div class="row">
        <div class="col-sm-9">
            <h2>Notes From CEO</h2>

            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">
                <div class="swiper-wrapper">
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
                <div class="swiper-testimonials-pagination"></div>
            </div>
            <!-- End Swiper Testimonials -->
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Team -->
<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Meet the Team</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
        </div>
        <div class="row">
            <!-- Team -->
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'guan2-team', 'posts_per_page' => 9));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#"><?php the_title(); ?></a> <span class="text-uppercase margin-l-20"><?php the_excerpt(); ?></span></h4>
                        <p><?php the_content(); ?></p>
                        <a class="link" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- End Team -->
<!--========== END PAGE LAYOUT ==========-->

<?php get_footer(); ?>