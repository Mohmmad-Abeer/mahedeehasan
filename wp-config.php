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
define( 'DB_NAME', 'mahedeehasan' );

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
define( 'AUTH_KEY',         'LYnIl$;V&#W;$uz@qn0u3/L7~:~T8O+o^nak!M>hQ?pQ%=DHtv-n)<FX*fBwir;x' );
define( 'SECURE_AUTH_KEY',  ']2F^eQlmA?yn!o#<P3gc|S{9fMa87Qz,BlDPdYNvq{lE@dVD#tg%!ZvKN1TR:d0L' );
define( 'LOGGED_IN_KEY',    'O<hb|;W/piJ]8@T;u0Bha0<bP_ew&|^ruR$Jk1^9Qjp}x(6-OB$Bsb) :p{t{!3P' );
define( 'NONCE_KEY',        'UQ5izNg Br/I7:|5_;rP2(9c%xs&;h6%0zK:Q)1T.qYRx]j8Uid9diWOemIhA`^{' );
define( 'AUTH_SALT',        ',lZsZ_%D7,!DT<g)%l@1<OF}c9.94Z{+=#?%P(1={@H|x~Sp9YG)N9:46P|Riw9t' );
define( 'SECURE_AUTH_SALT', 'E.@uSQzPEJQ_uxc.O`7qo]|i<} <T(>f73s272?ZE}2W,GW?|Zy/F;>-.v%VCN1j' );
define( 'LOGGED_IN_SALT',   'I9SR9}8>+g/WSYo*mY_;cNe!o( 3&7[ed)E%nvFh?jJf*E{++PJ(u}NE?Yd[N2|9' );
define( 'NONCE_SALT',       '%eN@t*H$2Lx|9^^|MmToZ1 ^-{NM^BM2C6E<B@rN:t74I[so1#p~DY0V90s;B#32' );

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
