<?php
/* MySQL settings */
define('DB_NAME',           '');
define('DB_USER',           '');
define('DB_PASSWORD',       '');
define('DB_HOST',           'localhost');
define('DB_CHARSET',        'utf8');
define('DB_COLLATE',        '');

/* MySQL database table prefix. */
$table_prefix = 'wp_prefix_';

/* FTP */
define( 'FTP_USER',         '' );
define( 'FTP_PASS',         '' );
define( 'FTP_HOST',         '' );
define( 'FTP_SSL',          false );

/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',          '');
define('SECURE_AUTH_KEY',   '');
define('LOGGED_IN_KEY',     '');
define('NONCE_KEY',         '');
define('AUTH_SALT',         '');
define('SECURE_AUTH_SALT',  '');
define('LOGGED_IN_SALT',    '');
define('NONCE_SALT',            '');

/* Custom WordPress URL. */
define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . '/wp/');
define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME'] . '/');
define( 'WP_CONTENT_URL',   '/wp/wp-content/' );
define( 'UPLOADS',          '/wp/wp-content/uploads/' );
define( 'WP_PLUGIN_URL',    '/wp/wp-content/plugins/' );

/* WordPress Localized Language. */
    define( 'WPLANG', 'de_DE' );

/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '25' );

/* Media Trash. */
define( 'MEDIA_TRASH', true );

/* Multisite. */
define( 'WP_ALLOW_MULTISITE', false );

/* WordPress debug mode for developers. */
define('WP_DEBUG',          true);
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  true);
define('SCRIPT_DEBUG',      true);
define('SAVEQUERIES',       false);

/* WordPress Cache */
define('WP_CACHE', false);

/* Compression */
define( 'COMPRESS_CSS',         false );
define( 'COMPRESS_SCRIPTS',     false );
define( 'CONCATENATE_SCRIPTS',  false );
define( 'ENFORCE_GZIP',         false );

/* Updates */
define( 'WP_AUTO_UPDATE_CORE',  'minor' );
define( 'DISALLOW_FILE_MODS',   false );
define( 'DISALLOW_FILE_EDIT',   false );

/* CRON */
define( 'DISABLE_WP_CRON',      'false' );
define( 'ALTERNATE_WP_CRON',    'false' );

/* PHP Memory */
define( 'WP_MEMORY_LIMIT',      '30M' );
define( 'WP_MAX_MEMORY_LIMIT',  '256M' );

/* Absolute path to the WordPress directory. */
define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
