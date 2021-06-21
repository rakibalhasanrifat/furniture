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
define( 'DB_NAME', 'furniture_db' );

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
define( 'AUTH_KEY',         '2Tjd_XHk60QDo+G?@SL [0-a3IFNK:t)k3ur;#f]*`q]Qw^A*p9De=eBHfz7Vq[|' );
define( 'SECURE_AUTH_KEY',  'f&jIDyVTznhmE4q.5cMp$zBZv|YWCK^v5>YfCOj&>U.;|Mi30]{|z&GBNemR.vg<' );
define( 'LOGGED_IN_KEY',    ';H N~yoI_2Pjg(q1J+=wanEma3>QcE5y&up35~88,$|MStc:BUT59f.RQoIL:w.L' );
define( 'NONCE_KEY',        'R^)aZe2jTKMQ0Mn4m1^~2Igp|WjG/%Y7%3q>OaB]oaODG=G2uX1o)t5>bBz)sS^Z' );
define( 'AUTH_SALT',        'bu>]_$Wld$p=@QA<}(R-VMz?4_@2g9]!t>*Z1RF< >Fb<xPIu&$C_ikBK>zvXL$e' );
define( 'SECURE_AUTH_SALT', '&8*PvYGR9T.GlY5hHVzN2!q-;y%7t;Dktc7{bT@c48jrNx<YpCZWjh.#gDcB!.>|' );
define( 'LOGGED_IN_SALT',   'N[Kd$uj1CL{@19hMl+aG#3NCrzxGNj?M)w0Nt(~$r-*OO BmF`xo_wq}{TY1>9*J' );
define( 'NONCE_SALT',       '0S 93%#`uz8nzU6@S_+lR>ZwN$n{@U{]~ClRxJX%z]xsRnRAzB.))T=f#^!g&H0&' );

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
