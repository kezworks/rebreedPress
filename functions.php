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

/** クリーンアップ */
require_once( 'library/cleanup.php' );

/** パンくずリスト生成 */
require_once( 'library/breadcrumbs.php' );

/** ページネーション生成 */
require_once( 'library/pagenation.php' );

/** ウィジェット */
require_once( 'library/widget.php' );


/** メニュー */
register_nav_menu('header_menu', 'ヘッダー');
register_nav_menu('footer_menu', 'フッター');


/** ナビゲーション用カスタムウォーカー */
class custom_walker_nav_menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= '<div class="sub-menu-wrapper"><ul class="sub-menu">';
    }
    function end_lvl(&$output, $depth = 0, $args = array()) {
        $output .= '</ul></div>';
    }
}
