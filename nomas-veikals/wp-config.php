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
define( 'DB_NAME', 'nomasveikalsdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[,J3kZ1{t78_(zzO#9`#zTPBr*j/]&KqrD3/=r1Vx=B-8&M`Ksz;|u]gCV=kjI`Z' );
define( 'SECURE_AUTH_KEY',  '!f^!(-GsVrCia|<5T8$kOGxPWfoH/_z6)RUcN;&@gpb;&fJyiPMFmQgWMG){*pOY' );
define( 'LOGGED_IN_KEY',    '(V)8HnZ/+WT$qOVP#h|3:X.{;If&btcqLej^m@}F?ry-G~eX|df%WdjVjA`x[P)6' );
define( 'NONCE_KEY',        '+x5n+&?Vn&23VP&P>!$=bDJeU4W=/[SYyYi#0LR~<@=5-c UUDUQMhBgxIzi/;oI' );
define( 'AUTH_SALT',        'f3~uoWxJh*eZ&*^0m!vR>Q+ LY5<mpt$+xrly2X/7M[]^>_p6Pt6) :)Q8 xr IP' );
define( 'SECURE_AUTH_SALT', 'V9n~6CF?}&@7Pasuc~tS2?giE0ATUGI4%sT[qV}+-4bMl-B1wF@fzf-mVud-HJkA' );
define( 'LOGGED_IN_SALT',   'UT)g?WBH=2<c^a=LE&BPYxUN~Se}.zGTV#1s+/}Xk^gBE}<%$1iW:$yGcakXg2T ' );
define( 'NONCE_SALT',       '^S/6I1EEN~sVd4(&e#HrQi?aS:~pv2F|uPJ7M;|<R<y{;eJL1G0)gU?M#fnN+L(y' );

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
