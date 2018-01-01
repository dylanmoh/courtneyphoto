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
define('DB_NAME', 'root');

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
define('AUTH_KEY',         'fp~YhL9Xlg/EIM#el|nPSvjW?{4/LMs(*U~!^[>_@)T%0K[.*;McoDKp%#*[nNY9');
define('SECURE_AUTH_KEY',  's/:OfqjirXP]n7{a0X>]Azgh7$2Ti{7K3h26&h+N<5RSt7DWX1okJ.CsNl-5]#eR');
define('LOGGED_IN_KEY',    '{y`HcF(`emLO4F.qmE7`t.-_m{~kVVR763(|Ca0L>lX#*fdkle#],9=aUWOQnsa<');
define('NONCE_KEY',        '.&o|6<8VQF1| ?Nz{[T#NBX*bI,Qa*4g[I[Qx{9DGzlwZ+C1/2l)6b]Wrz~are]7');
define('AUTH_SALT',        '6tKb%hpu#{FcexF/~4v6g!hg[.8Ss8IuG5kIta+i(l?US}T}n5r/jfK9Y9QM,0b5');
define('SECURE_AUTH_SALT', 'xWhL%v_0F0*A,C;D}hJ|)Ze@I/!5I]S3_d7p03M,YJ/CiT1*RQ6y`_K[/aD$E#NN');
define('LOGGED_IN_SALT',   'tYtwNgH95/XeOc9[!y[7T`ArJ0H.nag;gZ$/ET>q[<x/E[S]C{p.z.2HXZjcAIXJ');
define('NONCE_SALT',       'uxEG$nSuKZ1r/[)wsB|HDF@^~QkVc2TWK+a/`/#v&Z^no}a.^U~%<-JLM:M>ikj$');

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
