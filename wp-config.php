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
define( 'DB_NAME', 'sadelivery' );

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
define( 'AUTH_KEY',         '/?Q5{U4;A)K<%0dD|+11Y)IzW(B_%zlPq~EiEVy58[^i p1R^?[^8LGm^H+9dw2]' );
define( 'SECURE_AUTH_KEY',  'QpNCBemp@iX<VoElS>ME3 %Yo6l5|FU7<GC-[RpY(n~0nfkZnf_c;IWBJ1)#RHd}' );
define( 'LOGGED_IN_KEY',    'H6$M~ax6~44pSQYYh%Z8fh+763y~)+(m9V</zHRM?J,=0tCj7ko_H[s)B%c_*GVk' );
define( 'NONCE_KEY',        'vIx|p%f(a=),6*AX?o|7]S$J Z!;*4:%%A>%J(eS%;[;Clc_?VgFk+=BO.Wy&O*/' );
define( 'AUTH_SALT',        '1PmbMpXG(;PjdzNXE!3jp-AMGXYd1#rw@D_@ ><wFyorH4+a!ZCY[YjH;S>$rotR' );
define( 'SECURE_AUTH_SALT', ':tX.4U>wI4*=EC/A-FX6;$fq|G];D+w%PHtun6wy>k(GDVSEIyga;.u^+*T5psA3' );
define( 'LOGGED_IN_SALT',   'GqNn gL`5_|zc~JRRc7j*e~$ecTfDR?;Mqw?.Fd%L/18]=I{XBDU#k H8P?gK .U' );
define( 'NONCE_SALT',       'FPp*&3(Q1i6qyr4zyb:HZSIFWseEDM^X^89:d Q_$v2RX_i5vfgvq[NW9~xkj|3j' );

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
