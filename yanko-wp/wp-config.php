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
define('DB_NAME', 'yanko_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Z,_6besK`wgiAc(p|!4x2iwE4y=>b^!}a?M?ni&?u/wMko|/3P4[;)9XZ9s4&M$)');
define('SECURE_AUTH_KEY',  'WxJi`+n^Er<uMwGNJ)wRZ=-^,$_?>{/A[u*2Dn;XCI<|p0(^_5ZYexxER6&`|/|t');
define('LOGGED_IN_KEY',    '$y6/d6bOq>[#Vh:<T&LKSY(Ev0bmqu0Fb4f+qw+PyK`-}M-mul:[eq7$BbVeg9&E');
define('NONCE_KEY',        '-C|C1Ln+wnbP]gV_Y)W2a*mO]ULlu&|Wr+)w42btq)ZMOg[9?p<g8<eD!<w{:-|+');
define('AUTH_SALT',        '?oPAPyy)pP`Vp<D ]o]y[8:yWZ{%CxB,mgtJ)$ffl!W(U2h7!>P4>5Q964$Qg)h#');
define('SECURE_AUTH_SALT', 'j$-|j%A*?*/h9PrZ>E(rHB:p4wl<V#2_Zg.r.PW}Mbk2S1Pr9,kx]8/|C8~SE-E`');
define('LOGGED_IN_SALT',   'KR,av!po;yC%ZAMhX9nEAh~`X872%&a|nFsT.e3 JI6q$T;zA(k]=;y8b;Dib5vE');
define('NONCE_SALT',       'Gfs`7YPf+?LHkQFjcKL(LW%JhVnx{{w*W!dfP[3go>y0xnEg@jFAO0E3=2@;Qt#^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'yanko_';

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
