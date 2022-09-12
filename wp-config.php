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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
// changed 2nd paramter - orginal = localhost
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
define( 'AUTH_KEY',         '~AlB,4ZTyXAqor_q(t;]&K<Qoa&QxdD#7/lUYr!5ExzQ|!:]1(b!C,J9@zRs0bXv' );
define( 'SECURE_AUTH_KEY',  '&q!J!}zy=/<}gu3b-c8-@gAU:E2X$E4-|s8h3H(A|bNY2eF<gm,c/k_,8+_@Pi5U' );
define( 'LOGGED_IN_KEY',    '8})LF^fHdH$71O<[GDyKH(^19(K;{t`(p0HWD.9FY}?{OFlyCNjH!C*G=o@y_cK9' );
define( 'NONCE_KEY',        'nIZ@~_yn;!5:G],~WU[5Ii<3HD)m@jsDZ:Dw:Y(d<V`7:^$YARV^vBiw!9=g5{Pu' );
define( 'AUTH_SALT',        '!#@(u;Y93NLz6Jx8X;z~`9$:+FmV.i>jI7z&zkk(,Wzz9>y|a(/%W/sWZxmIJaUu' );
define( 'SECURE_AUTH_SALT', '#<z%U}X%JWR,FJA%i&q6kc6$P~*mV^pTbvw W(?pR&?HEoaB#L]mr@v`UA/7(;D>' );
define( 'LOGGED_IN_SALT',   'dYN5Qs|jco8bKNi|P~26!p}-q/S!Zq3bC~[rk3w&08OYleMiI9.,#FY*lFX=eolp' );
define( 'NONCE_SALT',       '`^]*0EdV;`!JXRRp$A.bJ1/p,yVFr<N*a2m2vgwX1Cp7=+|UU{k)E8c$]fQeb1!U' );

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
