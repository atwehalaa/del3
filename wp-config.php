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
define( 'DB_NAME', 'orders' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}4l`q3CCx+K3&y4PzlxUM^k7p[}@{GB?HX|K!^_$$;p2JF);7,$uBCtylOss1Rc+' );
define( 'SECURE_AUTH_KEY',  '[dLUNuwJkN%b !EYJdD@INlyp(#HLpqQbN;4cd/Ow-ZAL?eNzn]|vi__~}}w0T}y' );
define( 'LOGGED_IN_KEY',    '`j4/{`!F6$?fb,B z~~DAy>2232oxM_>Ck~VyeA%QlI4TaHG/zZ}ClI/r+R>saB#' );
define( 'NONCE_KEY',        'X*pC-POZsQ@X[E7:3YsX_[eNCQ3oE!>flVuEE?ZV/^,5-iZk%B>mS$oO6zis&*A0' );
define( 'AUTH_SALT',        'qkyA2oJc#B(`R3V;Cbv^PqgEKiA89q`Z;Q??/7TS%c=V>*k0w.V!ggEr#P0HT6we' );
define( 'SECURE_AUTH_SALT', 'X9|=oN;JA*co]>SqK^tw )f:.b?}]7s$pOcY;1}ZWE&7:%~=Hp4Y)=)YJ^N?2G>4' );
define( 'LOGGED_IN_SALT',   'SRxEI?(w=8Doex(C}3Ul)zO0(^XCGd?dTI=kAKkbO|JcUiq*|}R*t@l)VX$[I6xu' );
define( 'NONCE_SALT',       'TCr47<6j49Z-ea@N8xWpcK39pF=]S_iwT@KK?oYN4Sw$/Cp_cEh.Igdex.VU[<*/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

