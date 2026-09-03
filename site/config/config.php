<?php

/**
 * Kirby configuration for the Knecht e2e fixture.
 *
 * `url => '*'` makes Kirby build its base URL from the request, including
 * the `X-Forwarded-Host` / `X-Forwarded-Proto` headers set by reverse
 * proxies (DDEV's router, Knecht's preview proxy). No host is hard-coded,
 * so the fixture works under whatever hostname it gets booted on.
 * Only do this in trusted dev setups: it means host headers are not
 * validated against an allow list.
 */

return [
    'debug' => true,
    'url'   => '*',
    'panel' => [
        'install' => true,
    ],
];
