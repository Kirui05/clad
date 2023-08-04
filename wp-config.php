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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'clad');

/** Database username */
define('DB_USER', 'admin');

/** Database password */
define('DB_PASSWORD', 'admin');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '$;%+>&r(ufektqHYFC~~U|L6[`bFWvbfwVWZ&`we5>Rd;_d]8<jF@dIE{xqnwz,+');
define('SECURE_AUTH_KEY', 'r1}kE!MpWyTeq-Fr+!OU Yp?)MdCx#MxdM;&ADmWR ,rCR?HAq>c?XZkU<5]Po^T');
define('LOGGED_IN_KEY', '3?!;ON|r[BQ]nY8XHL60oQL[z$_4;sv(mY4BQG? +oAz^Hg=wbhl^%FF Ih&Eg!x');
define('NONCE_KEY', 'Jt}}9/u#Ka%{~%=wAU9#LA-4GRAkrG7t1lxwcEA#/{f,$q-*.CrZOvEwB.en,sNB');
define('AUTH_SALT', 'P~S$XW)3)+_{X<MSo{PV}}FToW3H4pVew,hH{t8=U!hV_g{qE#Wu@DWs/I H6hxN');
define('SECURE_AUTH_SALT', '.w>^maj_12vP>FMmY&t|97VyJ{kg 7aKej*QMV*G$3DQJZQR^L_w*HxXWfJ^K& ,');
define('LOGGED_IN_SALT', '3#BfQPIe~!Fl=_|m#[4^Ih1wyDG<}2C6@-IRlS`u7~iAWF$aj=o9mSH2I/!`uA:+');
define('NONCE_SALT', 'iWs@49M+if.7I6GFW(WX!S$@27TZU%.PPBy>sb|:j@HVQ=&.PkZIUYmar]iN# Cb');

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';