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
define( 'FS_METHOD', 'direct');
define( 'WP_HOME' ,'http://ec2-54-204-49-2.compute-1.amazonaws.com/');
define( 'WP_SITEURL', 'http://ec2-54-204-49-2.compute-1.amazonaws.com/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressTP14' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress-pass' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpresstp14.c83qbljrtupp.us-east-1.rds.amazonaws.com' );

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

define('AUTH_KEY',         'ZQR@m0JQM~DGBm#UU4r|;IIdgp]<kT`<QB;@jZeAVCh@7}J)[qYeqrd_9g(!X<Eu');
define('SECURE_AUTH_KEY',  'iR*{RI<(1=M-usG]4>%CV!W~e&LkLz#DCuCGx: R;OG*O6yhCRsU60T$S<|0q|(q');
define('LOGGED_IN_KEY',    '+)nojyy4|[8sJz-M$m9arr8r+!Wx`4>3NJ?-FFR*}7:4s^=&?}g<f?Nh? q#WK9s');
define('NONCE_KEY',        'RZe-`fc-.Zdh;-H_>Hg0$zXoM{<Q!7{$-a~8;1CS:w|:;XLe`pZ)C+#am [.C$:%');
define('AUTH_SALT',        'hY7/Fc>dg%AaLAgb]?bHe)Ekv{Zl}bm-V2N.jJM|laGv_rH#D;?>!4WCb/~`h@OS');
define('SECURE_AUTH_SALT', 'J)s3U);CTrtK,1][U@vF$f>`fI]w;(wm.mVY~mv|c:Xu0o6t`f|eVxg)U&nh-83C');
define('LOGGED_IN_SALT',   'aZV%wBHFU8VT`b|F5{P:wAWw{D/riXi<S%iyS[wJx83 q;xf.&8f-Pq0x$-$B6$#');
define('NONCE_SALT',       '!7l,L=7 -!/)[$TS0|41)=QGAQeT9ZZ65YdyH#2X46&/6Q~T=`@mU]x0*9r%t= F');

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
