<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>
    <?php snippet('herobook') ?>
    
    <section class="articles-section wrap wide">
      
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="articles-section-more"><a href="<?= $page->children('blog')?>" class="btn">show all &hellip;</a></p>
      
    </section>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
    
    <section class="about-section wrap wide">
      <!--miniature "about" Brian section -->
    </section>

  </main>

<?php snippet('footer') ?>