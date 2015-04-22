<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/** Register The Auto Loader. */
require __DIR__.'/../bootstrap/autoload.php';

/** Load config variables */

$configdir = env('WP_ENV') ? 'config/' : 'config/local/';

$database = require_once $configdir . 'database.php';
$theme = require_once 'config/theme.php';
$app = require_once 'config/app.php';


//** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $database['name']);

/** MySQL database username. */
define('DB_USER', $database['user']);

/** MySQL database password. */
define('DB_PASSWORD', $database['password']);

/** MySQL hostname. */
define('DB_HOST', $database['host']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', $database['charset']);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', $database['collate']);

/** Custom content directory. */
define('WP_CONTENT_DIR', __DIR__.'/wp-content');
define('WP_CONTENT_URL', 'http://'.$_SERVER['HTTP_HOST'] . '/wp-content');

/** Set the trash to less days to optimize WordPress. */
define('EMPTY_TRASH_DAYS', 7);

/** Set the default WordPress theme. */
define('WP_DEFAULT_THEME', $theme['slug']);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'secret');
define('SECURE_AUTH_KEY', 'secret');
define('LOGGED_IN_KEY', 'secret');
define('NONCE_KEY', 'secret');
define('AUTH_SALT', 'secret');
define('SECURE_AUTH_SALT', 'secret');
define('LOGGED_IN_SALT', 'secret');
define('NONCE_SALT', 'secret');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', $app['debug']);
define('WP_DEBUG_DISPLAY', $app['debug']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/wordpress');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
