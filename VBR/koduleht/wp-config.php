<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define( 'ITSEC_ENCRYPTION_KEY', 'RihaSyxvUy1bdmp7UWQtM2hPX28kQVlWI19SYC86XlhARWN+RVBbTVNQc1AlI2csYWF9XWl7fX1zJEteOTp5Jg==' );

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
define( 'DB_NAME', 'd132387sd583382' );

/** Database username */
define( 'DB_USER', 'd132387sa530934' );

/** Database password */
define( 'DB_PASSWORD', '3RgAMbLrEF7s37572' );

/** Database hostname */
define( 'DB_HOST', 'd132387.mysql.zonevs.eu' );

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
define('AUTH_KEY',         '3YAkkOcWCqdkE5qKm7pmk5ptfTK094v2HvT0zgXG0IcHeUmdqtJA1kfRdPXLCzNX');
define('SECURE_AUTH_KEY',  '7INLKmGYETJ948u8YIm4gDcYfTNcQiVmPdpW4CB2OHriSeRvoY4Chqae5etNOO2J');
define('LOGGED_IN_KEY',    'zwIpIUr4i9bUIpH5w3gMjHyJupmXKuw6H6reo6lE4Ff6TvgJbppaNShb8SI5WTWT');
define('NONCE_KEY',        '1ZyuLJRXwnPkgLu5WAH70fqREGzPKFbSGWRVWZwdtHLVzDFnzWL1Zg4zfvXV9PPC');
define('AUTH_SALT',        'C94SVbrw4zpPYjPxM0rSBZ5LmYuVjP9mHtC7GgyUC14bZhuWgjEagks5QlruXrwr');
define('SECURE_AUTH_SALT', 'dOQisU0Ak3cu9qbah0ERESJdvYY1MmdEaJ2nRXXKtzrnzPdR13kxF9jcgjrTRIjS');
define('LOGGED_IN_SALT',   'RVffdwIrD1tDTE1jhdMpf8kX7vclvtwlKexfvTZOahpaxexxswRz3k1TgyhPFICS');
define('NONCE_SALT',       'd3oafsGNtbxqWs1d16tehf3VudFBowyIWrN8i3IsoThvHF196QQrN6AQ0ykkDqNf');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
$table_prefix = 'tykz_';

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
