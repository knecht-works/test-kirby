<?php
/** @var \Kirby\Cms\Page $page */
snippet('header');
?>

    <span class="kit-badge kit-mb-4">kirby-test-e2e</span>

    <h1><?= $page->title()->esc() ?></h1>

    <div class="kit-stack">
      <?= $page->text()->kt() ?>
    </div>

    <p class="kit-muted kit-mt-8">
      <a class="kit-button kit-button--ghost" href="<?= $site->url() ?>">Back to home</a>
    </p>

<?php snippet('footer') ?>
