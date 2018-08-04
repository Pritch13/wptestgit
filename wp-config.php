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
define('DB_NAME', 'test1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':8UgoGB$-Tr9!-.CI^;Nv+oiEPgN$PEI|:Jx!l,F<f-ji~jBR0]06k=2@o4-S/x+');
define('SECURE_AUTH_KEY',  'kqzb&xZ#9J#f-tf{.i~$@oloYETUb9-,{S(@ m={Q laD]ICWu!6Pvo*>5OXshTr');
define('LOGGED_IN_KEY',    '3p=atbx2&i]$^YnDFwys6~k0Tq_kt?eO}JwK7Rgzu j;h.zUEF|M1oI4cp_jss/~');
define('NONCE_KEY',        '6H?DMBY]X|`;p5e4pkBW9[!djEb9>PuUz[Z.jD,G|&WuUx,vPLfI_Ei#19+.ovPG');
define('AUTH_SALT',        'w4]E4t?LVe8K>0bx!*Z|[%mNITz5PQhIP|E9*-B8Mf|.5T2^,rw*+5un4|.|KF|<');
define('SECURE_AUTH_SALT', ':pI%,tH86J./[p3)T12mb|-u#, x%ugQ|gyyon_xG+c0E+3=A+Pu*,!=[.v*TU#T');
define('LOGGED_IN_SALT',   '|}]JO|VPu1np=i8^/sSh+E5W:}6UYA^KGoi:ERA2QzsXvY|<A-kzX6)(QL-KNWz*');
define('NONCE_SALT',       'GspG)n7N691gBPPxkQd+|ahNw/(-2I/I &E<3^-Y^Ov{Tgfs#<>^=&Ma>)c@BL7r');

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
