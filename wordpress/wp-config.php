<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'robot' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SJs5EC+x?!5Kq7XAgdtC,AI*Fz=Zwm&8[:rxC2|xr;y_W^20;YK +l&t,hUAQ;%)' );
define( 'SECURE_AUTH_KEY',  '3.dfL$o,K6f6f&l{IR|/~{!O`3GN{Xdge8EizuBF|b)SIgpCGA+T~&$Ea?8q78`V' );
define( 'LOGGED_IN_KEY',    'R/KN.]hh_~=cz[d*JaOo5iMzJZ#z3L;j(I-Wjm7Sb~3Y(RGB`Lu;)k9VL ^{@.m1' );
define( 'NONCE_KEY',        '*J2yme ihbVa({jwKgi t7hBq/fY!N1nas=)3KIARdpGlc*d| wL(:]7LqfM;-#v' );
define( 'AUTH_SALT',        '}sB7cXEj2QVfqfDme-/]K;_tC=$FC#YA%4.W<s_?-}B%QQv}U_?BYc#r8I@!C,N7' );
define( 'SECURE_AUTH_SALT', '5HHt}S6w?dc-R+#~hncaJNv&^]p0a=$[VOAMdC(RKS_emu~pda -@(1!]J>B_nv%' );
define( 'LOGGED_IN_SALT',   'n8{B^g{mT.)@6L&&lJP6Nuo!s]]$@NEMl{NUHq@Zuzny8Yn}SHA+e!apjgQ[p%.D' );
define( 'NONCE_SALT',       'DjK?3-b^r <z*n{E)Epc;^E;DNFKX]6bD{]qPXcpuiI_:u[.AWdTQ$P0NiLK!Z f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
