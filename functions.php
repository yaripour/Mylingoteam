<?php
function add_theme_scripts() {
    wp_enqueue_style( 'all', get_template_directory_uri() . '/css/all.min.css', array(), false, 'all');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), false, 'all' );
    wp_enqueue_script( 'jq', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), false, true);
    wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function mylingoteam_setup_theme () {
    add_theme_support( feature: 'title-tag');
    add_theme_support( feature: 'automatic-feed-links');
    add_theme_support(feature: 'post-thumbnails');
    add_theme_support(feature: 'woocommerce');
    add_image_size(name:'article',width:291,height: 320, crop:true);
    add_image_size(name:'large_video_pic',width:600,height: 554, crop:true);
    add_image_size(name:'small_video_pic',width:270,height: 126, crop:true);
    add_image_size(name:'product',width:291,height: 152, crop:true);
    register_nav_menus(
        array(
            'header-menu' => __( 'منوی اصلی' ),
            'top-menu' => __( 'منوی نوار بالا' )
        )
    );

}

add_action('after_setup_theme','mylingoteam_setup_theme');

function mylingo_widget() {
    register_sidebar( array(
        'name'          => __( 'ناحیه کناری بلاگ' ),
        'id'            => 'mylingo_blog',
      //  'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر- ستون اول' ),
        'id'            => 'footer_aboutus',
        //  'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر- ستون دوم' ),
        'id'            => 'footer_quickaccess',
        //  'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر- ستون سوم' ),
        'id'            => 'footer_contactus',
        //  'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );


add_action( 'widgets_init', 'mylingo_widget' );

function custom_excerpt_lenght () {
    return 30;
}
add_filter('excerpt_lenght','custom_excerpt_lenght',999);


require_once 'inc/mylingo-video-posttype.php';
require_once 'inc/mylingo-video-metabox.php';


?>

