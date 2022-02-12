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
define( 'DB_NAME', 'smartwise_bebeating_heart_smartwise' );

/** Database username */
define( 'DB_USER', 'smartwise_bebeating_heart_smartwise' );

/** Database password */
define( 'DB_PASSWORD', 'iJ4HMCzpXkgYZ@W52uDGPz9H3Wp9sb6uVcPdXAVIX7VE0ltjBGA4g8WXwmhpX@5' );

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
define( 'AUTH_KEY',         'H4f$0BVg~iiYxYPC;3^(AL_54,Uf3C%?0`c[<P!l=]!Id??#o9Ab*zj(< *5Q@+@' );
define( 'SECURE_AUTH_KEY',  'MPk/m!G|~H[fxDOrB0Y*9ot-,:R 9P_K8{47*r9KeyK6GNLne) *qbue]NrQ[>/f' );
define( 'LOGGED_IN_KEY',    'XEE+DDl8=y>,6Qzt_:;k$m]2vge]G@8t|t_@!N,;IuUX+R^{Ao2iA+,ks&t9j&Xx' );
define( 'NONCE_KEY',        'dS;$$WQ+z~A_BSg&dxk@V:Vf1eF6/hHmTZmmA3v#,l{3@SE{Y-[rNvCsH1cRRU^]' );
define( 'AUTH_SALT',        '9ggDn,0$PNgERhn8JtMA@;!ep:elnD,;Q12/r.;$bD1=RqV7TULoOw9yxGVJ:(Cp' );
define( 'SECURE_AUTH_SALT', ']24C<u4LBaPZ+(^FM]<UVMgw-0-S#B^1;uH@|/+GOXLHJ5&Xg|>~q,$AuQF&*dzQ' );
define( 'LOGGED_IN_SALT',   'iOw(mBm?rCsCB<?p> k5u+*B{qG9TnC|8ey0}(tWvCbRx%Wzmq68+*eheog M<pB' );
define( 'NONCE_SALT',       'ZK^oD;F<UPeg^k}ebf#xF_yPnmf~`d6}?2;8q(a^z@AtJ#ybEQ5G-CN>oX&f.b9+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_smartwise_';

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
