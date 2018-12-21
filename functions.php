<?php

add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

function rebreedPress_scripts() {
  // CSS
  wp_enqueue_style( 'slick-stylesheet', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
  wp_enqueue_style( 'slick-theme-stylesheet', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );

  wp_enqueue_style( 'main-stylesheet', get_template_directory_uri()."/dist/assets/css/app.css", array(), '1.0.1' );
  // JS
  wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-1.11.0.min.js', array(), '1.11.0', true );
  // JS - SLICK
  wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', true );
}
add_action( 'wp_enqueue_scripts', 'rebreedPress_scripts' );

/** Various clean up functions */
require_once( 'library/cleanup.php' );
