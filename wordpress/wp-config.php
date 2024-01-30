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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'r`<4i>6cDMmZv ^4i,i(V$Oyjq!8nWGV4j&?,j[%rN,hQXd.@Jdid.^kTQ.kPSDT' );
define( 'SECURE_AUTH_KEY',  ';;.9:),z@^W}@hG,##_t=1cHpsUDRc?}jC-+~~xXv%WI8*IGZI|kiRGP!mJX2w.>' );
define( 'LOGGED_IN_KEY',    'COix.?H=P-f@r)b><?)l3kks!oat{:AFL opHnxd^U[C$!khxG.FW)#%uO(TqBwD' );
define( 'NONCE_KEY',        '&GFy6/)pQSEfY7^=YdN_*&6BSvUF !ciVRD#cH)J.s^&:|H=<T}I@v&[!nQ3X52q' );
define( 'AUTH_SALT',        'gVL|I/D=A=~QB l$F1_~;7@;ji&g5rVW0HZ/Z5Zk26]T}`4uz!e}){T1H%^%T_5T' );
define( 'SECURE_AUTH_SALT', 'bH>&@aO<v-o$QQ]IRuILYXs$x;@*pL#PdN{$ufpg/(QZ6w5b^XpTgYk+i< |bhIZ' );
define( 'LOGGED_IN_SALT',   'O>8ZBC54S5P2&FU)U!,[-f)v*Uv:ZL>JL1i{C nIgGxs;7Y>>]?;%A:ci[1zJtKd' );
define( 'NONCE_SALT',       'L$M>zT-xkkFAgxQ~.}Pj@/1~IJ*~@^ZimEG8:@_Xff;-$JP-jLa*j[69SZUG-+TP' );

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
