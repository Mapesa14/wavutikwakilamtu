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
define( 'DB_NAME', 'mifupadb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.YrP&b?FpS2sLo!s?`(XT6= +<kumz0MSbbSCBVtBk;Y;*QgD1!R1]Dv*@gDSooC' );
define( 'SECURE_AUTH_KEY',  'Dw@Alh*;CGnEf<DVV9aLT-ZRx*#ww6*HD|:sVyqFuz{.ZmFO>ZJ$#eAUv*gX$EJz' );
define( 'LOGGED_IN_KEY',    'OiL,dH{/HoZzHD`0J{8Lo/hl f|IKH^ZiUx?7&qjI|:JvB{E[}Tt7V9HUQ59` L>' );
define( 'NONCE_KEY',        'V6>qA}9;CNa~Lv*uQ.Wzj^$p:`V(Y$],_Yw=[bB*Y9WBM3L9K.^%g ^:jv>3Ow.6' );
define( 'AUTH_SALT',        'W_W6/Aj%0vM;74i$RjiRi1%63*2JN_r>}j^|Pz.RU]+47#@-?ArK4f6~tFPha,08' );
define( 'SECURE_AUTH_SALT', 'Sd1.ru)GWRaFMvgfhun3/ e%5uMZ.yq?IJb?n!r<v.rdNloysQbOsVKyaB}+@VwR' );
define( 'LOGGED_IN_SALT',   '43TjJ4|2(,;0Tmr2xnw^77SfeK^XmGw?ypp%kI,P]`<J*($@$2&DsF8Rr.b)beC%' );
define( 'NONCE_SALT',       '1Xw:3TA`:EV*#9?a2J|w?!nzSr-S;2Q`0XDm8r+0S7YBA>P+TOgJ,n4:mU?IJN9?' );

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
