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
define( 'DB_NAME', 'ServiciotecnicoComputo' );

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
define( 'AUTH_KEY',         ')7}J--eqt*HACCcTggfcf8vdm#SYU:Z0eI7R0]y@qG-8~gxP/.o>YHwN6x:S[CR$' );
define( 'SECURE_AUTH_KEY',  'X^Im)*uCi&/`]Lurp3MpfRI%J)6oHz})|_F0a?&sEF_kf0G/j? dnvSWIkUXBI`N' );
define( 'LOGGED_IN_KEY',    'Mg%7I*GlpCt1^yJTsVR(*_nPRkygok?.uNNFR. --&F-DShk>BL+.c}wLX.1,]IN' );
define( 'NONCE_KEY',        '1N/y2Wy:Zv7dq.[?v#hF5U6X%_d-$#sMzTFQPsuc]Qo_F0##tsXqhybl(xtNw>oq' );
define( 'AUTH_SALT',        'jEJ>m=ZsZ+!zf-iU$10R[4ox^ak[h-X*ZvGOF;Y[QB&*#C;4b6+8FYf}hHMUwoi$' );
define( 'SECURE_AUTH_SALT', '|Z|XAsvl(zYRwdcpvsgY=gI>XPap<pj`%mv:la2.ozfs&~wN2|cH5}$y(aC B?x,' );
define( 'LOGGED_IN_SALT',   'P>R$XJ-C)ph<GIRD:OJ&YMVdsv1kjpq%-Xem$cmHxC<2Wl~)hQ?}s$#DBUhT);H7' );
define( 'NONCE_SALT',       '?4bl@CTD4ge=mEH :MnEiy>Sy=[p4>&rsP(*nc>@c<X(K8=o{!0$,SO9@l8HU,U3' );

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
