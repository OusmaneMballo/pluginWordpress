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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-pluggin' );

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
define( 'AUTH_KEY',         'h|S9)k$@Qx0k?@AnV>#G]XyDclQpv=!,,8CMtq!gvxyOs3j-xsEiXpWwtR`T)|l2' );
define( 'SECURE_AUTH_KEY',  '*C(P> 8;T}]]S/Km5?|b{GoC5?In&Mf=@Xh=;s@MgF!6Ba< `s$dy]SM5E4*zz)3' );
define( 'LOGGED_IN_KEY',    'b~<Q;TB6$ytszKH+;j8V.{4A{L_@*R)YE-} Jz.BgS9SDQLXI270gi#nhBe])Zqa' );
define( 'NONCE_KEY',        '[vh=B5b=}[ntueSOmR3N7Z./2 R)Hot[3sc>uh BjeJ53u`EA?Y}Fx4AJr._*,q$' );
define( 'AUTH_SALT',        'q-33ox0}k4!5Z^GQD+*E+E[9Q0=t2SwY$I0#~H/}<*G_TN&(P5 lk!`3VJ||PNi(' );
define( 'SECURE_AUTH_SALT', '.HR2YvM){FcVpET-nIng_*Gr@j+B+Wa:$C+QjL0-Q?PAT(*F^gaJ).Ea`;DCTWd[' );
define( 'LOGGED_IN_SALT',   '~nHz@= )Ic!7?-bO`rmk!|ms{rR52(^$Y@|^k83l_ATGD{OCRlAqO8@d,Nn7?;3 ' );
define( 'NONCE_SALT',       'A{Sp<o:0{wDuCg4b3r6[@= 0U2dmWV,1AT=X7XY?lV4LI=ndt{01YR(YXdz;iWJ=' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
