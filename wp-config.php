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
define('DB_NAME', 'troskify');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'OIHszw*K9bM_<7cDM{SHvEGNgPs4uum%=F<9PW^=<0N[2G3NA@Z.Y>i8>#WR$QjW');
define('SECURE_AUTH_KEY',  'Lji?4DK% Jn|:;+&c`1@;gqjOoSxn<k,,^=.0ug+tu%D.t@WIqn`-L%I8my@N)Gr');
define('LOGGED_IN_KEY',    'KVh.ndAZ?X>1I{.]/j5?~hRab+@Ocd&<)9i&^^20{VEM1YV;oH^!iX#sPlC>UND?');
define('NONCE_KEY',        'r*l0_1B]nbFJtugU{p$]ZPh3k^685|kA:XMR|(Lss]S$~yW; EO`2x.9U`a|v]I:');
define('AUTH_SALT',        'pTxF<JX>b&RO#@3wT#}5E3}O1GqPTA@)y,K!53#Nw#Do}Eg}:hpu4aJ7Ba 2dQ2m');
define('SECURE_AUTH_SALT', '.3]wUA2^ d>&39u#v~bMnF5JU$eWM|.fcPRZC/+WZi}%r<4G~+%&Pp<Z>bs~%Q,B');
define('LOGGED_IN_SALT',   'G}3E1p#H)t_<OlqAFvkdL#q/W~g)ANhznaghG5?sho<6D1]brv!hX!2Nh[DJiaMm');
define('NONCE_SALT',       'Un~LY^bTlthk;kI.?8StCrKdMtv}%ZsN.5l4<O5NCWRN88k^?ga8c?ixuWcFQtFG');

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
