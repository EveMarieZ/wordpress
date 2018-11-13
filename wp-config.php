<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'z=J=n^{!?JTfK=JQPD_~JE_jn1it+%6e~7EHtC!E^+7&`r%$~8puGhC>$3za JFE');
define('SECURE_AUTH_KEY',  '9?Y*C<pTcB74lkl?U7Um*h}}twS6u2H@(~l/XJKD+t^PfnZmh(%FKF1X/]IF;+8^');
define('LOGGED_IN_KEY',    'r|q.| A]S-moE!k@p(8:_pkz3X9&Fs@ks.=$xJ^L&{DzXrx4y~V FCP75GY:XUjj');
define('NONCE_KEY',        'Sc| +e{eFJynb+`Q/h-~Q_2h+2A#j-3Zo|[Cd&gOiK.0SMf)DU%QdV9,oL1ZVS, ');
define('AUTH_SALT',        '&2K~+e^Y~p`7=MA#FQKgKxduF+Lv/XD%{qQvap5*oZ+zX;skQ4^[B{qYJ#pxJ7pw');
define('SECURE_AUTH_SALT', '[-S5JDtXD6<cEd-KRDSBv)S!U.L& +J`Fu+JmtJ{2(l-N2#0Xa|wV+8z(,VUb7|j');
define('LOGGED_IN_SALT',   '0sh4JLmE8wIKR_If{#J]heS?1K}a:oZIT j/f@f^OxUqH ~raiPG+&lMbk4X~>x$');
define('NONCE_SALT',       'J0+SF.v)+|Ro*`)F!aUK+ w{(!9nQAq@U2A>x{lmrx+|5z-xrGGdOCdpUwS7#FlW');

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
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
