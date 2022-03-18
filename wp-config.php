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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_learn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '8MKk|$/SA&d!;,+,^Df^2j*wTutv`!Ou w146FaReg;]($Cq`T0^y][53d1I rK-' );
define( 'SECURE_AUTH_KEY',  'LAlnM(%@:$=[q4U QZQ@HWz(iTAH{d>BN>as:O:OpWd)1_2*ejx$M9%oP|FmhOn]' );
define( 'LOGGED_IN_KEY',    'u@18s4KJS(=?b%uk(p5S.2@L@Hm&eI3pRR050l{@mm-A>f-Q8IA(GsR(8_T$&fA$' );
define( 'NONCE_KEY',        'hN:VI3o.{9/.ChP(}`rHG(Mi`E@^G>:<3EPa[]DC.>h(oA{#?m_7z?ui8ZPO0IG7' );
define( 'AUTH_SALT',        'Zi6{7/cCbvdJmY3,L_y-QqM(V<WX!)%0k9$ S|6PQ1D,1c`X(*V)1x9=%/A5=IEO' );
define( 'SECURE_AUTH_SALT', 'ySf_t%%#?A6YB=Z1!Sp7Knz0:]iN!Ws/_%Fd{iq_ -whz6Vufy7?m:;Wz.*Iq~*v' );
define( 'LOGGED_IN_SALT',   '<{kCUywNasSh`(~lp!NN!gUP<tgnD|s}!c0#.YCQ>S>AIi32L<>dzzh[w?sV*4|j' );
define( 'NONCE_SALT',       '*+bp4H3K#fuuv#5t)Uf9_9.=C!XjTV!z=WsR)*&t9&GAZ9m=%+glkr.0vpQdluF=' );

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
