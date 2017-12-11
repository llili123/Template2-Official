<?php
function twentyseventeen_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
     * If you're building a theme based on Twenty Seventeen, use a find and replace
     * to change 'twentyseventeen' to the name of your theme in all the template files.
     */
    load_theme_textdomain('01');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('twentyseventeen-featured-image', 2000, 1200, true);

    add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);

    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');



    add_theme_support('starter-content', $starter_content);
}
add_action('after_setup_theme', 'twentyseventeen_setup');
/**
 * Enqueue scripts and styles.
 */
function my_scripts() {


    wp_enqueue_style('googleapis-css', 'http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700');
    wp_enqueue_style('simple-line-icons-css', get_template_directory_uri().('/vendor/simple-line-icons/simple-line-icons.min.css'));
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().('/vendor/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('animate-css', get_template_directory_uri().('/css/animate.css'));
    wp_enqueue_style('swiper-css', get_template_directory_uri().('/vendor/swiper/css/swiper.min.css'));
     wp_enqueue_style('layout', get_template_directory_uri().('/css/layout.min.css'));
     wp_enqueue_style('style-css', get_template_directory_uri().('/style.css'));


    // Load the html5 shiv.
    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery-3.2.1.min.js');
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/vendor/jquery-migrate.min.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/vendor/jquery.easing.js');
    wp_enqueue_script('jquery-back-to-top', get_template_directory_uri() . '/vendor/jquery.back-to-top.js');
    wp_enqueue_script('jquery-smooth-scroll', get_template_directory_uri() . '/vendor/jquery.smooth-scroll.js');
    wp_enqueue_script('jquery-wow', get_template_directory_uri() . '/vendor/jquery.wow.min.js');


    wp_enqueue_script('swiper-jquery', get_template_directory_uri() . '/vendor/swiper/js/swiper.jquery.min.js');
    wp_enqueue_script('jquery-masonry', get_template_directory_uri() . '/vendor/masonry/jquery.masonry.pkgd.min.js');
    wp_enqueue_script('imagesloaded-pkgd', get_template_directory_uri() . '/vendor/masonry/imagesloaded.pkgd.min.js');
    
    wp_enqueue_script('layout-js', get_template_directory_uri() . '/js/layout.min.js');
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/js/components/wow.min.js');
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/components/swiper.min.js');
    wp_enqueue_script('masonry-js', get_template_directory_uri() . '/js/components/masonry.min.js');
    
}
add_action('wp_enqueue_scripts', 'my_scripts');

remove_filter( 'the_excerpt', 'wpautop' );





