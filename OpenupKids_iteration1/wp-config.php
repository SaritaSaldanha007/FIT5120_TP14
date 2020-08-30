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
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressNew' );

/** MySQL database username */
define( 'DB_USER', 'wordpressUser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Monash1234' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpressnew.ch3jtgreeyzx.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#6dH3fA)ZVH-+n!pWD|9=tv,{rYvX28Q5)h_$~:W hq!` ]&:Je::L++NtL@?*>/');
define('SECURE_AUTH_KEY',  'JW57WX$Z :EY<n=io4De-{3Cc/>Es+*W-+z|51ir2!g=WQ!=[HM{qb>0;Vf)H/i+');
define('LOGGED_IN_KEY',    'b{J<e89]h2Gx)4[%@RrqOQ`*lYxVAteI4|]U@1t:aMD|P &<Nb_bTD-9;{:]Fc(f');
define('NONCE_KEY',        '|q+.B[oD+A1h|n/b/8DX319&fT+Mf0:QH0^3A4kNw&NC|9_r6KJhS=*Z9V^)5/&3');
define('AUTH_SALT',        'xD cy~B9~;|jJ_wI6]JaW3hl+hEvrvn8)Af47J)Q+(_.z @@[lWb= 8?8M97R:W4');
define('SECURE_AUTH_SALT', '%RP2Fx$J0P1kubid+}HU,-RAe+;}PHMtMi8@%m:[z+kh9E2LjVbT{%n[I%-@4|4=');
define('LOGGED_IN_SALT',   'Z)l.+g+9r,=@iTO`~>MW`7,X1p7VeA!M|k[LVaX;;7$2)myrI[Bsj+e},lq6z|2R');
define('NONCE_SALT',       'JyHEcy~pm^fV!4--e>m ]_M<G8g~aS?QDf-?xeQr|.,leGuq{(yMsfbif@MOa58W');

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
