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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/phpmyadmin' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dflhskjlfhkljdhfshfkdsl9085940j5498f0j548t05489yu450tu45089t4u' );
define( 'SECURE_AUTH_KEY',  'jt09458jt4905jt49805jt45908jt458hg45g9j045f845fk45890fj458f450' );
define( 'LOGGED_IN_KEY',    '459f459pfi45fmdkmgdlknbdklbntdjlhieprhtuirepmf;eroijtrefmreofe' );
define( 'NONCE_KEY',        'frei9fk3049f4598fj458f94058408964k45=fk[]pe]rowepr[oewp[]f]we[' );
define( 'AUTH_SALT',        ')_(#)_($#DO_Dleod=39fk309-fk34-0f9k349-0ffop[fekrf09rekf03=490' );
define( 'SECURE_AUTH_SALT', ')($JFJ$F_F*jd9f-j34-fj-*Jfofjerpferjoifjireojfoeirjfoiejfeorif' );
define( 'LOGGED_IN_SALT',   'MKLMDWKMD0DM430DM3943904M09fm4309fm3409fm3fm30f3f0000994994--0' );
define( 'NONCE_SALT',       'L;M009KCKIFKF40FK3409K009kk09)K()K)(K()K)(KKKKKKKOKOPPOKPOKPOK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
