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
define( 'DB_NAME', 'githubforforwordpress_db' );

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
define( 'AUTH_KEY',         'Px=>9 ,Ukwi-|t<6f,,@%}Tp~$%#w8mb:n{_bz5j+y!kl8[&1(<;PbBR.QZ<7h7|' );
define( 'SECURE_AUTH_KEY',  '>wfbs^GXw*zU,(R8XrIDQ zD#xuhp_dc7u(|g:UREiu(s8.7.tvLWYBu_2bdwJ5D' );
define( 'LOGGED_IN_KEY',    'G|yzjESUTP;aZ*T:5lR(^JCzQs`PDrbVSL{Do%|Nf)[L^nLsq*2Xij%Ph5j/$}: ' );
define( 'NONCE_KEY',        '*^ WPIkySlrYO4@$rHkwTdRTc=&{<Lzu4QppeW0^|V_V.qN3ld:p(a1)]C?i{r*:' );
define( 'AUTH_SALT',        'SRJ*Z<{Ay~a)mAd)Zkt%+W-ed$rSkh9B,ps)?_d#p}Z0VS{*.W?SK4/QnwR4c,@H' );
define( 'SECURE_AUTH_SALT', 'ucX(}i3>?dI1P<@cSnFbY9e[Y%:=7RrMwZ1@RtT%ka49Q8AKe_WwQny_gt~-2Vk#' );
define( 'LOGGED_IN_SALT',   'k^c~*XoUFo_hCE}E/|pHKa`fFzQ[C0>`U*VAOvHwm&VWzn(r-_B.TRK^-MI$NbC:' );
define( 'NONCE_SALT',       'q:*Ep:lvS+m}4YRz2Rju*AXaC#fM/1rs]CC-C^?DMW=^L}!x63F2VlXySW|FYw@a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'git_';

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
