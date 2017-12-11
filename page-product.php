<?php
/*
  Template Name: product
 */
?>
<?php get_header(); ?>

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/1920x1080/01.jpg" style="background: url(http://localhost/TestTemplate/wp-content/themes/04/img/1920x1080/01.jpg);">
    <div class="parallax-content container">
        <h1 class="carousel-title">Products</h1>
        <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<!--========== PAGE LAYOUT ==========-->
<div class="content-lg container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2>Our Exceptional Solutions</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
        </div>
    </div>
    <div class="row margin-b-50">
        <?php
        $latest_cat_post = new WP_Query(array('category_name' => 'guan2-product'));
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
<!-- End Our Exceptional Solutions -->
<?php include('template_client.php'); ?>
<?php include('template_ourclient.php'); ?>
<?php get_footer(); ?>