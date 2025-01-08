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
define( 'AUTH_KEY',          '1`8m&LkY?4` `DYTi@R ~eXbL.HW]En~E00).c:7yhv!uoKhT3fVYIS%dgWXJhd7' );
define( 'SECURE_AUTH_KEY',   ')JM@>DCs!{i[$A+A#/|w*o`M!{t-7v<5y9*7}QRgi4JNqL M=wtGc8d|I30mnv&{' );
define( 'LOGGED_IN_KEY',     '}aTr2hsJDrKCAg+.=)xZ_dhnI 0@TEFQik/IgL_1:qaN|9IoB,9D*28>59h|e#vG' );
define( 'NONCE_KEY',         '#3T4RJyFoRv1ml5d}Gh>nS7le-V?MTbE#jnz9px|W,?@$/QiJcSFDUA*Wgk}$7wl' );
define( 'AUTH_SALT',         'u/)?-f/cRIq{c0:+0fL|IuG&)Il2oHMh7F`$(4Wdw; b4!!fxTZ(4q9C)D oVK6J' );
define( 'SECURE_AUTH_SALT',  'GoEzeJP1}C4m``Pek%m n(Npy5t/RH/;Li,bho^/L{,d.ojKb6-z4mo7$q|si5 ;' );
define( 'LOGGED_IN_SALT',    '&[{}?9x)Rl t8/VV~TuV1BwSH><ge*,f$j:jVkAk0:e9a!ZBq#nUBdoqO<>NN!Nh' );
define( 'NONCE_SALT',        'x)7zu0v!=Ykp1)DMee]Qa56XUheKsJ(PJ=KbT#;`;C%-A7Mn8grO7Jw5nSZl2 ~i' );
define( 'WP_CACHE_KEY_SALT', 'cC$KO s=9E;w_?49f>?Oj-ocq_5;rul|VoKDnS9Q-=W.jol=sq)s}qe#IX+hP!I$' );


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
