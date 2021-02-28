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
define( 'DB_NAME', 'xprnstore' );

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
define( 'AUTH_KEY',         'J2L,FGfem;zDU[J+7g=<UWQ~>1@+nE/h}t:-wPX>gZgzTPO5D$p!y,v$%5~pj*a}' );
define( 'SECURE_AUTH_KEY',  'Ix~5R[Tt.(5ns{SrE.</f[Y sOXs1>e0jT4&IWffh# ;bU$8E>Z,$mOt}jjEZ9~R' );
define( 'LOGGED_IN_KEY',    'ox9{mEJQb[[:2AR+.!YyyhR}?(A%oW ]/o)<:wS2ymA@(h!d7#=2N{O}WJ6zeRxu' );
define( 'NONCE_KEY',        'Q{+Z53UqgSt^dE]Hwu}H&OA;b mb{Dsk8oe1Pw|I;6F !vC4E?8:D0Lb<G.W1aZ^' );
define( 'AUTH_SALT',        '.GQ1rSa[2=eeD]X#j2J(&~17h<7/weYI(5uG=rebSR9}7zx<JrEpz]@apk2Z>l+}' );
define( 'SECURE_AUTH_SALT', 'ntEvQN{sKv^wzs,B=fK`dk#vVaJ=@^Xm3|!b<<f:QuYMRw~rxGN?-hHG0iB_J@g<' );
define( 'LOGGED_IN_SALT',   '8T@<9i_fJ`trB9/)c{P`WX2?tEgFyJUw.$#<M`8c70]=z@WU<Ros.W8#~^hD][FG' );
define( 'NONCE_SALT',       'y-WV|Ey0j~eMP[Q(*`49qcY(XBVcczGJq&e]G}n2aP2.66=z%E<PV@z,#6vv}ftO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xprn_';

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
