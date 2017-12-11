<?php
/*
  Template Name: service
 */
?>
<!-- Service -->
<div class="bg-color-sky-light" data-auto-height="true">
    <div class="content-lg container">
        <div class="row row-space-1 margin-b-2">
            <?php
            $latest_cat_post = new WP_Query(array('category_name' => 'guan2-yewufanwei', 'posts_per_page' => 6));
            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                    ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="<?php the_title(); ?>"></i>
                                </div>
                                <div class="service-info">
                                    <h3><?php the_excerpt(); ?></h3>
                                    <p class="margin-b-5"><?php the_content(); ?></p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Service -->
