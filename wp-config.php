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
define( 'DB_NAME', 'greenproduct' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'X7{YK8vZ*XTC&Uuc:2%=3GkwBw27Cw2$ha^5!<4`(!1^8NpYnX2$tI:OZP1$(%WF' );
define( 'SECURE_AUTH_KEY',  'UH&&53~Re5n+&2*m4OG.3<$$ wH;k(g [zmxI|#I?jh7Wfxue8qrc22yi|k.}+fa' );
define( 'LOGGED_IN_KEY',    'VQY6A%O9%{heO/isF}ojb!8mkU>KG2A.,|xYA6[he_&tW;YBY*CpB}.,hLU, uj!' );
define( 'NONCE_KEY',        'C vTU^8m8~WmpK#Ay$XkRLTEx2Dm8]P{5nl^*D>6p%~`nWj&mB_*#Mj4h[#OByM)' );
define( 'AUTH_SALT',        'sZq(R?XE[p)Du_C)3-)p0fy6G-Z&C. $r|+I%`Cv-ky5,zjhn.Rl{`6c?R:m.CA/' );
define( 'SECURE_AUTH_SALT', 'e~b<Us,3EQqg~d_.21^tX*k%B,{M1O>|4O8-Snk@OILAWuc/*TyWJ]zP+bC.{VNW' );
define( 'LOGGED_IN_SALT',   'Vp2hfjZbceK ?6`_Z6>F6f4C8z|p1A7f1Yuyp]ViVD<vU?A{?N~c-9]5-k_~3ViZ' );
define( 'NONCE_SALT',       '}b&1;{.LNfXkS8p)bVj`J>x<<pUKJO}`+$|y<1[-l[!UEDV}e#<^b|-}^RAq{P0J' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
