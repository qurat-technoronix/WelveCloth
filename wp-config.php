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
define( 'DB_NAME', 'welve_clothing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '((70N;p)#FvL&6K0RN0P7RB%5[f*ql;7.?8KJGEnDUpHJ((-5!=MrA0F%jc;NM9b' );
define( 'SECURE_AUTH_KEY',  '^CYH[(vwdtcewINoxq3_L[H{92Pi,RUssP83z;#vx.}Ma5zx`]9rX[i30)YJ+@Z@' );
define( 'LOGGED_IN_KEY',    '2EY:]q0=CS>wUoh.iWR*q%5pKIKfnc)3)C)/|m++H@&Z}8-QSXEgFT!vq-.dB{c@' );
define( 'NONCE_KEY',        'Ikm0k#l|BMR`?H2/i*N#V<b,Qnq?s}LK@Fp[r]a;q`PEPK*jz%5g7`g/_FvTvR^v' );
define( 'AUTH_SALT',        ',GtLT&GU9DQ[ z>]8Q!h3Rcgq=B:BElly1aR7>x:*DAgi(4Gmtv<RZ^9l4?Qs2/#' );
define( 'SECURE_AUTH_SALT', 'haQ2zOK^-&Tf7(Y$ZJr}9U2(R4`_C0Uz}(T]FpA&BG2V:>d#,l|*?AJ=Kk9QMWC~' );
define( 'LOGGED_IN_SALT',   'zEpf=<.LU90E}|,O&-a(*OcaDNeaK~CC53lpAxC:52 Kq6*b!qA%Cxt4?|k^-9yl' );
define( 'NONCE_SALT',       'c=z#Xw |MrB3[(DiOVU*NkgmO!(Wd;Ahac3(2 bC080in#}0_E!6n|UpeuO$CI/X' );

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
