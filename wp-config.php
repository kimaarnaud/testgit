<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ghwptest' );

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
define( 'AUTH_KEY',         '+C@FQ6%@>XIQzPDSD^DY+YINH2]a,Snu@*xhS4ADKoOB;cWY*;4-__Am?/$S|FJt' );
define( 'SECURE_AUTH_KEY',  '^FRuLY&Ey~P&.aqGE*p5-Cu<}#i*|@TRj@EU^j2JSjQpr3T)~ZV4@]|o/,PWzO0j' );
define( 'LOGGED_IN_KEY',    '7YjG.jqme-KqZ~2`t|]4Hy)hB<fAUtiP=Ig={`z;ei%Z r*`]qMbcb rk(&mQDY%' );
define( 'NONCE_KEY',        '$h0b3z;Np~g<aU~yQ/Q@<c@s[B;H^pBi}xS>W).D0WP=f,?tlUydlUgPyf 5c-ep' );
define( 'AUTH_SALT',        'Lf6b/;vCx+9+:HBcs!%c/Ype:/NQXaDclh$J0kR!vh6OEC)%U(h-k;_QJ(@KWzZU' );
define( 'SECURE_AUTH_SALT', 'Ryx0/sg46?B4t+)9|XyJ?n2}>jwMmy K;<Uaa~NJ-wp89p9A?#bj0[t42{+={?Gu' );
define( 'LOGGED_IN_SALT',   'p|Waa@H[efer(@~h_qy&,Glfu#&CJ~W31l@NY+jS+BjF#1{9! b1~LMt@9(YeED@' );
define( 'NONCE_SALT',       '/IZ=AQ6/YIhuV47M9~2M>Q*tT5i.w4Qw>/{&Q$0K0}Ov2<_klOU&GdI6WTL.Vx E' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
