<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kristina');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysqlyy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mx8kHwKvM264XUxKa4zFyUfIadH9OI4r3gUnFEv3rXlSvLvPviV7Hyi043SgG1rJ');
define('SECURE_AUTH_KEY',  '9QfXFi9c87X1eOIagPWJB30aghecws2QLT2uqiObtYHINjJZJWOq1scFW2iDAbOt');
define('LOGGED_IN_KEY',    '89Nv9W1dX5bPQBhS6tAEDlG0vw98mJWmk37ET117S87jsYKDy8VMbC8898aXXV6w');
define('NONCE_KEY',        'ejZoOtanlWO3ADJg4pwIOnHQn0uHbXs9cnZwzrOAIAUE9mByVFiwjFyY0XzV2jT1');
define('AUTH_SALT',        'm7ywuNqeXHpc0163lETSken8GdsSqPUMMvUaYRHUTOtSHT1bnHJs6ekWKkwecQ8G');
define('SECURE_AUTH_SALT', 'O5K9dPbRUpqdb5O4XlT8BWPxH1IpiWYeRTIn9GaeiqXs25VpMjaQBwlsxDNm4Fqu');
define('LOGGED_IN_SALT',   'WtWexeMO0hmHASmaf8jev5hawRDt4l4IlkLk8tGPUN3yxn10L0HpLAShQpJ9gvg2');
define('NONCE_SALT',       'Cq5oorafdkkO2jP8TQdKPf2UNgwUQjDb889vicQrbpRfc4bbGkbqWTgdefHrNXw4');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
