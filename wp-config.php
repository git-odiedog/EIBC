<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u355331441_QIcSw' );

/** Database username */
define( 'DB_USER', 'u355331441_U9mRt' );

/** Database password */
define( 'DB_PASSWORD', 'CKpi5Df6FU' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'PoBB]Fa<ZWibea#YK^5p%{(w<Tb={dBThrn(=noUy[og~A(jb^<XGBe[eE=S&CZc' );
define( 'SECURE_AUTH_KEY',   'AK!ut~|.8|Kxl7^bs#`pJ;d,u</g[?>wM<f_3UT{8IzNFS_:p4axze/n<I/ljl{8' );
define( 'LOGGED_IN_KEY',     'x/6)H6qvga*W+wiI^bu}J5e1b@.A^R7s5Yz^Ut5O?I}X$Azx&lE*#!I)eVQF)7lH' );
define( 'NONCE_KEY',         'vsxmkDtsFcLVS)DI:%gak+$wm>6#[#QH^BqhBb`&o(^Zoi6JKK&agr6^^Y:zED^c' );
define( 'AUTH_SALT',         '.k$dMy0^C<VPoIz@K]cJcLJ33jK/CPk C%_>.q5Vt*+h-S/(p1bwxpC-Sb4dkX_Z' );
define( 'SECURE_AUTH_SALT',  '3/yVIb(mft5ZcgLN!*WWGtnL^iWiBxaA):XulQO@CaR;G>oGQpe.J%;9;(O+Nv#.' );
define( 'LOGGED_IN_SALT',    'PIa:RGdKp-W6P,}NV4^S;]VUG6UR8>UcEr42! R}3b+bT@b:!U,a9[`)ou&zk0^g' );
define( 'NONCE_SALT',        'T -1vk$?&P<[N%&Xw^@soK}1L4JbC)=#(=G`]%dN9pwvlT5j2e.4ZfEb:%ww qnQ' );
define( 'WP_CACHE_KEY_SALT', '_DO}m[9i(NaC>Q@<Y>Ma)T^y`jjvx/>x:{./8U?$6dIB!HLOyV!?u1eZAUV6<ug`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'd5644e91f27caeecc31fed03726d3ca5' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
