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
define( 'DB_NAME', 'myrafiki2.0' );

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
define( 'AUTH_KEY',         'N+vx^lfS~6RrxV_/XcoEc1k{lew9y*H2:,#|Y#uJtAPjL48P_/vCt&fb$]zD^;Qc' );
define( 'SECURE_AUTH_KEY',  'JMMrZ1v}3*RGdW}6f?+6fGum4tN1[M3gl:sh>y:g<c_oojes$D,l(iGwEamChb*m' );
define( 'LOGGED_IN_KEY',    '3STM:8E<?`pXSc&-x$H0V?c;l9+Z&LP6B?nP}Aea+ZJN[zV2*PlIF/*yQ|t.h PP' );
define( 'NONCE_KEY',        'hW)4y@gFvDyOg;t@}d-6MyF[5B!~@kg8Bl<lV|UBt?lTwhj8q#^~SuNl`7^~G02p' );
define( 'AUTH_SALT',        '|)8vHtYt 9iCC]6A?<MgVlzycOeHY,qaeL)YNr%z_1AusqN_F`be&0-c3 XL.UgE' );
define( 'SECURE_AUTH_SALT', 'v`0Qe7I3M `Ra&DN_;(O[ut6sEiDg9/Fal]~`C|>k;Z.84O;r;w.P}~8bCyMr1LF' );
define( 'LOGGED_IN_SALT',   'B8,,c3Muio 3eV}yn-D&2M1f +BF$nz&?OCvFAA<~FvO?EcX?Hpus3dy%Y<.$br;' );
define( 'NONCE_SALT',       'O[ZYvASuLxgj0A8YdiD2qVUK!VI,8xb/hXpeze}8a[l%-([9Ea>sdeNO{X}&Ul=)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3_';

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
