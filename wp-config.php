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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'natanael' );

/** Database username */
define( 'DB_USER', 'diaz' );

/** Database password */
define( 'DB_PASSWORD', 'diaz' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Pgf{_*)2H/-4)Rr=Wk 8UZD$Cbe!p`W==q`-g{1~uJ.XUYl_|[DTJd<^O1/G7onj' );
define( 'SECURE_AUTH_KEY',  '@& I~XcV3>l^5(X-G}Lm[F$K-~iSa1mM/X++cNRfnge,d<;ER< iQA/*Qj(dBPTN' );
define( 'LOGGED_IN_KEY',    'U%%C>i!It@6PU)Yf/-?SAABuQT!xmGx 67-KD1dE7bR9VG`jLHxDRLPtrvC8kI<g' );
define( 'NONCE_KEY',        '1teoT9=H5A$:HPCJfT1<.ODPPl&HKpaE_JqN6Mxr+W!zU,E Vd5xqRfW!,o|6+vy' );
define( 'AUTH_SALT',        'tz7 541d=@HZCb0)irjFhc KD4p$7D3HztWw(74s4;ym%m@KD7]bfC}P7dr0Ai/}' );
define( 'SECURE_AUTH_SALT', 'hk!^1/]leey^gb~Tn]07LQ9p24Y+4WC;>L+*C6X9Ag=^/jcC<@29XtCco*l?JRTW' );
define( 'LOGGED_IN_SALT',   'xG-^2>L)=)6 ]W )}a7zjMk/{uYF-i%eH<U+fi.JW|z3wE6lNJp8z/h05jM*c1ib' );
define( 'NONCE_SALT',       'Fu2)+#&}$6#-zbI74$HQAZ3d8@A<==-S, 3U+kZcssx|W?}$d5Y4(cd9djvL|:z@' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
