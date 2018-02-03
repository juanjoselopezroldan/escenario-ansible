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
define('DB_USER', 'usuario');

/** MySQL database password */
define('DB_PASSWORD', 'usuario');

/** MySQL hostname */
define('DB_HOST', '10.10.10.2');

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
define('AUTH_KEY',         '(qEL1OmKdzgKFc:oN$C7H$4L|>,M9MU?fHo~+|gRC_1D+:?SU,f<4r&^u)<rSup[');
define('SECURE_AUTH_KEY',  'Bu q$?stP#X<t>Ce|`#M&mKcE_RSBJ!|jqbuBL`IZvc*n0D!-{q4d]XVv1Dk_hf=');
define('LOGGED_IN_KEY',    'eesfD|$wtr7|Ijy{xZj6EY2)+:}G};|=#@c>y4K}4GdL(nrY&yRHR?VM6o_hTfk}');
define('NONCE_KEY',        '`r]D])>?hH 3yVusao7dxl/^7*R[-3A@rr|(&(=VfMkDJ|eq9@:h2KG[b:o!]erE');
define('AUTH_SALT',        '%+=e`RS5y/]0<co.?Whom0o#{}O67;8^#/}1u.)A1nX!-2B0=P:@Kq6EGPED_hBy');
define('SECURE_AUTH_SALT', 'lCz)#vE^!mI!1p>LRHeg?DYaVV8]_q:urmEKpY*<QCBy>LMN%+9IjcI mT/M8<=+');
define('LOGGED_IN_SALT',   '[!<TTbk?f +~WeqttwhUAY?}d[%v!&Y >$qe[)g4rh6eTWEXuTifHnanL_~j~hXr');
define('NONCE_SALT',       '8=Y@I/duSZMvhyyV!I>A$N6=TTc~Gi^y2{O{lY)1($x~]y{%I~O%K/Kg)V|cR=&;');

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

