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
define('DB_NAME', 'db1');

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
define('AUTH_KEY',         '{m1d:3]m338:WVafP|spst)Ekna*/^Y_97C:h91_8mghYc]u O{Lm1GKrF 11Zr_');
define('SECURE_AUTH_KEY',  'P[3!$650Gjcdj(QD`R0@gY#C# t.[/B%<~V<?bze6/{`s}oH>i&*nnN?fv,R9nKD');
define('LOGGED_IN_KEY',    'o ]Q JE@lwiqY$efj4y:/eGIlRB4({EC?`I*#E[{T>OYk*vB`31:1B8j1br$* =Z');
define('NONCE_KEY',        '|8wcT+c,C1)AX<>X5#ctZ#K^|_i]d},yyXKY%LBy4;<.+5p{Jo7=/}JkCGuZi.*7');
define('AUTH_SALT',        'h(e]M]2C|ajv*z.^<CH1AUKl2!|Wvp#mf+i&dzjQ$-TgN4^MXM3|#Ob?7urH.OYw');
define('SECURE_AUTH_SALT', '+$: _@gUIEL-NPc;gst6lfR^t*ZlVIJ-t)jP?}<Tra[[?$^t*igr5Jp4kjPeUg56');
define('LOGGED_IN_SALT',   '*+>j8K]EBD>sa}NkObi^;,NtUuI|H/GIbDY)h,ilG;<H`?n[,%1B4^,O;,c]9#_Q');
define('NONCE_SALT',       '{eZ!Iyz,5ekj@PzU2npa)!6gs~ArP<(!!m[<5B00&] ,KK]d,wpoB2[6qB}$ZasF');

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
