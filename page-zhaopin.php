<?php
/*
  Template Name: zhaopin
 */
?>
<?php get_header(); ?>

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg" style="background: url(http://localhost/TestTemplate/wp-content/themes/04/img/1920x1080/01.jpg);">
    <div class="parallax-content container">
        <h1 class="carousel-title">人才招聘</h1>
        <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container">
        <div class="row row-space-1 margin-b-2">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'guan2-zhaopin'));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                    <div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <h3><?php the_title(); ?></h3>
                                <p class="margin-b-5"><?php the_content(); ?></p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>