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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         'w*lj[oMJ@t}_hdP?-&?[bwfqD+?+s0eVlxFp1dz6-OA2JA_,d%uR}M&CK}RM6e*%' );
define( 'SECURE_AUTH_KEY',  'z=`H=n(&[xZ?!UTQkMk7(vOaxq]5z&5H52[Pes/MXDI}Zdk}$.p<pnjo&UPEJM#g' );
define( 'LOGGED_IN_KEY',    'yq4}mrg]}J06w8ITK#,g/e]qxA@_8-KS]y^4ybi3f!3vy<{+vTWB5{*(Hn I}|zE' );
define( 'NONCE_KEY',        'aZT6r@[h(y>%%7dVi=fpo)nklZ)|y&dYha|O~LnuAusrI5:mz){)<bdx;$e1/=W0' );
define( 'AUTH_SALT',        '+/&HMyFPkF^;T|/q+rjaFugr!o!xXt GN+W.MxGg-f9mvqJ]joUpC0QZ}zCLPmhY' );
define( 'SECURE_AUTH_SALT', 'r&OnBj)Z]$ A_t_#ra8;k*%`Eh|rU;9#{cwQE 04@)==6[61Qep,Gfu,Yd^$NQwf' );
define( 'LOGGED_IN_SALT',   '(7l^SbTkra>3;|vm|xvd:Gi?*W0+hAf?#ea..HA[w29ySnByaX74`2DNe-LVZct.' );
define( 'NONCE_SALT',       '?sjH+~c7w7InYJ(Spm<&yYo2us_yCsQ:(h{A*@R}HI`!cb-A$Mk2a3K0HEj)$ 3]' );

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
