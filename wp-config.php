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
define( 'DB_NAME', 'surendra' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin1234' );

/** Database hostname */
define( 'DB_HOST', 'aws-db.cybd7uzx7vlc.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ')1Y-V2sd46wR<lM>%8-]x##MP|$nk!p}PTvNa{F] ClDtch<Zxoq8>r1aiEN+<QF');
define('SECURE_AUTH_KEY',  '0L$z/q6:e$Y B1a##kL--sd._xd8*)K0Z7m&JU1l]PqYj,mSsIK-+T@[,hk|krQy');
define('LOGGED_IN_KEY',    '2k//iM2Av {7}ywyL,lBS*sHnaQ7Qi)J4DG8s8 mJU^JS3[@ri-|/N~)$e[8L}?k');
define('NONCE_KEY',        ')14+|43[|?n*H).aF|}!1;+#?MrVTS9l-%RN #+sM[7v9 +J7BOxCQCvp =Uh)7e');
define('AUTH_SALT',        '}?aT&,8%ivMbl6%v[! ^5x3g2E+[E)=20h98zkK$m|Tw~ZY8c+hB0hJ109c3+9G.');
define('SECURE_AUTH_SALT', '&ad~YwQ0X<]`G`Yao<T|3TQ7sBQFJ[#a}#Q^/i`u4|Elw..<,F{:(*g=^$8iv$#U');
define('LOGGED_IN_SALT',   'KS(cv-{,[|!]Ycd>-It8{dnr9[$c<^s,PIaHVSg3[b^>|Eo_-U/Vli}*yzfq*q8a');
define('NONCE_SALT',       'F%@&JSu|QLLagm<_]U2e^Qb.n}oV9){f(k+$sTLhcGT5|d}86rK0p(|@o!-M%~Na');

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
