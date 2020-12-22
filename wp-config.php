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
define('DB_NAME', 'cms');

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
define('AUTH_KEY',         'Dgj^ar+U/5YLKfLLO?LuD%H$tC;u&LFth@.08H$hjcaR=&B2]i%v$$),yr{6#j@*');
define('SECURE_AUTH_KEY',  'T43q1#*6h&HWJS5wp>v.N!}oOVjY)2]rx$E~zZWOTE=%>$yOx[w^A^UC@gG*u{nA');
define('LOGGED_IN_KEY',    'Hc@/LfO.k8qfu)}idF4ESrR7*xQClDKmP.X<nHh_wA_DSZ9Bd,s=yUX+_|3^3]*D');
define('NONCE_KEY',        'c+OSN[VC`d!NKi(Pmqe8~Tg,mKL<Bt?/((w-a:uEx>nKCn&qkYwwh]B7*6=I]6~)');
define('AUTH_SALT',        'EkBt}qrbpPix?3+Q,/_@saad+%|K%I&:.!+{Ek3hm{5^1<@t@Bl5!*0]Ub)APs9<');
define('SECURE_AUTH_SALT', '#i@<eLrcZbleIxPey[;K$AE0b)JKNvw@~vK?)Tk}})^vTuZ5VQ|E10dn6,J@tV4Q');
define('LOGGED_IN_SALT',   'NC0h%q9]IwnS+UZ5,ilw0GEj!bhb^PWlv>@eanT>xF#!x0**y=,Ym1upHs^#{3Zi');
define('NONCE_SALT',       'hacsGN$-6BWfE+};v3K2^`kR?RSV`%1T99KUE>Xk@Q/U-e9R@Lff#Z;&]c7Z?k*Z');

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
