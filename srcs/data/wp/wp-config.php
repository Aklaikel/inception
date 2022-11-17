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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'username' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'yG/m(tJM(u/;&0e0(@;OWZmS,5KenEk]lKa5#TVxH(u3kIW-P![lpPvXYS6 EbZE' );
define( 'SECURE_AUTH_KEY',   '5Eo2L.^3d2tSKJ99RYu!3&H;l}(Z`}ghu(*%[0Z#M,F*)/v.?os,IDl<WXs[iOaa' );
define( 'LOGGED_IN_KEY',     '.:{Y2~ZK#yT:pJX4(S7>dl;^]5;H{?Dn/UM(uh.(hOH7@]R`&`4;;OGOVUaMd}aI' );
define( 'NONCE_KEY',         'jtA]s`4yWeES`{,<2_]AO<QO]GczGe8r%GCQo>){:P?^.@pjwwMR0oC8Z~.,V$k6' );
define( 'AUTH_SALT',         'wpdnKR4w|2sINYE^J:WFo-W.U^[Nq!z=J?br5=79fP^mtiiQH-=j*!6WgQIW`ZNj' );
define( 'SECURE_AUTH_SALT',  'mNs9qfie?2iB{:4&6JP+TL4k)|AcSZ#]X*.2DJ+FyEcKPj#^|Zo8$lm@t%[d8^[F' );
define( 'LOGGED_IN_SALT',    '&<6KjWra5<l2V{ +jb4u %mS<t;e:k;$pJJSRVvtn[e1.n{p6GPiPazg(8!? 1y_' );
define( 'NONCE_SALT',        ',VO^*<U/sA h|I^<dEw?vn8U1]Wl-g$pVOI2ZMu.UB|jU!C]moLK274{2(Q76GU.' );
define( 'WP_CACHE_KEY_SALT', 'localhost' );


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

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_CACHE', 'true' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
