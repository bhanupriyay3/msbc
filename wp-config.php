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
define( 'DB_NAME', 'msbc' );

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
define( 'AUTH_KEY',         'W4m*xo*?}kWOGi7~[vS2^NJ/+m5$2YW;/x|{C}21<b<.+tOzx9@jCVR1Tb0aVhkO' );
define( 'SECURE_AUTH_KEY',  'mUqE$(se9tlJZ8%yV/Q+lEaeNepa[N5WZhc/K^0,.GLUT}HfBn^]~L0QQ^{T;V8F' );
define( 'LOGGED_IN_KEY',    'HJ,zwsju/clpmsP]@ZBP.&(ks$G5GYAzp_3rvhk8OukL*2Bb*@JS0|H rZ%7YT0}' );
define( 'NONCE_KEY',        'tQCijegv4p^^88B1mo*RU@LH!K{@8;o#he7F@*;]RU3*rB,y}Q~@dq<Lkww, fMA' );
define( 'AUTH_SALT',        'Cz-L;Co;Y1!##Q1m+K{<#JnBi}#fT:G14s(,,!c8,qk[_PEso3HWJ)i6Pc6FiY)e' );
define( 'SECURE_AUTH_SALT', ':Mm^7$g(f]CL|%B?L?qaGnf5&*kSoK6C;/uF(v_Xp>%&}e#Z1P*WtZg?.8Jo;B_/' );
define( 'LOGGED_IN_SALT',   'FGdQr|*9AblfI$+SHxK:/tTSMn?F#zOScH(S/c4.h`5C<-i1C|M3wUncce ^fYJH' );
define( 'NONCE_SALT',       'UU0G3_E,v?Dvn;&gzLK?|h6 h}&s4xz,`F39UlCBo^(TRl#x$Mgk!KeNZTV=5IVC' );

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
