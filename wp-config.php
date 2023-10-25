<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'G|MI zF47~om0e2(0:Ap?ttENJTPQvE%y}OJlQP{LRiiM]/V?YEwIgR:C*!hKRo|' );
define( 'SECURE_AUTH_KEY',  ':J4=vqFA|ed[>$U>GV:FDa5/G2y(Ar2vB[CBLKf$myE_y,OZ4W1wd[hFYq@ZN$un' );
define( 'LOGGED_IN_KEY',    '>~i)n50;p:/V8{rS.7-YYWp%.2RaJK=t5$|.b$ d;:5d Y`o;]C#UYI_[P=km_CS' );
define( 'NONCE_KEY',        'gbFD)_8e9])b6r~aD)x(o}:U0ICJ;vg_(~l8ZHL=oDxIXXCGZd=5OTB~5~R >3TX' );
define( 'AUTH_SALT',        '4sqIH9j~hlC+[!P).8+1w?klU79Jml%qH$`XD}=(O7n_9l_z^8@Nrc!WalN@ICaa' );
define( 'SECURE_AUTH_SALT', 'r-l6eR->]IrcG*j)Z}efQ<mFXCHW_$HK:kc<H+{=xov7Ldk%RR,D0&+eo4I0ZK!?' );
define( 'LOGGED_IN_SALT',   '|6auP X<w(/yqR=O=VA}S>$BDPbIo2Ymfgi^kE6g`lq*HEHn8w02V[*V9n[/h*7(' );
define( 'NONCE_SALT',       ';oF-awyShwk,4A]uLMoxjF ;yK}Zsz9QK691wu%|]5ea/g/ABF[IR9qiGa|7?G`!' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
