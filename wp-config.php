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
define( 'AUTH_KEY',         '{.$ALe{vt8TMmrwHMxdgrit%s:G.R7`-Gqw= `tib!x jy!vGZRf)B)~x|_0nFBd' );
define( 'SECURE_AUTH_KEY',  '((l *!i@oz;Q1D]%T:[FP}sl+&cyV+d)P*W4pg9}e9O+ w.Ldi}Vd@vEPIyc}oso' );
define( 'LOGGED_IN_KEY',    '/I&5qaM#!w(Q~b37 L(B3X+/^pfmtgJ,UU_t{$i-muU0xuMI !u8<<!>+r[1fttW' );
define( 'NONCE_KEY',        'qj[JAH{tWJu`:3}ZnjUi0z}!I&/R5kUuN$7> vNAb2{Mu5jP]:F.GDn3H?%ba/r!' );
define( 'AUTH_SALT',        ';#blA?rQ<`M#i;(2P;CL+<4%qWWb7N7$*,e7cI]P(L9OF4x=0I`<6P-6|89LRom.' );
define( 'SECURE_AUTH_SALT', 'szsU7,2o$)*Vy%^,>c9X7io+K t2AL_W1Rj|)&+_!{a<OT0z&%l=v5DZ1&3L1ht(' );
define( 'LOGGED_IN_SALT',   '|jI$4)8](aSYNOkLrSfM4f&#-b>yMa1o+m9= (19-<2o9~XeZ$s2_9}jsW*VGvM!' );
define( 'NONCE_SALT',       'mlEO@`jga!y)qVtdi?]xXW%v}#*KA]<{6LrZ{Xi,fSPtpeiG0Mlq!>M8=Y`^e$Qo' );

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
