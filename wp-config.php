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
define( 'DB_NAME', 'wp_bc_wf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(Hbuvnm8acAt<vx?nR;<Ypw/AOMQlls`K?=~]Y2`esQltfVOvvE>&4VKI|JhatRU' );
define( 'SECURE_AUTH_KEY',  'UubJcoB)?xC=>Qp0:PU$UI+R,rlk VvO*{qLt5xCE)KI][bU$TcWn0 vu)=D^8d[' );
define( 'LOGGED_IN_KEY',    '<&dL7RHbH=11A=H[Cop|,Ke+.MgQ|K7LA5#&ONM-4bs%[R=/nU<x:hk:><a?`jo)' );
define( 'NONCE_KEY',        'Zunx1,=z0DlIGv,aCdkl,p1_3FcV<m[P@dhfAIDTPIp!<)Cc_uC&j?c[D5/9F=53' );
define( 'AUTH_SALT',        'r_ guCn.qmpQN.kSQU@*AWi!]{OLXHu{TSqHehosrQpC`&A54<RKynM_tB=L;)Z!' );
define( 'SECURE_AUTH_SALT', '!IqGiG.ymEL>IJ=,;t)1<wH9V9yh{ib)0+~M/7eLZ}o&)znjQZIY/r$]ep]M}&~|' );
define( 'LOGGED_IN_SALT',   'c?Yx%]=72N2ezCbW*HVfNr]d8W@8gno((+vEX_?`^iR|N+Pu.L}Zy9Xk+er6:!GP' );
define( 'NONCE_SALT',       '9P^?#F+GRht|/|lZ@TLXCbV>Tfs>IJdS)!E@}&Ag?76Uh@)~5R5TZs$`l,B#5SgA' );

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
define( 'WP_DEBUG', true );
define('WP_MEMORY_LIMIT', '64M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
