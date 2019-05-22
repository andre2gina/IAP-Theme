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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'andre' );

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
define( 'AUTH_KEY',         '!1+gqqcv&L~}cI!lz`Vy1z+O55QJ@hG2|aGvGv?9n:$R;VWYzu]#ueY8r6W)!fQ%' );
define( 'SECURE_AUTH_KEY',  'o%-Ggs,Vd 9#ba`Yd$!hLjYF*zYbos4UH5`vg%|;{NPF]_c}&Nd?wxJxSph%pGCo' );
define( 'LOGGED_IN_KEY',    'M9[_kK+RQR0JVX<765aFBq+SJ830^2WHWB8:F-(lf1nsGIOO(J!wFH3>;$NjlfJS' );
define( 'NONCE_KEY',        '[m,_s]1q%HPWI74iuon>lLDGPvk`LF$9r}@dH`m:iCG1r[2nOh3%M{[N]JYEZQ61' );
define( 'AUTH_SALT',        'w=E.ulTB`fWqHv|f,Y6]0(&tzTUt=rj)kbAU/p/MjFTC-/[A+*k*SjP?C%76J;*r' );
define( 'SECURE_AUTH_SALT', '?w7ZrG$9+OawvN_mFQS54%x{vPmVb,+;,mXJG23a/N!USSFMPd~HYZ8F-(dLMn5~' );
define( 'LOGGED_IN_SALT',   'VPe><Gsw (Fk6iNC;7VM.4OIW}Q*!kh3;R>i5{H {FOx^VSXMUm&6)QVlP:uy8^-' );
define( 'NONCE_SALT',       'G5sM?f@<Eu9)d:ED$;e<-EI] s=auHmx+PjdBow?v,$E%er<Eg;c2pn?Z%qkyy?}' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
