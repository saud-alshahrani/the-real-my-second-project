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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'home' );

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
define( 'AUTH_KEY',         '{%-b$BA )@i(j.&Q^D|6:5nK0~SS7MEl>T>V`st0b+VLh`?X+CLXsi.~j^y#J,]@' );
define( 'SECURE_AUTH_KEY',  'j1q2dm}`=Y uBno{K+QU_b-2^}&tZQ!iH&S_M@4LW_JjZHBe#g|03A?5X}qQ2c5$' );
define( 'LOGGED_IN_KEY',    '~Gusy#VT4lL+|qda >Q{+eR5@sRxkFBi9M|f<3IDbpZGme%,rC0%6-Y%I/hP_nYP' );
define( 'NONCE_KEY',        '(UFtJzKL=rY6C?og||{u<l.)wc7WxN#RG(#gV*G@y0#>ZExei#N4|()j{Vh2DD@h' );
define( 'AUTH_SALT',        '1QC5=U.^qvUyciZ+k!&sIZgP|+CF@~MqH-iYwHapWrJO<S$g/{tDYeR1vrkku`S!' );
define( 'SECURE_AUTH_SALT', '1INbR(4,GW8SjqaW9+#5X~p)f%m(f#|!2%VYsYwkW@ muD.*ABd3{e1r!sG40&aB' );
define( 'LOGGED_IN_SALT',   '=rsnS*4HX$T2V]ZTxeyVaL`1_K`dChF<`S+f^p-^R9R|5-[8{mO<F,pMUhV%x0iW' );
define( 'NONCE_SALT',       'UGle}P<A)cMU[}2kiOQ;C*Wfzfk!*iD24n&@Hvi)8txaJNN6 #um+bzn$YGSTtQ)' );

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
