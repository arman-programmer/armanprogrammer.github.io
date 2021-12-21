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
define( 'DB_NAME', 'itShop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '@.7SpFQ;F|!j9<$Yg9y),n93k7.~Oqmn@$m`cf]gi8_0*p<I<)2F,*6__|+4!Zw=' );
define( 'SECURE_AUTH_KEY',  'LCF^V8n*l*wfQ$#14@s0XL.{uAI@1w~fk@R[Sn8<}gyG$_*x=vyE3S6+Y_I>[2d1' );
define( 'LOGGED_IN_KEY',    '8}a|Ig62-){&es!G>bk@3HVVOXX{cCkE}8b[*wJ,6A=<XAd}$<gS<aYn7nh-nbuC' );
define( 'NONCE_KEY',        'V[}1A[_* xOfBJr FVj7&`@rK?m$$CNKtuRE?2+MRF,1tnHy_W6vP;I?;;A@&}ue' );
define( 'AUTH_SALT',        ':DlRdX/L$yNBCKywre)?lJD?HI|kcTDD|KNqQ+BBXe;pq)EfurAR`UUU%S,oC>(9' );
define( 'SECURE_AUTH_SALT', 'J@8Dc~v%kE6n#v1Bt*KjruxEy017X8t9Q,0JeTqz2E[=iEeIA*)nX~$}Y`cOIiZw' );
define( 'LOGGED_IN_SALT',   'g)8oUO _qeg;e4n(]Ed*`OBM@,@t=|&uNOo8x#BxP`fk}SuUPk920@kh3xxlk>vA' );
define( 'NONCE_SALT',       '!f6II-tFj8,/LL%,|k[JUdi$R4S@NJHEnh|@!]?buVnv{ZOdt5o~}Cz|eUDs/aRG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
