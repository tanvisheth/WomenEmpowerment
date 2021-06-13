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
define( 'DB_NAME', 'Project' );

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
define( 'AUTH_KEY',         'zQD81$J!YvI,8Vka-%JwUP{XV,Qv>gEodLB9(:_iijhw]iWXfB>JmCyVPD+tY;M_' );
define( 'SECURE_AUTH_KEY',  '6F*pU|a.,(xusW99PoF0%J_fUY)E&}TOBPVV5uqs~z=@*t{XpV%(nMo,$RrzQq-/' );
define( 'LOGGED_IN_KEY',    'BinUX>^jd5`mqv|o6Cv$#^w2zZ` ot:(%}a):Q4socny#ze2Y2hvAM9ZO>OjKhP*' );
define( 'NONCE_KEY',        '(49ibf5aR15$Tq3-%%^N|fIEmj1|L>oT$T#]k<Dl>,u_Za~;?)n+-gTHtBYF(x,Z' );
define( 'AUTH_SALT',        'u]vel7H&[_^m:))|!VUA?_dp6ib@/KZ3@2Ui7 )I7U=j@w_asm[LR-TG<zwA(VLl' );
define( 'SECURE_AUTH_SALT', 'z{V&]7KzL+:hzO$}QJ~dvy4<CiM@<_/&8?z9q%!|+iK$iBY]0h^}R> &%2>BNA6>' );
define( 'LOGGED_IN_SALT',   '~XigmKau-yc_Hf^vGjPfo1M2w+#|8/oU.@4,Y[rir$wiA&dm.92QJ9R1-hDNHyuU' );
define( 'NONCE_SALT',       'CmiK:OIn*B.`(d?`e9}p$$&zVWg:%0-l,#L@Oo#RZ}K=uca2#}`s-.vU=OYY]^*R' );

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
define('WP_ALLOW_MULTISITE',true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/Project/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
