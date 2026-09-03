<div align="center">

  <img src="https://knecht.works/styleguide/favicon/favicon.svg" alt="Knecht" width="112" height="112">

# test-kirby

<p>
  <img src="https://img.shields.io/badge/Kirby-5-000000?logo=kirby&logoColor=white" alt="Kirby 5">
  <img src="https://img.shields.io/badge/PHP-8.4-777BB4?logo=php&logoColor=white" alt="PHP 8.4">
  <img src="https://img.shields.io/badge/DDEV-nginx--fpm-02A8E2?logo=docker&logoColor=white" alt="DDEV · nginx-fpm">
  <img src="https://img.shields.io/badge/Knecht-e2e%20fixture-b7f8a2?labelColor=09090b" alt="Knecht e2e fixture">
  <img src="https://img.shields.io/badge/license-MIT-blue" alt="MIT License">
</p>

</div>

A [DDEV](https://ddev.com)-based Kirby 5 project used as an end-to-end test fixture for [Knecht](https://knecht.works). Kirby is file-based, so the project runs without a database container (`omit_containers: [db]`) and uses the public-folder setup: only `public/` is served, while `content/`, `site/`, `storage/` and `vendor/` live above the docroot. It ships a home page built with the Knecht Styleguide Kit, a second page to click through to, and a committed Panel account, so Knecht can boot the environment from a bare clone, hit the site, and log into the Panel.

## Setup

Requires [DDEV](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/) and a Docker provider (Docker, OrbStack, or Colima).

```bash
ddev start                      # boot the containers
ddev composer install           # install Kirby into vendor/
```

Kirby runs unlicensed in local development (it is licensed separately from this MIT-licensed fixture; see [getkirby.com/license](https://getkirby.com/license)). The Panel account is tracked in `storage/accounts/` on purpose:

| Field    | Value                 |
| -------- | --------------------- |
| Email    | `admin@knecht.works`  |
| Password | `admin123`    |
| Role     | `admin`               |

`site/config/config.php` sets `'url' => '*'`, so Kirby derives its base URL from the request including `X-Forwarded-Host` / `X-Forwarded-Proto`. Nothing is bound to a hostname, which lets the fixture run behind Knecht's reverse proxy under any host.

## URLs

`ddev launch` opens the site in your browser.

| Role   | URL                                     |
| ------ | --------------------------------------- |
| Site   | `https://test-kirby.ddev.site`          |
| About  | `https://test-kirby.ddev.site/about`    |
| Panel  | `https://test-kirby.ddev.site/panel`    |
