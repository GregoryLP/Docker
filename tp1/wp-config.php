<?php
define('DB_NAME', 'projetDocker');
define('DB_USER', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'db');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);
define('WP_ALLOW_REPAIR', false);

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
require_once(ABSPATH . 'wp-settings.php');
