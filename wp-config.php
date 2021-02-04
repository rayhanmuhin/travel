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
define( 'DB_NAME', 'rayhan' );

/** MySQL database username */
define( 'DB_USER', 'muhin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XJ2oBGhk3Q62V2jD' );

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
define( 'AUTH_KEY',         'N9m[.e|PF0|68 X9?asB$A=8F&e f9|0fBaW^@/GtIl?bi=`B<1XA2[&`({ua*[`' );
define( 'SECURE_AUTH_KEY',  '(#f XEr@{$u&$=GIc=L^2}rgb{?dyl98HCA4N5s^+s}C2B?zz}-F)lET#?MzF_3J' );
define( 'LOGGED_IN_KEY',    'Mkt4TBsqJ4eS&&q!C<K-Zgl}S{QW;7}ggnF_%g8I5ucj0o(rs>A )tpyQ=Lm~_;D' );
define( 'NONCE_KEY',        'Ve7M.WcH%KPM~mLQ.[R^_cG7-MTdtSUs<Zd@@0N8:;!L.<<j <`tpV#Jo@x6$`ko' );
define( 'AUTH_SALT',        '0(.lcxHj,YA(56:[2?nt)*E&xqyX~(&8OtBoTq7+DE`s:H2JWYrWlx0<U9IX@Wql' );
define( 'SECURE_AUTH_SALT', '4IwDqA@z.GsfHL5AcLK7uv`6k^R7-^m+6)|g{A) ?lK}un1a]|:2I}6-:ycO>Yr6' );
define( 'LOGGED_IN_SALT',   'f5sizqUXihmp`?J 3QB#KYab6rpw^!Wt44AM*ehOS@$9mQsDnnqjcLw3AxFbJt;P' );
define( 'NONCE_SALT',       'K[l4]T:])=c8LV`SX1XGB@>+$z$TlfGt ,R9XZ$G/.EQhW]^cN%Ndu C:;ISO??#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'diviblog_';

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
