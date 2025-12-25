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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\Nhom6_ecochic\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'Nhom6_ecochic' );

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
define( 'AUTH_KEY',         '`L[&}685f-##-:}&@EoCcrvz-{._8=f^b1JNiH2|+pE?x<w6:z:(3BV~3MQbu43p' );
define( 'SECURE_AUTH_KEY',  'DBOrHUOV<y`$bc%|7JvJAjY3LnpTIDRz8Y,/GwAzGmfDzVV>_RPY1$o3/*o|V_C3' );
define( 'LOGGED_IN_KEY',    ')O ZcuB3YG6pP[aFsr1>]Wl]VhXxAa&WJsyX]5b3=h1Ko_9]h(nkmpR.LADblJa7' );
define( 'NONCE_KEY',        'zsq^8:it81Ta=?(>OG=GKeWl]Dv[ABX-2P$jI/w6Ipx{NE7Zox4WJ;!h=k{#s-o}' );
define( 'AUTH_SALT',        '-M>6tY&x)KRTTR/ PlfX-rxBL.-Gmw2yiXm9!dn_I|hMOHvoo aejX*ejB}H)$Y]' );
define( 'SECURE_AUTH_SALT', 's}ube Hutnz~,K9r$zOO)*yp<dXwGEC0#3cQo0v)5|]6$!M%@9!~mzI9Q8BVEN u' );
define( 'LOGGED_IN_SALT',   'y28.>T6}Lg~;;zdqz~WwN+Nh$@%9KgMyUS,ysSh!-F* KeRbdvx[~}5j@7Zdf*o-' );
define( 'NONCE_SALT',       'fH^oB5/LHKH.F<jM!N|*RE9#Nk7w6cQElJr#V|KHV{CDft,!`1ubU2_7s*wjs?]D' );

/* No update new version */
define( 'WP_AUTO_UPDATE_CORE', false );

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
