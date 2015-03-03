<?php
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-wp-config.php')) {
	include(dirname(__FILE__) . '/local-wp-config.php');
}

/* MySQL settings */
if (!defined('DB_NAME')) {
	define('DB_NAME', '');
}
if (!defined('DB_USER')) {
	define('DB_USER', '');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', '');
}
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/* MySQL database table prefix. */
$table_prefix = 'wp_prefix_';

/* FTP */
if (!defined('FTP_USER')) {
    define( 'FTP_USER', 'ftp-user' );
}
if (!defined('FTP_PASS')) {
    define( 'FTP_PASS', 'ftp-pw' );
}
if (!defined('FTP_HOST')) {
    define( 'FTP_HOST', 'ftp-host' );
}
if (!defined('FTP_SSL')) {
    define( 'FTP_SSL', false );
}

/* Authentication Unique Keys and Salts. */
if (!defined('AUTH_KEY')) {
    define('AUTH_KEY', '');
}
if (!defined('SECURE_AUTH_KEY')) {
    define('SECURE_AUTH_KEY', '');
}
if (!defined('LOGGED_IN_KEY')) {
    define('LOGGED_IN_KEY', '');
}
if (!defined('NONCE_KEY')) {
    define('NONCE_KEY', '');
}
if (!defined('AUTH_SALT')) {
    define('AUTH_SALT', '');
}
if (!defined('SECURE_AUTH_SALT')) {
    define('SECURE_AUTH_SALT', '');
}
if (!defined('LOGGED_IN_SALT')) {
    define('LOGGED_IN_SALT', '');
}
if (!defined('NONCE_SALT')) {
    define('NONCE_SALT', '');
}

/* Custom WordPress URL. */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp/');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
    define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp/wp-content' );
}
if (!defined('UPLOADS')) {
    define('UPLOADS', dirname(__FILE__) . '/wp/wp-content/uploads' );
}
if (!defined('WP_PLUGIN_URL')) {
    define('WP_PLUGIN_URL', dirname(__FILE__) . '/wp/wp-content/plugins' );
}

/* WordPress Localized Language. */
if (!defined('WPLANG')) {
    define( 'WPLANG', 'de_DE' );
}

/* Specify maximum number of Revisions. */
if (!defined('WP_POST_REVISIONS')) {
    define( 'WP_POST_REVISIONS', '25' );
}

/* Media Trash. */
if (!defined('MEDIA_TRASH')) {
    define( 'MEDIA_TRASH', true );
}

/* Multisite. */
if (!defined('WP_ALLOW_MULTISITE')) {
    define( 'WP_ALLOW_MULTISITE', false );
}

/* WordPress debug mode for developers. */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}
if (!defined('WP_DEBUG_LOG')) {
	define('WP_DEBUG_LOG', false);
}
if (!defined('WP_DEBUG_DISPLAY')) {
	define('WP_DEBUG_DISPLAY', false);
}
if (!defined('SCRIPT_DEBUG')) {
	define('SCRIPT_DEBUG', false);
}
if (!defined('SAVEQUERIES')) {
	define('SAVEQUERIES', false);
}

/* WordPress Cache */
if (!defined('WP_CACHE')) {
	define('WP_CACHE', true);
}

/* Compression */
if (!defined('COMPRESS_CSS')) {
    define( 'COMPRESS_CSS', true );
}
if (!defined('COMPRESS_SCRIPTS')) {
    define( 'COMPRESS_SCRIPTS', true );
}
if (!defined('CONCATENATE_SCRIPTS')) {
    define( 'CONCATENATE_SCRIPTS', true );
}
if (!defined('ENFORCE_GZIP')) {
    define( 'ENFORCE_GZIP', true );
}

/* Updates */
if (!defined('WP_AUTO_UPDATE_CORE')) {
    define( 'WP_AUTO_UPDATE_CORE', 'minor' );
}
if (!defined('DISALLOW_FILE_MODS')) {
    define( 'DISALLOW_FILE_MODS', false );
}
if (!defined('DISALLOW_FILE_EDIT')) {
    define( 'DISALLOW_FILE_EDIT', false );
}

/* CRON */
if (!defined('DISABLE_WP_CRON')) {
    define( 'DISABLE_WP_CRON',      'false' );
}
if (!defined('ALTERNATE_WP_CRON')) {
    define( 'ALTERNATE_WP_CRON',    'false' );
}

/* PHP Memory */
if (!defined('WP_MEMORY_LIMIT')) {
    define( 'WP_MEMORY_LIMIT', '30M' );
}
if (!defined('WP_MAX_MEMORY_LIMIT')) {
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
}

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
