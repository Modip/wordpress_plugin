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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         'k$@vR7T]cV6;b-r9~XtN*}dA97AVmFQF=V@j;~(O48=|btK?>=UKM&]_3Ds]y0.?' );
define( 'SECURE_AUTH_KEY',  'xJR/g~Tgo7TrtZK%P(O|N.&w1gQGt/PZAsxU@hk8yyV7_d}~1HusFmMu;2,`EJqK' );
define( 'LOGGED_IN_KEY',    '@N$p*gdzaiZF@@N+@X4 db 2{gh&][.:|Im_JWI6BYSUiKB4ytvV,XPVVAImY6$Z' );
define( 'NONCE_KEY',        '=(t`fer4CJbYFj^k||;~,t}.T~MD6UUjd=B/|9CQf-Y{MSD~eazN|v)qjV$tV52Y' );
define( 'AUTH_SALT',        ')+s{^L:hgj4mHCT&e+msIe-1N{)NMWl`y(|-GN2^zeyft0l3%<h/qb@5hV,y|*AC' );
define( 'SECURE_AUTH_SALT', 'q]3]5y#9!2hAxP|Z1sXIoRUWQQouS4,)uGG>R!<Hi +qC8rq3#neoej&eTcM.GG@' );
define( 'LOGGED_IN_SALT',   'W+X^+;6{SaRi/S|~WabB`e|2r9OI<s`gcR ]wP1Cp;V&MXA0:a7xmL0(sZWVPf!{' );
define( 'NONCE_SALT',       '64g{R(b.8JxU}dIo8{k/FG5]N%5,6[P-CZe9i5GuQ^cW}[DZ]7([^o3^Nte@`c8_' );

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
