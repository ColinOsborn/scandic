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
define('DB_NAME', 'tutorial');

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
define('AUTH_KEY',         '5h{XW*W~bNduq&t-t LZ3N)yb5g%-HdO%^IbG?}2+]$.lC0o6Zt8G>[p%m0vqAEj');
define('SECURE_AUTH_KEY',  '2/?Dj|A#GB,Yqg^ZZV)W~S{j%QU0?,ur,,OY_=,SNrZrX|1DJ6VcF*6EmcAEt*R{');
define('LOGGED_IN_KEY',    'Iww|ZI5w`Z~[B%q>0,5OJ{g}1ul:-4:R#muNiU:Yi%ewL-0L!nPwHsXIlQ8~;eq5');
define('NONCE_KEY',        'Pg+Z8MXs?:N7Eyw=7R(hDw,Ms(7o(X0^Pf%J)K*WheyJr6bYRTg?yY&h[?S4(uum');
define('AUTH_SALT',        'lBFB1~J#QakmFszdCyP6hTDeKf#ipJqxN=c-yP %,_YVCJ%C]n2=J}9IIk?Cj%1m');
define('SECURE_AUTH_SALT', '92:H!n9YUd6mPA#LB: Y].bqz/^SpHcN]W,40!mLl9~,e0Z_R(tj!,I6fkOEpO* ');
define('LOGGED_IN_SALT',   'U()tk{?2bPv8n]}Ue>GoVJL*X8;NK<Jf?ubfWw$[2JfM|ww}I.&>v9O&oNs?lTpX');
define('NONCE_SALT',       'Yz%;bN~  ~770Bi[8u9Ic+U:mr(p>;d[2.JG-l,^!UR1HZ{(B-s[)[VMd5Ie6G(m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptut_';

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
