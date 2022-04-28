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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'L2o,yR}l(J9h,Hk]qgj5HeJXgTIZ3VG!(T^UX%xyXdr]GQ}z>7WT5&J.b!*]`,=o' );
define( 'SECURE_AUTH_KEY',  '}+ztK[5$92#nSW,DDRTP479Fd?Yn[C2fPtiRV@yy[Pl1a2^tm^k}KSy6m$HJf/`(' );
define( 'LOGGED_IN_KEY',    'N$%5s,~73Zg5t $>OO.I(mGG]/4)v1BUVb/cO^^;^XSF_R&AYg]xL1yp>A{!(YcT' );
define( 'NONCE_KEY',        '#-% M(rHR@8j)_g&E.,xThRNS._^>cZZopEdO3xOSXKwCt86nl$8|UQ{H:iglB!O' );
define( 'AUTH_SALT',        '1PQv-+0?nF:oSrez[@h[gXIVXuV0L0+!X3{&%n#jLIt&-/sdf@npsDiS[8(?R}:9' );
define( 'SECURE_AUTH_SALT', 'csd;bDCw{O#h7Ks~nWA:DBv&X+TM~)Vq6_ioN!f2M3J2GqD`O&p+goA=74?Jy8&w' );
define( 'LOGGED_IN_SALT',   'F[ TW^!5]>t{4ii6^T*I8)]u|KuhWl;9~[V_fPUk3.[YcGwVB9Zbfajp;%([S}v>' );
define( 'NONCE_SALT',       'S-nZC!c2B-_NY9#/)AXp?<:z!2uY(_B#MNnhrj$K !G[Eq.]<LVuy>$2_aAD[XG3' );

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
