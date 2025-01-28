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
define( 'DB_NAME', 'd132387sd582093' );

/** Database username */
define( 'DB_USER', 'd132387sa529682' );

/** Database password */
define( 'DB_PASSWORD', '37ahrtQ4GK7H97S3Q' );

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
define('AUTH_KEY',         'WQtkqtEyQpRCNMnAW8H1Mg8SF3a2iqL6e9HA4rYGFXNEHNoSZeeZzlVdMJigCdle');
define('SECURE_AUTH_KEY',  'pE886fQhooVO0HMEkBlOSl1CbCa8npnFqlh9YnKHMj7eKib2lpKdvB0XITSmNsGM');
define('LOGGED_IN_KEY',    'N0dxl6aJ4PnxKhXSVIcshzw92mZGd3Y1E9qmAoAqKZu6Qqlq1D1KwNv0G6jcdbYw');
define('NONCE_KEY',        'wBvVcTOH3KcxRrTlerZMuZZseaNPspKhNo0dr2Z5AZW23QomW985guIoui5KYLLD');
define('AUTH_SALT',        'wr2rcMWxHyJPFE9gJYN5OSGn20QQ5JlyM7nK7h5LzIkHZiqGf5VNbBvjyArx6UJl');
define('SECURE_AUTH_SALT', 'VPy1nFdCYMIYCBbUGn0Qe5EzBGyWetLWNKAmmu9aLN3wMLGwTop4aChXNq6unXbm');
define('LOGGED_IN_SALT',   'ZdHnSuEPaR7rrKHxcsPsLXvl1gHr9lACap0GoZV8lsRwOAI5grI4jkHQyPUD58sx');
define('NONCE_SALT',       'GP7utQ9WZjYifhoXWR7BrholZfwd1MpaQ38flB0uInwc1Sai05CI1WnRLX40mnHP');

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
$table_prefix = 'tnrc_';

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
