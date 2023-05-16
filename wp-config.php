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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'deepagupta' );

/** Database password */
define( 'DB_PASSWORD', 'guptaji@12' );

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
define( 'AUTH_KEY',         'LG={d2,6T(:m8TLm@e-==@i|MZsp!ebZ@$ckRyMt`j~=p8.3WSAWHNFHypjHFtpd' );
define( 'SECURE_AUTH_KEY',  '%a1H6)p%(n5f4,A=e${kYsiA?o}vQC]xL]IxxgvLbcLs1Vp1?[^+90Uw8b& p/Ln' );
define( 'LOGGED_IN_KEY',    'FM@&s,+PVHnT3k@}%Z(8C@Vl?*E^vtGKEq[[<GuDilkE+k5z0|1?i_k!kagwdo7k' );
define( 'NONCE_KEY',        'fk 6W5kC_|4HuD21<:]$eC2)`i}22.D^+?`.U>0fF3^o/mN`%6!orUa}HFlWw-Hn' );
define( 'AUTH_SALT',        'oom}}%+_lUZ1F`Mwj2*hd_)V3w/o,B*+Mj@?Q;0e%PY#(EBa@$=|-/,T3 vSNFFA' );
define( 'SECURE_AUTH_SALT', 'w`].#fU Y QgEr!wvDtT6 *i0+OCRt2_]&<K~k`o`vt!+);!:baHPKd[NRHYswU!' );
define( 'LOGGED_IN_SALT',   '932*Oi8WaiOm7=[/V6J&6l23nUT`y^t+:II>Y@l{WXLK6)Ya%lmGuR/EO;>_h3%B' );
define( 'NONCE_SALT',       'Pl^9yi6+iez)6&,N1H t6}(5y`}JPy@scUWX3vsJ|s!M>hUtg33_uG/?>`Swrj_r' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
