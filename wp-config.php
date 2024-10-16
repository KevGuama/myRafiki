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
define( 'DB_NAME', 'myrafiki1.0' );

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
define( 'AUTH_KEY',         'C`NO^ej_SS`2xL)^*NQ2od3:Bs$%LDtQiX5^E}?yqeBAz6QW7usNcmQd1%M,3YB,' );
define( 'SECURE_AUTH_KEY',  'z40{|wR$BhXw?J@&%>HL5Y[z#?G#ART%Qpw#9/IT9BY}c;X3<UtD6cCEhO0>,2XJ' );
define( 'LOGGED_IN_KEY',    ',NHr*Jm{fRlpJC?QVM{uS^:Q/bnhx2>#LdGo4%$Of6CwMcXjI+HJK4qZbFMA[yu]' );
define( 'NONCE_KEY',        'oOcctd$y6u6*G4f)3a9)rBL,d,I?5&-Z#6T]80%BF,271v~YJ6;nP-S_h^AAh^We' );
define( 'AUTH_SALT',        'IXf#T$w`c[HtI&|Hq[Wo-E(1$M}0ob:NKyJ^`GAD]:T4!9]v[RV2h_xvZ7/+)71(' );
define( 'SECURE_AUTH_SALT', '8jcY[w!>:=f5sTd`F3D[X;^yfT))Tk{!3W>nt)y<93|C}~z8HQ.F>mz,$Y9V}+ed' );
define( 'LOGGED_IN_SALT',   '>N#9XZ-*W(E#{>~>$9 H mM#@GUzUW.%F0uMB@ceWJd;mdM9F4~aVdU$L])}nR`P' );
define( 'NONCE_SALT',       '9(x.WQ Jh`2.X*,`S*a`a+CX?U.jH51F_0*,!X)R$1Z=c+uS&io$AZVdUTn~1$wu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
