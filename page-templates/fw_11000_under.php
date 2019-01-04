<?php
/*
Template Name: FW - 11000 下層ページ
*/
get_header(); ?>

<main class="l-main b-under">

  <?php get_template_part('page-templates/parts/mv'); ?>
  <?php get_template_part('page-templates/parts/breadcrumbs'); ?>

  <!-- サンプル -->
  <article class="b-under-sample l-article">
    <div class="l-inner">
      <header class="m-article-header">
        <h1 class="title">サンプル</h1>
        <p class="sub">Sample</p>
      </header>

      <div class="text">
        <p class="heading">
          見出し
        </p>
        <div class="desc is-mobile-nowrap">
          <p class="m-text">吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。</p>

        </div>

      </div>

    </div>
  </article>

</main>

<?php get_footer();
