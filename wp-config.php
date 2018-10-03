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
define('DB_NAME', 'proyectofinalvs');

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
define('AUTH_KEY',         'Sqq%2er;^=Aw_,ew?cFOXz+}Zx:l5mStW:rn;+yhN^jM }BtyoIE 1mdS|O,CM ,');
define('SECURE_AUTH_KEY',  '5Ng)nbtNW]!H;dph0j &{^]tcc_Ob>!]a0ShrF)4!%#.!LPe8`(%CpN}K?Y7d!{t');
define('LOGGED_IN_KEY',    'ln{{]Xol[0T55<x]T -thKz1:_o7MXt|{+j*VH]*6FsJ@]o8N>E0uaE`I@~w}S*5');
define('NONCE_KEY',        '>`_)@C!X$nh&(?qry_1Y?~#*5X0Ir !.}k#<Yn~f{GS?#=b(vW~|m*6l74pTD^.I');
define('AUTH_SALT',        'e@dzzkA1ubwZZMT}+l~MrJI9#vYM#;;U!#$(j;A[V2$tI7l9#TI,f3yz?}^Z@> O');
define('SECURE_AUTH_SALT', '{w:L=a`O5A5_%-_~zk@M/%qml5bv4XA)09EhK#@ =Mqo]UG&r]JRvD#9U{1,>4Q*');
define('LOGGED_IN_SALT',   'ewd!2Pd]Cth6r<y,KO6;LOT?Nnn.#5x RiXEzR(1V({<{_QO2{H3`.o:O{rr6$v3');
define('NONCE_SALT',       'F;6wB|X]dvL-v(T4@,L%N~8;2m+Z+QW|=?ip?u`xeG6MiM4D9.zCCN%:=^)#uk%Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
