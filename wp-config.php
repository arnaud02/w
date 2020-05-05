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
define( 'DB_NAME', 'arnaud' );

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
define( 'AUTH_KEY',         '0Rs.,:a_K]=Eg6M3UD8[o,nS,Om[[mDkq0 eTw^p!r7La89hwqFG!Rc hAMSR?A{' );
define( 'SECURE_AUTH_KEY',  'i.?(~P)x8H; LfR:xON:{&0dn0=s,Z])rtm-z]]]UgjESs(Ky8XkPY*x52pz%tyI' );
define( 'LOGGED_IN_KEY',    'rx*4uqD)PP>,LUZfwj :air,IbW2o>voiKXx_QP-G>F7aeR.DOC:g,p-S(S#XTlQ' );
define( 'NONCE_KEY',        '?W2[%lv1Ed-9NZ3CDs4;B>nw;8)eNb:e:81Rh(l19n;{qhu6Y98/|c^l8%GT2C`5' );
define( 'AUTH_SALT',        'T%|rdy[|C!Pu3J1{3|%91%wXe`a0h/M^/T}Kw62!9Ug]rp{W;egz2Dg5V_#Z-! $' );
define( 'SECURE_AUTH_SALT', 'kjj[>VW2t`Qek`_LpK=6(zxM?op`p#j8v8:>t~JO]!x-X A[aS]5YS;pRg>f_z%]' );
define( 'LOGGED_IN_SALT',   's*~fn?#e#O,rSlfr$NM.p=v2DY1exzv,0x2}Xy[2L,#c&(>ATCk|O_p6,{?~BvQ}' );
define( 'NONCE_SALT',       'xdV+9R<m#A_V?s-bxJ/<g~^HS11~Gq-nD4!CGlNF$g#3HF4NsLSnuCH>S)Sv)_[$' );

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
