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
define( 'DB_NAME', 'c7owvt24' );

/** MySQL database username */
define( 'DB_USER', 'c7owvt24' );

/** MySQL database password */
define( 'DB_PASSWORD', '4G456des.' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb103.websupport.sk:3313' );

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
define( 'AUTH_KEY',         '{7NTQzX)kAYyiHnb?v~kO$u=,Xg/r].E1:{ZMWa<M3cb;%m*# 5t,*aOF[g(]vWT' );
define( 'SECURE_AUTH_KEY',  '7y#[2z#wKAA{,Z7B5Ku$JH7wRP@T)2MOXe<EsARvb.F[a/jF]QHuz,Sph+1.#5R ' );
define( 'LOGGED_IN_KEY',    'vx+5_CGovEtgIJ1b8M5/2XTlgOWPWC%lN;Po6uWit=N`Ov[e_Ap2JaGZ14@.!|7L' );
define( 'NONCE_KEY',        '/_#ebrHi]|; MA$M~#`[eUu4VE@V7Ol*]xYX&6UR[(5u@ePe}{72B^xzZE,|D8FT' );
define( 'AUTH_SALT',        'L)2fjx=Hl4+j7hzRE@4;!Sv$y]K9C}Gq3k9e8}L|/#l}^Lk~?cnYwKx{<M+~EQy5' );
define( 'SECURE_AUTH_SALT', '=!{mxvAj@`XmbG{3ujPgvU17t WCVhaCmy$hk7jKM{If.3.o#mj8Q8cj+:IfW&T9' );
define( 'LOGGED_IN_SALT',   ' FQ%9k-Z`Il=,(n!)7`f@VcF}aP;Qda:<@%OB{Xz$(FtF`)} %;HY7aDzkP33(!#' );
define( 'NONCE_SALT',       'J,xy)<e,?AeY-9GXPOsD}ir3=wXfkU%6~F+Jc$99-p)mqJ)S~ZC;J&O6[H%{bZs?' );

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
