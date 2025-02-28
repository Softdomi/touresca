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
define( 'DB_NAME', 'touresca' );

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
define( 'AUTH_KEY',         'sEE/y!OlQ+iQ$GF<et?J44*z<(VuIH]NF3eeI~G!HA,]h;LOz3~f8f@A-MDQ6 mU' );
define( 'SECURE_AUTH_KEY',  ')3Li$RqVDy .T^12N)ySI`#UC0{>}3Bdrxrx`aL;#7%I0i&JZ>Gc^&tL_%6Pjn-A' );
define( 'LOGGED_IN_KEY',    'Z5Q`,M+I$r>e.|^+ct.h<km`M#w&p%+~>&0[cvy=6pV<7LR)8Y<~e4o` L6,K#zG' );
define( 'NONCE_KEY',        '5edJZeFXp3!2.S&uqThO#5g^lm_u{@+Y45uVhw3AnDuAb^0|6/[y:wqmn=Q{Rg@p' );
define( 'AUTH_SALT',        'R|[!W{w,ySv#Tgr]op/!_87  %^+wVKF4([QYU{rxy`kPFEC&z6!Z%FA7v ,T4au' );
define( 'SECURE_AUTH_SALT', 'g);ks9ALhZ<LZywVE >jdMGLEe+F8Am5du:Ia}5[y=jAU}(^?6/kbxc/N,aq=&^S' );
define( 'LOGGED_IN_SALT',   '(?#,]n16iwtkw{ %nBxIew$CE&5rs|)^E39#9DcMp8{cvUPSB&p/ztVa+HS#on$c' );
define( 'NONCE_SALT',       'Za%=0%(`I$>RC/AH;p<kYM`s2}X6{ODA{lsodF&IT&JFJ7c^,t]I,pUa%D49G0L,' );

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
