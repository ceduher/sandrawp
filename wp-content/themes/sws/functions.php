<?php

function my_theme_setup() {
    // Ready for i18n
    load_theme_textdomain( "my_theme", TEMPLATEPATH . "/languages");

    // Use thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for custom logo.
    add_theme_support( 'custom-logo', array(
        'height' => 240,
        'width' => 240,
        'flex-height' => true,
    ) );

    // Register Navigation Menus
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

function my_theme_cssjs() {
    wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css"' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css"' );   
    if ( isset( $_GET['page'] ) && $_GET['page'] == 'contactame' ) {
        wp_enqueue_style( 'material-style', get_template_directory_uri() . '/assets/css/mdb.css"' ); /* mdb.min.css */  
    }
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/assets/css/estilos.css' );/* styles.min.css */
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );    
    wp_enqueue_script( 'my-theme-js', get_template_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_cssjs' );

function my_theme_remove_headlinks() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'start_post_rel_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link' );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
//add_action( 'init', 'my_theme_remove_headlinks' );


function wp_remove_scripts() {
    if ( !is_page( 'contactame' ) ) {
        wp_dequeue_style( 'contact-form-7' );
        wp_deregister_style( 'contact-form-7' );
        
        wp_dequeue_style( 'cf7md_roboto' );
        wp_deregister_style( 'cf7md_roboto' );        

        wp_dequeue_style( 'cf7-material-design' );
        wp_deregister_style( 'cf7-material-design' );             

        wp_dequeue_style( 'material-style' );
        wp_deregister_style( 'material-style' );             

        wp_deregister_script( 'contact-form-7' ); 
        wp_deregister_script( 'autosize' ); 
        wp_deregister_script( 'cf7-material-design' ); 
    }
    if ( is_front_page()  ) {
        wp_dequeue_style( 'wp-block-library' );
    }
}
//add_action( 'wp_enqueue_scripts', 'wp_remove_scripts' );


function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'Cookiebot' ) ) return $url;
        return "$url' defer ";

    if ( strpos( $url, 'my-theme-js-js' ) ) return $url;
        return "$url' async ";
    
}
//add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

add_filter( 'generate_google_font_display', function() {
    return 'swap';
} );

function my_theme_excerpt($length) {
    return 25;
}
add_filter( 'excerpt_length', 'my_theme_excerpt' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
//$classes[] = $post->post_type . '-' . $post->post_name;
$classes[] = $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

add_action('wp_head', function() {
    echo '<script type="text/javascript"> if (typeof(wp) == "undefined") { window.wp = { i18n: { setLocaleData: (function() { return false; })} }; } </script>'; });
    