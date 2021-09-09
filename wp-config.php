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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\\xampp\\htdocs\\sandra\\wp-content\\plugins\\wp-super-cache\\' );///home/ixafgy0av065/public_html/wp-content/plugins/wp-super-cache/
define( 'DB_NAME', 'websandra' );

/** MySQL database username */
define( 'DB_USER', 'root' );//dbsitio

/** MySQL database password */
define( 'DB_PASSWORD', '' );//g2D1sIHolC?2

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';_ krOJIlh{<H#WR8[6v0b!s-ttV]fDwF|e!~nU<k,qP_&w*7X=GBTB+vLW=Co D' );
define( 'SECURE_AUTH_KEY',  '!zvugE8Jz%(EMoQW`CgV<Z^Im&W1/:7<+=`$Z<]A0`D0jd/x&ffls~1AipZ>xaeR' );
define( 'LOGGED_IN_KEY',    '/3r&B4|i90nSxpSH/fD424TW~Z?ww/DZX/+Gl]> MV{,z2T+gqWpx?Ca+QjEz4Wu' );
define( 'NONCE_KEY',        'CM|F8ymRKw3$,t5qAM4f$e,}y0W.P{b,P[-;k?,!rds1hh9UQ7nXh!c48a2.=TFv' );
define( 'AUTH_SALT',        ']yIpB03kLb{ZoF2*820?|14d`^}u&j4jUhtDouN+{35G<.!ZB@)dw=@^^?F%WjGy' );
define( 'SECURE_AUTH_SALT', '6qJ{jH=H2h)P)Yb)`p%4}o8h#z2m/NMOX}]7Bs}OMH?>C&b8#s+icnj7j0JUeW@@' );
define( 'LOGGED_IN_SALT',   '|w.?-nY7G0ylFJ@#Gn{IjK81ycNJ+ZZLXW+[%?-~>c`?-S7D>>fepN).v`WQMAe-' );
define( 'NONCE_SALT',       '@_|1jhugY6MYp6&%w Vt$!tn6~IgPA;{Oe10RVyS~Ew(aIE{RY)S|0!WUNpp#dX~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ss_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('FORCE_SSL_ADMIN', true);
define( 'WP_DEBUG', false );
define( 'WP_HOME', 'http://192.168.0.108/sandra' );//https://sandrasuareznutriciondeportiva.com/
define( 'WP_SITEURL', 'http://192.168.0.108/sandra' );//https://sandrasuareznutriciondeportiva.com/

define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
