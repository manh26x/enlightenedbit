<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u686804087_RlJU8' );

/** Database username */
define( 'DB_USER', 'u686804087_sDB4P' );

/** Database password */
define( 'DB_PASSWORD', 'pkKY4B4k7e' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'pdn(A|!vS5tX6HQd}YYNBQ+*JuqWpwEWB!q&c@QI }[4z~Jmt?JlKj3.7J$LMshH' );
define( 'SECURE_AUTH_KEY',   '-rLwN3XoP)_xKEK#y&_V;-sb3SNL3|i#z&[KgW1HV;5~T)0L/no/[E #1B$D,0X^' );
define( 'LOGGED_IN_KEY',     '%=E%)uf-2C?6_Q0!O?wg|n;_Lc6z&1-X/[zKEAwM>>U1xDOB(iO7}c5xu&Ti%Tid' );
define( 'NONCE_KEY',         '1Tf>SG5~#-MHVy}AO`5GnEvf*Y{)pq5fPgir@@w}TZIJbC?*p7@GWzb]l&H=yD39' );
define( 'AUTH_SALT',         '3C-{VLFOLF,ZIMi#^rBqnq}<*zd-5Q|xJ{640CE&Ki57E;(>`6o8G4avwfvh:Unv' );
define( 'SECURE_AUTH_SALT',  '4:sc*JBWIPxv:)gmF([ #PgDs}.kLK!luV[w[Q>VNO,f[rj`6#2XSG *^re$n.PZ' );
define( 'LOGGED_IN_SALT',    'CGgN;RM.dy~B1xjb.IMfP*QYB!bq`p-deM7k@Or^>cEY.z};qR_L[J8(T|^D3bKf' );
define( 'NONCE_SALT',        '5|0#?&6[S~{L~zzWSM*#U5N[omR{Usr|vUrgF]m|@ay4sQ]~w|+}_BQG2dPm1yo8' );
define( 'WP_CACHE_KEY_SALT', 'Q1j=,_!/,Y<hw$MO~Jme5N)|4.Fg!};Yk`p3?Q|-Wc:c,_tlp{k>[MVxoLfbBClB' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
