<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 ">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="l-container" id="top">

    <header class="l-header b-header">
      <div class="l-inner">
        <div class="l-wrapper">
          <!-- logo -->
          <h1 class="logo">
            <a href="<?php echo site_url(); ?>/"></a>
          </h1>
          <!-- Global Navigation -->

          <?php
            wp_nav_menu( array(
              'theme_location'  =>'header_menu',
              'container'       => 'nav',
              'container_class' => 'global-nav',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      =>'<ul class="main-menu">%3$s</ul>',
              'walker'          => new custom_walker_nav_menu
            ));
          ?>

        </div>
      </div>
    </header>
