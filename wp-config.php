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
define( 'DB_NAME', 'Investec' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ulI*>o@PH:0D:fwMw|FM#zehD#/KaGZ?LT{c>)cj>d[ ~y:X&F{RJ{d^`NXT9t3k' );
define( 'SECURE_AUTH_KEY',  'PZh_&wT!UbU9/EeAg3E`p>PEJ%jsb`jFr%[:|0|`[aPnkRR@3ER)yFG%rKwo``[S' );
define( 'LOGGED_IN_KEY',    '%5&<%M^ee&g;+8DfY466AvAF3QsDJO|Sbg%23FJ+L+jsZ@L_CT+o~jIaCagKQDf;' );
define( 'NONCE_KEY',        '9|l`5^T!AbJ$?-c:b+Gg@21?Zr6,r+7Qx -|;-BNb|bPPWxfo^?V#f->.xtdaO`=' );
define( 'AUTH_SALT',        '!oN5.VY[p?fK[5tpxX^@<=AFA;4EZxhw~zr;GdOM_xAfpM(MkXR}oqUbZ:WydEub' );
define( 'SECURE_AUTH_SALT', 'P/t5;rJafLkg{9Fb6QA^tnx22N-N#e#J.(%2gvvLfAd$10fohNkM,q>@.tog@!u:' );
define( 'LOGGED_IN_SALT',   '4Ko1j&3eJ]|QLDZund$c$-@FI3K0J2^T-WzuQ75XtDQM+T)sAHt0vuduzM3|4#>T' );
define( 'NONCE_SALT',       'Yh,!PB(a5[x^qX^CSej5BoS68XBZZ,vT*1@W Mqn)R}I&AivTE9SG%tc!Yjr8ZKK' );

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
