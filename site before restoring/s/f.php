<?php

$static_dir = dirname(__FILE__);
$root = '/home/osteopa2/public_html/';
$plugin_root = $root . '/wp-content/plugins/psn-pagespeed-ninja';

define('RESSIO_STATICDIR', $static_dir);

require $plugin_root . '/ress/fetch.php';
