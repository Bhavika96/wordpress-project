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
define( 'DB_NAME', 'kilowott' );

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
define( 'AUTH_KEY',         'koV>lo&>I)iG->h~I?HXgo52qbHi*y}~/]EZXIB@eNx3hBdw3,!LEF5h]F91@~.u' );
define( 'SECURE_AUTH_KEY',  's|Jl>Q#89Qu5wN<}[nH.O 9DitpH QT47p4fE(j7Ti{Pyo8[K)I?-]1OCFy?,Mb1' );
define( 'LOGGED_IN_KEY',    'Jdy/?[>|YhXe)Q>+%YHif&}MBf_RS<9^A}BK j!q+,(9*+]e?A!yy^B#pVP{d2IV' );
define( 'NONCE_KEY',        'ySCcOT805xwFHbyo83R7{Sm+*ch6XpoOKfO47rz9ut5+Eu:.`X:rYN*:i=Y4P!U`' );
define( 'AUTH_SALT',        'peu~7BbS}e0ix}9DZ_EqNlszQ4~DK_80Vtv:AmJQ!XR6;jqNJETMkL8zuBk-`hf~' );
define( 'SECURE_AUTH_SALT', '@s7P<1mO*AR8c;10I_dw(nUWw;,?{6(|uU!G)4<}NC2}jWuBm.t4mq*_aqs[!P3N' );
define( 'LOGGED_IN_SALT',   '5`@o xqyf~/KI/c(>^$coxGjNM[Vl5 hY{,xdEitM$61&!RmXS~0V!3/q`R^brb6' );
define( 'NONCE_SALT',       '_cw !!TI;)u|`Dq,d~}(9=w]QRmRQ_=2|RNKL( *K89wTzVT3!n43 6TCMVR*XOW' );

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
