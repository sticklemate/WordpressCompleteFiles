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
define('DB_NAME', 'testsite');

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
define('AUTH_KEY',         'Z_w6s2n**5J?TeF::,N^^P)me21pVXQJb6}N7>!61n.eV5-~qi;e,zRhqm77*`$8');
define('SECURE_AUTH_KEY',  '&`uA>A.~-BB[N(1!G0g&%o$Y^0:2!dlYQkc:/ESv:FJ@GJ<^8wNt&Jg)[XN=]?S/');
define('LOGGED_IN_KEY',    '= A|` `D6{|`bTdl^[4}UfmJ/>E2<ul=^-nh|O6^9mJM!R%FpYCSie2`@5[bzUs:');
define('NONCE_KEY',        '}hz*ID:{!=M(SO%]s-f^i=$D|ncrH?mQ 6Q;83ZQz#%e ]C@Z0_>*JP9Hp%GsZCM');
define('AUTH_SALT',        ' #CJM$,wi>iQX}.qTZZ6GJy/d_~_lT(0K[_0 (Rz]RC;/,t_[i*I(UqS8LNdl+ns');
define('SECURE_AUTH_SALT', '/1,W{lleJ:2BY~j&.*gmVF{nS% rLr/!oAuVC8A=9;eS /Ew,zJSV=z3*+J-SL%y');
define('LOGGED_IN_SALT',   'KZ_MPzu8`hbY1nNuM)}yk$a@wH5~C XU3P4l&Jfm|ethL,*4#gP>Ya2m+e$Q79F]');
define('NONCE_SALT',       '{1<<1bbwqMMmaO:LBMi;q`qekw2&6[Nl77@0p=.}b~@$Vy.-QInUr98,boFl?j<<');
define('DISALLOW_FILE_EDIT', false);

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
