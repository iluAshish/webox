<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'yulyeite_WPMOJ');

/** Database username */
define('DB_USER', 'yulyeite_WPMOJ');

/** Database password */
define('DB_PASSWORD', '!bnnS7b>T@$&s6fkd');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '4253c41217ade6e242556ccc73b8ea527c5ee424fd996fcee0b7e8b2d7447e0c');
define('SECURE_AUTH_KEY', 'af848e45ac119adeb2ec5574f06f02fc008406fe090e13e778f3a94839600a37');
define('LOGGED_IN_KEY', 'c5a563cc8a33b8b9b72355580423695a551eca4cde6e805b09ddf16235a12a92');
define('NONCE_KEY', '828e950c314ff18cac5cf03c817f90776b36e990b0b58e43b7aa3db1bc0a5d2b');
define('AUTH_SALT', 'defdb333b438793bf0fc2760274c2577d04cb7c6638c4bc484b56b7b0d99ce7e');
define('SECURE_AUTH_SALT', '185b69716ee11d4f6ca09498f8743f261e55b08259418c8c4ee1492a07445fe2');
define('LOGGED_IN_SALT', '0fe90663143ba4c1ab166c96087b84ff0f884ed17b5c355525cc1b0f1bb15d74');
define('NONCE_SALT', '0aa9e45fbd1f94b0563f414caba89a1deb0ac4e29fba3c1a4603b711b024b15f');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'lzp_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
