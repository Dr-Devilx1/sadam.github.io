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
define( 'DB_NAME', 'sadam_hussain' );

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
define( 'AUTH_KEY',         '$i`I%RTSL-`16UFzX`n6 `> +u{,QX,.OBcHaup4~`Ow]uB*5yk AN=Q3;8 7?k(' );
define( 'SECURE_AUTH_KEY',  '60>KLw?F|e(%qE>2I$58zan3?yw#XWORJJozS9w ):PluFMbT+dX3CEB}Ui$hD$R' );
define( 'LOGGED_IN_KEY',    'P[j$9AWRm$c8Y)b+:oc$WjdAVsc9o_*^)-:%io6{P(cRS^XCrZ{(]y!B;JTcs9xS' );
define( 'NONCE_KEY',        '@WP*A8U+HThN2@cQn~&Bm,_!X)MPm2pura#Znp:T/u6LT%9oCn|+ilAg&;`Zmzdx' );
define( 'AUTH_SALT',        '^E5eOPcpOOLMIep![H2VTo@cb[}WftInWxtrS4*,5?;Z:-1!(ZX;aYwY%9,Q2BG|' );
define( 'SECURE_AUTH_SALT', 'X*_Cr7<VqAT?BraRb/Z7b1Z`s Y ~dTYs[JzKuSeY<o2`osH3>Db#KFi8/wfryc&' );
define( 'LOGGED_IN_SALT',   'H}idTk@OTfGoBulaJ[H7*-&*.F4r1q2%%_tkcgX9^;Om9N!DOeX:xMj:C9]1mN^W' );
define( 'NONCE_SALT',       'u3S!,;8u0Y]3PJ|Je>bv`5}x[a/On9Qs?0o=Vq]{tE.&3I-jT=bHeshQIR_Nu*iP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
