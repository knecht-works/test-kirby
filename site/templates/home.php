<?php
/** @var \Kirby\Cms\Page $page */

$host = $kirby->request()->url()->host() ?: 'unknown';
$now  = date('H:i:s');

$env = [
  'Host'          => $host,
  'PHP version'   => PHP_VERSION,
  'Kirby version' => $kirby->version(),
  'Server time'   => date('Y-m-d H:i:s'),
  'Scheme'        => $kirby->request()->url()->scheme() ?: 'http',
];

snippet('header');
?>

    <span class="kit-badge kit-mb-4">kirby-test-e2e</span>

    <h1>Kirby Fixture <span class="kit-accent-text">Knecht.works</span></h1>

    <p class="kit-muted">
      <?= $page->intro()->esc() ?> Served from
      <code class="kit-code"><?= esc($host) ?></code> at <?= $now ?>.
    </p>

    <div class="kit-stack">
      <a class="kit-button kit-button--solid" href="https://knecht.works">Go to knecht.works</a>
      <button class="kit-button" data-kit-toast="Up and running! 🚀">Show toast</button>
      <a class="kit-button kit-button--ghost" href="https://github.com/knecht-works/test-kirby">Go to Repo</a>
    </div>

    <section class="kit-card kit-stack kit-mt-8">
      <dl class="kit-dl">
        <?php foreach ($env as $label => $value): ?>
        <div class="kit-dl-row">
          <dt><?= esc($label) ?></dt>
          <dd><?= esc((string) $value) ?></dd>
        </div>
        <?php endforeach; ?>
      </dl>
    </section>

    <p class="kit-muted">
      <?php foreach ($site->children()->listed()->not($page) as $child): ?>
      <a href="<?= $child->url() ?>"><?= $child->title()->esc() ?></a> ·
      <?php endforeach; ?>
      <a href="<?= $kirby->url('panel') ?>">Panel</a>
    </p>

<?php snippet('footer') ?>
