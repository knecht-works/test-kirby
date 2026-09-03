<?php

/**
 * Kirby front controller for the public docroot setup.
 *
 * Everything except this file, `assets/` and the generated `media/`
 * folder lives one level above the docroot, so the web server can
 * never serve content, site code, accounts or the cache directly.
 */

$base    = dirname(__DIR__);
$storage = $base . '/storage';

require $base . '/vendor/autoload.php';

$kirby = new Kirby([
    'roots' => [
        // The project root above the docroot; kirby-vite resolves the Vite
        // outDir (public/dist) and its .dev marker against it.
        'base'     => $base,
        'index'    => __DIR__,
        'content'  => $base . '/content',
        'site'     => $base . '/site',
        'accounts' => $storage . '/accounts',
        'cache'    => $storage . '/cache',
        'sessions' => $storage . '/sessions',
    ],
]);

echo $kirby->render();
