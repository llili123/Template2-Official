<div class="bg-color-sky-light">
    <div class="content-lg container">
        <div class="swiper-slider swiper-clients">
            <div class="swiper-wrapper">
                <?php
                $latest_cat_post = new WP_Query(array('category_name' => 'guan2-logo', 'posts_per_page' => 9));
                if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                        ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo $image[0]; ?>" alt="Clients Logo">
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
