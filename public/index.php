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
        'index'    => __DIR__,
        'content'  => $base . '/content',
        'site'     => $base . '/site',
        'accounts' => $storage . '/accounts',
        'cache'    => $storage . '/cache',
        'sessions' => $storage . '/sessions',
    ],
]);

echo $kirby->render();
