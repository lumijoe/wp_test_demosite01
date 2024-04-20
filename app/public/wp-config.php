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
define( 'AUTH_KEY',          'dS}1r9B:(g66dvxOtn2$J+ [; R 5#eQ1uA8;j4ffk:fM&:2oV`S}r+!j9@n![87' );
define( 'SECURE_AUTH_KEY',   'C7L5)w%9n(kSGi8,7b(NS*NQzm&J`TuukY/YGFsn<%8$Nr&$|wI;w_|SO+2zt@3P' );
define( 'LOGGED_IN_KEY',     'p{TSN]cbwR#Sdq{L?|JR@y:!:EMN-3EMA4~fC$HO3p[KZb4i({}4 Bo`$*N(X;To' );
define( 'NONCE_KEY',         '_<-Qlu*a!W7P^qbKYv:1X*yA3f9F9!@sQVt,9nbw~;Uw8Z7Om=VyO{OQ+*p5^|Ub' );
define( 'AUTH_SALT',         '#Iv6BFOkOH)]-,6xI<SAIbn</4,Xm[Mmw%kZFL(<pczk,~V> ASyL8 If^a#L?vm' );
define( 'SECURE_AUTH_SALT',  ':{#65{^3iz[iU=-FY[BAIr3C<OVM/(!M}PV#(]s;fb4Ii/4Lc*>,xH<|l:zrQnGd' );
define( 'LOGGED_IN_SALT',    ';|$*krMS5)8[|g?5ARU{YI,vXNC42}Bx8fOE/gk6X${*Qa+/</LohxN.p;#)t~=G' );
define( 'NONCE_SALT',        'M)OfXt|mhtR.Dn<;Ad0w_K0U4wgImGLEosauj]6Rw,5{6z-J7&t1QS(*mHw>D)[s' );
define( 'WP_CACHE_KEY_SALT', '5&z?%yDZf! qFzY;]+b{)*.lU`*Aj=H7?^S/3[CZ}I//1Q7AWxhhQ`?.KUsD()h;' );


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
