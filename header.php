<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

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
          <nav class="global-nav">
            <ul>
              <li><a href="<?php echo site_url(); ?>/">メニュー1</a></li>
              <li><a href="<?php echo site_url(); ?>/">メニュー2</a></li>
              <li><a href="<?php echo site_url(); ?>/">メニュー3</a></li>
              <li><a href="<?php echo site_url(); ?>/">メニュー4</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
