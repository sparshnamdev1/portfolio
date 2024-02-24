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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'school' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&]%s-&a{Kw+[A$K<=g{|7<-x~s6f:O7Z|#:Q2a9utc/IV.MI3q?=)a&Mz[v7n^E4' );
define( 'SECURE_AUTH_KEY',  '#[_[}e+J_#51a<rVli(.YBjz!{leq{`eOm%3^%e f+~{g^r?Y,9c(!d?R:}%[k(3' );
define( 'LOGGED_IN_KEY',    'p&5m82v2GiQF^v+bw/yy HzR]YuD,V8,<GZfL1?~oMVq6U;7f/M{A3GFD7`KG@uX' );
define( 'NONCE_KEY',        'UY}*ElBtaRZ[sK@g$XV4K_}jYNk(|7jU5m|Drh.BM<qXJp)Uf*f1AkzQ8c*ammh,' );
define( 'AUTH_SALT',        '(JHb2nFp(;;gL;(x:pQre`lll#Uw_f}qJ j{(q0v{oW-K]Kzffdg:R29c[Q#PkBC' );
define( 'SECURE_AUTH_SALT', 'Kpw`x {lYl<~JS3OG`PJ>d,|!56BF_e%}ufjv:GA/ifGTVA,D^2!O/yR4{Y{?J Z' );
define( 'LOGGED_IN_SALT',   'P80GS_azn>OTL5D9N.[|JVT+/:_s+EVU>W9Fm2r2_]+4|ri`#0BRE6vyftL$%Y#9' );
define( 'NONCE_SALT',       '.%8.;zoN55>6U:??3dJEcrE,sYKfL:_bQ+,,->BhcaG)[V(<b9!5OOHhD&tmv,dY' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
