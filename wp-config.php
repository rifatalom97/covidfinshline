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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inf1nart_coronavirus' );

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
define( 'AUTH_KEY',         ',O7#/&vmDFQ?,9hv|XZWT=(=pQh2[d;/G)HEhWGakS]=;ja.xYbnoTkDHIS5%@5]' );
define( 'SECURE_AUTH_KEY',  '#J{*^7[VWd(v+VC.T^.^qV>4bCy<dlG.#XS!fi*k6A9pD$Pk(cM2+c^=t;Ff`%bD' );
define( 'LOGGED_IN_KEY',    'yns61HSt[fC :;>fy;pj-.;5.&@I]O1h_qIb8GG_Z|:a#cW>TGY#46%#U1pK*GCT' );
define( 'NONCE_KEY',        '3J{XRlT0G(4[!A.>YU:ctS/)3h<6I2;]rc6+%gd2b1ZC`80=2E+Mb-_*CQO.TZa&' );
define( 'AUTH_SALT',        'azFm_i|9|r7U_ R Hr77;7j6&,0/x=$@A8xC}!ohng=k0Ht`393*q384eWGD(Mjw' );
define( 'SECURE_AUTH_SALT', 'vnQ_; `{w$a*3IuG@lqjo4A#1hk`A(/Rx*h5UZnU5]>C@cgu9;3+B{Kr.e;#kaM%' );
define( 'LOGGED_IN_SALT',   '0/#q|,;-fk:1;?|cD_0@?@EC?^r[C`K9I1jN,S0iPl9_MVURr0oGo<r2+/e-,l2R' );
define( 'NONCE_SALT',       ' 0)[KRc D;*(X~460oD)vD>r8g j}FJ,+35]$/P&7Gg#[x%RJ8.X~{<$asGOAp}t' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

