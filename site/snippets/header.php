<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $page->title()->esc() ?> | Knecht</title>
  <link rel="stylesheet" href="https://knecht.works/styleguide/kit.css">
  <script src="https://knecht.works/styleguide/kit.js" defer></script>
  <?= vite()->css('src/css/app.css') ?>
  <?= vite()->js('src/js/app.js') ?>
  <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
  <meta name="robots" content="noindex,follow" />
</head>
<body class="kit-body kit-light">
  <main class="kit-container kit-stack">
