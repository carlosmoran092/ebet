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
define('DB_NAME', 'blog_tradokey');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'H5Tcxj|#NowmaW6.TrS8crtFDV#y$[517Vf97kp/Q$Wc!Q6VeaD%U7}k|8vnW*53');
define('SECURE_AUTH_KEY',  'ayy2b)Dh=0Y+K<$gG-OX`UEV18GUd^;h^i&p/5xD[+r4[t[|BGaIPkld (-Jwy$-');
define('LOGGED_IN_KEY',    ':`Nv-12}4h7?aFZ$gR@/TH?zN^M9fiW@-s9M[M%~z<:22y<|PKPa>c]Ws1dQ%N^e');
define('NONCE_KEY',        'z=&o!1kX2(-BcLc$1}W #:~dRU;wu3Hn,s-0U:xyQ[_)2I2/DQP4gSc.~Jlib;EJ');
define('AUTH_SALT',        'KWKyN0_O4mIjJ|0m2E> Kqw]ZibCfCXyrN0t|@$f0=)O}o-Z7CLRTl>xX5^CB+-(');
define('SECURE_AUTH_SALT', 'imAVj`uLA>p>^V;+6&0ie#OBj%u#<~d|=zaw6rpQ4%5?t>*hs/?RsU;v!FT*;A 8');
define('LOGGED_IN_SALT',   'bR_K%/IGLr{pb|=uMcJ_sVAH+):YhKp%.X)1du0`VQUO{B`?|R&UEA;>:l+F!<:&');
define('NONCE_SALT',       '@DU<4pz`V,w|5|Fb!39IOV,90tevxN&rP4~&Y1X/`M4!NUQ)}AUM`bOYjJ 6LK Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
