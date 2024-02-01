<?php

if (! isset($_GET["token"])) {
    die("token missing");
}

$is_live = false;
if (isset($_GET["live"])) {
    $is_live = true;
}

$env_tok = getenv("CWTOKEN");
if ($env_tok == null) {
    die("environment token is missing");
}

$tok = $_GET['token'];

if ($tok !== $env_tok) {
    die("token declined");
}

shell_exec("COMPOSER_HOME=/usr/bin cd /var/www/static-site-generator && git fetch origin && git checkout origin/master && /usr/bin/composer install -n");

if ($is_live) {
    shell_exec("cd /var/www/cat-web && git fetch origin && git checkout $(git describe --tags $(git rev-list --tags --max-count=1))");
} else {
    shell_exec("cd /var/www/cat-web && git fetch origin && git checkout origin/master");
}

shell_exec("php /var/www/static-site-generator/generate.php /var/www/cat-web /var/www/html");

if ($is_live) {
    shell_exec("ln -s /var/www/video/* /var/www/html/video/");
}

