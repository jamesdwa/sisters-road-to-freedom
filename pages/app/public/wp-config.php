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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          'tWTB`om+|WRbSoB>1eAhw;ni[4)*IT376rI90IjOS3&P_>?lwYz[P[UHYjj{ppk9' );
define( 'SECURE_AUTH_KEY',   'E:6??;%p(X56fy&!trBNIXdnAh;U&[>q}e[PpILDpYDf7^^b[*7-SUqYz/z9P4WQ' );
define( 'LOGGED_IN_KEY',     '[ ozHXjy5NW<rDSvaM&r:,:f?3Vj(nsp0U27plnT}rwiG20gL6,[.L%&8.Z7Vi&R' );
define( 'NONCE_KEY',         '~ usLu}@XVkbk3q[z5v<%O_IOq~?..7Q}Y2M>zie6${azYM|Qc~nEC&*dD^,(QCC' );
define( 'AUTH_SALT',         '~gmB=852D]D|KzcA@K<)Mp<({;yWs_|h@LhWf.`8*qEd`UGo*/#c,84RS)_3XP{Z' );
define( 'SECURE_AUTH_SALT',  'l|.uZd]o3G,&`j=UOSXg/Ftby]vgiGucK`^eI&PSAL|ri}XU4{eZnk8_nUyVW7kS' );
define( 'LOGGED_IN_SALT',    'c&l.i0s[%OTvz*XC:w1]mk=2feS8DV* X`Z-WWE9>^04>A;ikZ;l!I6Fo^%DQ2;:' );
define( 'NONCE_SALT',        'cb45*B0tJRdM~f#v>yW}OZaysNc$m|MW/1(w)s-p`zk@hsPvk-NKK)pn*04I[QO[' );
define( 'WP_CACHE_KEY_SALT', '$py{My*;;a_+Ox3X$+Qd __O:^{Fyy*|u1:iUA PNl8JiZ>@Lv:%Gk0lNi3/8%#v' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
