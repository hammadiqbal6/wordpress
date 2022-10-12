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
define( 'AUTH_KEY',         '?sNcX2 :2(rhU%BMMRPIYb#G;mr)L{*: *))FmuYr|rHJ+23u,{$49xdBwbVOl}N' );
define( 'SECURE_AUTH_KEY',  'k~v}H=pKA{,(+x!|yb*@Vq#d0$_7/2iS<5D9.cs0*#^7nDV8}mGcIj$s?ODoH74C' );
define( 'LOGGED_IN_KEY',    '99a/GNBkcmwA>u2bF[hDxqEPHcokK{+8#H +(d]s.d~NT5~`Y-<Lv,tZ,,>ZG[~j' );
define( 'NONCE_KEY',        '{tG[[ffxNFsju2E;pBlDEOm4@R-lf{(:-M9!0!?j,3YNy[+<fk&vb(WZN#zPkJR,' );
define( 'AUTH_SALT',        'FHPYg<w`X3@+3%>_C@Lflm@~Q(yIf XQk+F>fM5CV>wp7 eFivOiQKB&+FNrNuO^' );
define( 'SECURE_AUTH_SALT', 'OGwtiS,qd_nI,;^K:7dl0f4(gney&$RN7@8[8s9*wLD6x0K9t/l%t.+4l|0?lig|' );
define( 'LOGGED_IN_SALT',   '>#@98LEYN{+[@[NmJLA<PBK5Kq!jGypXTm|PGHpIH/Fo0f [Nb_LxRo]PXN U*MR' );
define( 'NONCE_SALT',       'F/@)+xRLc>=o``]%AQ^hY@%p#49:_A(;svF^SJ5*L2U] 76bl=YJl3+7rpJlow {' );

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
