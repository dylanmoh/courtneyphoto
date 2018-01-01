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
define('DB_NAME', 'courtneyphoto');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'bqIFL{(mCx*DhBT)3F]#jKU9nO(,;%rurMr-&noj)MT{+>[Xgid?w294i)e,qGlz');
define('SECURE_AUTH_KEY',  '^P_zf a@B=_S,_IdOu(D~X2cb{6bT@-xOEcNL]Z3L)E yo5PHg: $I6/]]x*2K!o');
define('LOGGED_IN_KEY',    'n7vZyt?qAv></cqv:<x@z}G[5KXT#O>X4{N;BTs!jaORa5QVm?x7KanJ/GF]Ppn%');
define('NONCE_KEY',        '+1_ZZxWD)!>ty>7U$rlm$!m46|=w/5il<i(a~M}9}49}2i5tTf6=L=G>EC&DQ~j~');
define('AUTH_SALT',        '0pun%@Mgz]F]lu*T|aO.GG/Q*K2Tloe>,:QZ~*2lg!^hQ aZetBGjU_#tIM]P2c`');
define('SECURE_AUTH_SALT', 'lj__?[+lCfMz Z,3gu:S*GiOn33gIEL{0l2:;YcBSq9(ko;.3^HE7BVx0rt{N5* ');
define('LOGGED_IN_SALT',   'N|h2gw5v0fh?,(xG!^GNJ1wW>kfp~_w[23!}*~y]Ad@p{!H4F,WQRaxk.Mc>/T~~');
define('NONCE_SALT',       '=uUCNwkmfw(aUUY4U{w._C|V|c=;M`90YCgho9XH#IM,G&/;m*!Z#tIQrC~[FeWV');

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
