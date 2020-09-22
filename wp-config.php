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
define( 'DB_NAME', 'miglepdkt_com_db' );

/** MySQL database username */
define( 'DB_USER', 'miglepdkt_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dGxyDAz42h5k' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql109.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#H3YCfJC7D]S9UHF7eu@=Cyrr,>vLNI~sTbl1U;v390Hr;*6VG(z+-SwaTYgP-P<');
define('SECURE_AUTH_KEY',  'hMN-`b^x}Z6=y+w6Z{] 8<J*m/mmp6DW.)e2;)iky>WQ?,X9/q~?pQmqIbisVr`>');
define('LOGGED_IN_KEY',    '8ISYm5<rLz:x@kotNajB/i1h:MlP;&xv+||gQNSZf&eZJAof;>LA%0x)$Dzy[kI|');
define('NONCE_KEY',        'a;&bMjk2PRV^jK`8%>UjR=y%Bc!_~c0TFgz;}jW2!:sPd|,;R3wdf[e68KB!2LGD');
define('AUTH_SALT',        'qT&-mQzI;,gn0#:{?D8us^(zzI|#`IpAh2[c&T@(#}s,i8tw_!]_s+8{%9.-7%$ ');
define('SECURE_AUTH_SALT', 'AN;-:%Q}~B/.q_Cg&xoQ%9(t2P1_oz#}t,0fND*`Abe._:ZG}|/.4N;_wc#1GWUl');
define('LOGGED_IN_SALT',   ',}_&!p|Kgt8@<PEbWKyo3_;u_UQTY|.ahX$Gsc9XG$8Y@[Yb%Gr0[0y&w+4y8DND');
define('NONCE_SALT',       'gU;,gecU+$N}1kVpM$;}wo +G?rI/;QgKb8(q&z?rGqEv;fMF|h,e=(Oob]!,^&n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'moncheriestudiowp_';

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
