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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '6?^E9E<Z[b5D~$/t0b{rbtbY6/09I_dfyf RpSqqAmeI|FFNM_?3^ek^],`vAhPH' );
define( 'SECURE_AUTH_KEY',   'Nxp<7Z4SM?->NU`i<H~W%v8``$irK]amV=o7[h5u(W/1uCcP-No 2Y6G6hSZT#Go' );
define( 'LOGGED_IN_KEY',     'W^`A9gdhwu81DuZ15AT,+vLSDO[/GHBAHRH)dLJN-f+eDFW4%y:9?g^s4JZf55,~' );
define( 'NONCE_KEY',         'U.1qMj6LmZ9-fXi),UEDy I[j-qx-J{JA$Rw<V[lQV_.pG-KAQ_6&x7Bg1ii&&1]' );
define( 'AUTH_SALT',         '936ZOld!+7,2^*+s6mD4mw7k -3!z7GUoMhgZ;:wRjR)|HPwt+tbCDSq.gc}_I]W' );
define( 'SECURE_AUTH_SALT',  'uEp#/B6+4dcp{>.$AU`RZd-XKl9`uik%Ka[D{zT}.Fpo DBp*@^6bTxRY[pH?6um' );
define( 'LOGGED_IN_SALT',    '2is6-xC2kn%x;O^RNN,S;F}X&8u5ym;O;-/w=J[6Eio[dp64E[=hc,E~$$wtrO&}' );
define( 'NONCE_SALT',        'i`U!oK9LSG{651Dq[fU/[u+C/&E_ CgF|8K`_^..Uya^jB<,kO=2&@^=^~=BCO2?' );
define( 'WP_CACHE_KEY_SALT', 'h^:v06Q~X6OR9dl_o4H{3BRq074W6y@AQ@Ez`xeAxz|a0Fw%v}9z@nCA],kc,%21' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
