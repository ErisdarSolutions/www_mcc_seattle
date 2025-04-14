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
define( 'DB_NAME', 'justirl2_mcc' );

/** Database username */
define( 'DB_USER', 'justirl2_mcc' );

/** Database password */
define( 'DB_PASSWORD', 'admin@123123' );

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
define( 'AUTH_KEY',         '[`WVB-+}vB_g$#IAJ4|`SuVjyq^hljVr`_=lXg]xwvc3FN^uxNU6/~o=|:TTL_4O' );
define( 'SECURE_AUTH_KEY',  'IGfdpV@Uf{unMmRK[~1t~7Q<-{v#-;{xsusW^b1g}=y?UMVw$)2r6/`t<ra=F5S7' );
define( 'LOGGED_IN_KEY',    'S&dDr7/Q3npLWf7Q9&_09Jn!(Nx!e&|$6p%)V4hMI>fJu;*PU5.l?5R+FNCWoXNn' );
define( 'NONCE_KEY',        '4 llzq=I$1;S*#N$t^0^Ni%D;TQBZNo,x?Ubjgrzl/c2/]zU5WmwjJ(3kN9@oF*u' );
define( 'AUTH_SALT',        'u;E>DfWqAo XW7w)jH[ mVj/-CV9d[}WpLjQf=0%C6@:Yw5(JTNd*:a{fskn8ugb' );
define( 'SECURE_AUTH_SALT', '(sv)(qw^Nsy~&+!gbR( 73?SIQ`[d`<L8B#b@jw,^+s)9!RbK;[r<?6UX6 7eQT}' );
define( 'LOGGED_IN_SALT',   '8USy0f1,Kjx(kloG-w%hoh_21WdqqrhI%k=)$Se0S4r^TXqEUB:q^?pC 7ki_g2+' );
define( 'NONCE_SALT',       'bB^o0MFISKF:1-f$zt6&aX!(2v^v!v`#@HwQG(nID_.(W}XlGux32,:9<FbsB](o' );

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
