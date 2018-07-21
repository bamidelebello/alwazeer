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
define('DB_NAME', 'waziri_yoruba');

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
define('AUTH_KEY',         '([DH8hcq^x5p(01`L:#ee4BDD2;|QQ-EJo*sOA7q)b%XpY?Uzf>{92SO*k)LCPjo');
define('SECURE_AUTH_KEY',  'r`nk?au+i&8Y`5RY*Z/zi+=wm?}D>PA5tE`!VY*EQ(-/-DDdqOmSOd?OA$[AG#F:');
define('LOGGED_IN_KEY',    ',kTTz!+5 _bkTo,=uMS@<5]bGh+|Ir*?;2{iOoU X+vx01)xNsT04B^I8aP%%bs$');
define('NONCE_KEY',        'vU6?*do3et&/uV8].2,)[il2Fk$kP8}S-xMtPMTka07K|f|i%@Ww^y>XQuwl4/$Q');
define('AUTH_SALT',        'leBP6,/apDKv@av: 1|{%$*RCPqdCk9?:hq|.ByU1BkE$ZaC%$eW1Bj%L34LS+-m');
define('SECURE_AUTH_SALT', '|S4x{-[Sp^#:dJX9-KRZj?:Ac|[qX)~So9lxMf<347$n+sOY+:m2~j0yb6s>?5?d');
define('LOGGED_IN_SALT',   '<?lI<7x<b9-d1Z;n*N7e#,pXPpnflp$T-bD=l(PGNaf2LZ^L0!I@r`ZdO,?UURnA');
define('NONCE_SALT',       'f9L!h63!BMG+h6`ZcmgE7gfP,hknslHhKa.([|OJ:rv$:R;nDPn^3W(0^4 Jlt.&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wy_';

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
