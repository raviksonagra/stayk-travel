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
define( 'DB_NAME', 'stayk_travel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ',-=DeI#U^JV _o<!F`6DZSE2c_q]32.+xQ9A ppp(erg;*>,0Bg:A~$*Hm<3T%zb' );
define( 'SECURE_AUTH_KEY',  'kNdJ;(V)N]378k1=^d3E?F9V%1LCBaX#!c7X%`Swlyv*]p3Bifz_.%?rPzqqsN)j' );
define( 'LOGGED_IN_KEY',    'q.N?Z^3h}ee=9+j2+C1:~~O&&!j(IxH13.f=QC_DW?pLaY~D .V4Dp{.dGc?s)^Y' );
define( 'NONCE_KEY',        'pL_-/>OeslXr.-&?X:Y%wL0c]2.W^eU!8Gu Q<<8@DNM~B<NT^aLLfB(g4t%:]03' );
define( 'AUTH_SALT',        'L$p*8!z]RH5B[dp(fyx:@c!OS@XR#97=ABFs,:|T$f+.>}Ykp9B7hDjjO}X&-WLX' );
define( 'SECURE_AUTH_SALT', 'mN$KD_|56LfR2.D[b5IevyW6yu4xj4alh:V;v6*6@b=TSe3%^4}u-W.WBulFh*Fx' );
define( 'LOGGED_IN_SALT',   'c(H?{)3_xA8z>5}e/a5Ifm+&$^Hlf`$Spz|Zc}uyU)Q=7&Ve{o3vZi^b(/@{L[wP' );
define( 'NONCE_SALT',       'Mx~[F&? BXz I9&.XgHf$1Krg1Xkvj1>X_c/gm8Ut<qE wifKy2F/Y;!vp26w$EQ' );

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
