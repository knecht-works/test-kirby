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
  <link rel="icon" type="image/png" href="https://knecht.works/styleguide/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="https://knecht.works/styleguide/favicon/favicon.svg" />
  <link rel="shortcut icon" href="https://knecht.works/styleguide/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="https://knecht.works/styleguide/favicon/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="Knecht" />
  <link rel="manifest" href="https://knecht.works/styleguide/favicon/site.webmanifest" />
  <meta name="robots" content="noindex,follow" />
</head>
<body class="kit-body kit-light">
  <main class="kit-container kit-stack">
