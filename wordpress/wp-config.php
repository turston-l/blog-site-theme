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
define( 'DB_NAME', 'blog-site-theme-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '13lS{ZBfWwJT=mYb1ks^L&7SAC6FnT]k=QzqARq+hf}orfWNM~90Z@W4ZH5FIWvv' );
define( 'SECURE_AUTH_KEY',  '~}%j*o_c]x)}CVeftf+hMo4~G.Tb9D@O@0IGg1gQ)6*,RNtWobF?R&QLazp-gaqC' );
define( 'LOGGED_IN_KEY',    '13Y]]kp=MnjsHdYJg5&~vT1=Y!Cn8|W&d*gHq$Rf&rSd4q.0RNT!]G1CRg1n1oFT' );
define( 'NONCE_KEY',        'klF(lGiZ$!PG.$52ZE3<A{w/LZ%=xLmOsPdZpf@K,K0MwI2!TpE1n8ckyV|~&zFF' );
define( 'AUTH_SALT',        'z&=V}^h189&d!! %-%_z&0EHH6?E&f4xB$N9z}R%%*!}Os|>W4^ep~^L#(u*_1Wl' );
define( 'SECURE_AUTH_SALT', 'eMmMc56?>?jr.c1~zM^+tw:Euh PMUqRIS`o)eCR8gaS|8e(E0&kzos(53:HSb~[' );
define( 'LOGGED_IN_SALT',   '#%!U`Nrf-s;2R+t4SSoFw{P$Y#@IGuhslpsUGx:ks^*?>h<J_f^H.qc)5c;u0M6b' );
define( 'NONCE_SALT',       'q~,!.NCuuo|WP2CFP,2t|2PC_a3Z`gLAeA8v9m=Q7=xdSfX`!+%9m7C[f?OVX#$f' );

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
