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
define( 'DB_NAME', 'smartthingsolutions' );

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
define( 'AUTH_KEY',         'G>M Nm4mK7jI0+aNjw<  9EZv_zdd;sv^8;fcshkTt.ilc $A*DL*I39EMKg^kj^' );
define( 'SECURE_AUTH_KEY',  ')d.{|z~Oo glIzEX>gX1?NhSd<A3YFcjN6e6[U0{f8)A5ZGm}1O`oPiF)_Zt9m<O' );
define( 'LOGGED_IN_KEY',    'Lk!yhG:s;#cAwp!@%qb$u2iXOmmt$)4%j0dB=?7VMv&WG5G/Cjo*s|xbU4QkTFI}' );
define( 'NONCE_KEY',        'K?Yk<n,uRy)HWH/0lU.5%U#xgqfYK^R^bKw2n)sDS]&u<]D2dfhEL,O7=b^bN1v-' );
define( 'AUTH_SALT',        '3H@gxJIY3&(8;-Z3ZB@va(HrwkoOtI[1ik[qbfd k[>2ZSy]NHzFP<& jx!5)A*+' );
define( 'SECURE_AUTH_SALT', '3H@W/6q@R0@1AK:W^6(CWDJ[f(C>r8qv~wO~V~Kquw#E,>UUn]=(~H!2DY__vn^k' );
define( 'LOGGED_IN_SALT',   'ycX7Ra1,GT1iBDK@NI]OnwmYAyf};&!`58;*cz$ubOA0:a? pKeHx<(Z)^gYTQz]' );
define( 'NONCE_SALT',       '<8uhj<18hoU1N/Ad~4 XQKpC~_-Jb*1U}M`}U$~0jziVoRR-*Yr]BFZJ1>8b<m>f' );

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
