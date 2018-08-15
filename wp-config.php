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
define('AUTH_KEY',         '4-)Z:~ntYn(aqpNl0u() {Jwl`hO#)W>(i}(WbfMSwJ=ADyCKs8a?dx|&M3,RtAf');
define('SECURE_AUTH_KEY',  '^ 1abPW1yPW6n* :lDB.u6cM`XXj,;``^3pg6Me%1:?[e>P>!#QPT56e@,|53_kq');
define('LOGGED_IN_KEY',    't:,_~D`I#cV<,/kTQDc?oP:uj?!~Tg`awED66q8ys&&<TQ kGyDqc-~Z2~)v$#{<');
define('NONCE_KEY',        '> &v@L)&;&BnVFY$g}`.D?a+;w%ts 6btjq:_n|(&y|{<(axq=,4:V &At$`R7)W');
define('AUTH_SALT',        'lo0~F>{Sp3:6Ua/zD#;?w:o6+n~LqQDAHp8beq8.nS{&G|7:W7M5A {<p&Ve ,2o');
define('SECURE_AUTH_SALT', 'H,U~H;h9OFJeNa|Ua%8:nOXzQF_kKG+_q#1,8!/Tn1Ip.yX7uy7HZN;L}MzG@2$Q');
define('LOGGED_IN_SALT',   'L}91_Q}yA3%Q877=4xGzV|xeuYTjK!hiBBVV CjWz6$MQ.]Teoa7OkfpHK$+x$>e');
define('NONCE_SALT',       'Ww^PK6p3S>;lebAm8HNshY].?awFov4YS8<:wRMb&j_DE>FF|WY>G0/=c&=wa{Ka');

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
