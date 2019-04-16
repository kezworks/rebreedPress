<?php
/**
 * Generate breadcrumb
 *
 * @package rebreePress
 * @since rebreedPress 1.1.0
 */

function rebreedPress_widgets_init() {

  register_sidebar(
    array(
      'id'            => 'sidebar-widgets',
      'name'          => 'サイドバー',
      'before_widget' => '',
      'after_widget' => '',
      'before_title'  => '<h6>',
      'after_title'   => '</h6>',
    )
  );

}
add_action( 'widgets_init', 'rebreedPress_widgets_init' );
