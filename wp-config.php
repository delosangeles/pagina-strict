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
define('DB_NAME', 'strict');

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
define('AUTH_KEY',         'LlI&p.Mw$sfbQx4o<kk^%1Ycu{7aJP]9Cg n }QDnn2xoX(X]BBmY@7s/<F0;;Mb');
define('SECURE_AUTH_KEY',  'i`[_eAZpt|%jjH!]~;KX6]WEEPm$-MiP}53T- )lN]yo^mo-EOM%d2S_pzuZp=S1');
define('LOGGED_IN_KEY',    'WDzo`b#7GEmrgONhF-*v+eSc.IjyUxXK[5k5}i1 n <~rI-b?P{I>-_0{S{JpRH}');
define('NONCE_KEY',        'UPQ!M1SY$BKZjTH>.:0!U5tiY}Nh{oSn|xv1@5|UP%h7!^g#vuNad2%^<cK#ayma');
define('AUTH_SALT',        '%$3PcI{qTD@@0#W{1nkthAn][7P=865?HOmK^^83T}EDOK>6fo5`rjL!q<~C<,]y');
define('SECURE_AUTH_SALT', '_=}.&`%6W6wh6^VgR!zahhUq =$+I{0z$^F!sqsg})o+&yv+cJR! <t[t6&.B(S/');
define('LOGGED_IN_SALT',   'IDL4HuliUI:!D,P5J4E+SCNhGi)(-`cL~4b`og5DS?[W`p9e:8SY_MyX#G0fGSn~');
define('NONCE_SALT',       'tjeo=f~gI?YBh{zd$fo/Q22Sm/[%N_`W&j-B9Q5(/qj*7] 9PUeJzSh5|i)eEvx[');

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

