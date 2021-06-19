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
define( 'DB_NAME', 'huyhoang' );

/** MySQL database username */
define( 'DB_USER', 'huyhoang' );

/** MySQL database password */
define( 'DB_PASSWORD', 'huyhoang@123@@' );

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
define( 'AUTH_KEY',         'KqMNzW+l1E Cb0y@+)U&BY%sG{;&;IfA|#^@Et*#jtFGcda-&%m:!F%F@()+$t8#' );
define( 'SECURE_AUTH_KEY',  '5,,-3<w5,pifp?>v0FZU!C_e9$g_V_~n@nETze+|5c?dsSN;{hf[kobL-]eDNs:)' );
define( 'LOGGED_IN_KEY',    'O&qDY<iIv[&=f9OFK4r8irN`Ebq ieD>1i{S<xjW uRroV,|=vkC!QO;vkUE~c3o' );
define( 'NONCE_KEY',        '>[S)o@j2!12*Whd}C>T-<xOG_hm2@P>aTX6}[i*MR#FxhpNiL~Yv@:Q-tpMsN4W|' );
define( 'AUTH_SALT',        'Se$I@tCz)HqDwWPRL66A8| *_<m;3vV0ztG)zuk<xWE|^P`f-I$j%4{F:pcb,#VO' );
define( 'SECURE_AUTH_SALT', 'FV5Mm=tBh*H}n,y$M3wep3abpza3w0dScS1isr.R@l&prhMqoC4AA8/{mb<Qn#fh' );
define( 'LOGGED_IN_SALT',   '`7R]~e>9%(<k]M>gEPS #X)48AB=(Iv 0XaeYT(1{hn;~6djGd7,R8obY mu@P4^' );
define( 'NONCE_SALT',       '2Co*J$@J(b,JN4n!V@@d7k@K`0m~tGSjFjrrA-mX(.OSf7P2p!NpR=$Mp?ub$Rc2' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
