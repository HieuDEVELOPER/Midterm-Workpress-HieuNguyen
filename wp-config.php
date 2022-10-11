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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hellowordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'y.mA;3JCpt/2??2S%_#cOE;}Nk&X+&*_X21{!~=J%u,Kb]xl[z3nSB:r,MA$7uJ~' );
define( 'SECURE_AUTH_KEY',  '6,7xJ(?K63S fp4Jxh-NB:b6V;nq|A^Tc5}%lBCvBy22/_l g;eH3d]0=;yzq!)k' );
define( 'LOGGED_IN_KEY',    '5tZFZ+W|-JBA.S#6pegSt]{F]&Zw1:~fhpKhEp}E=>sSIUukfM}!Cj!Yhg!:b[Rr' );
define( 'NONCE_KEY',        'bTK*bkm_gd9(!Cy?p9geF$v_qi (^0^#B!OO>O?p~69SB8.q4h3[IkkQ)-cV8pVL' );
define( 'AUTH_SALT',        '.&ko1aPh6viLtrfvW# +U7t_:05<qe|,YpDX h*EZ{^L=7p]n#6Gm::4 %QA8vsk' );
define( 'SECURE_AUTH_SALT', 'yPHe6~w]kg <;dLu*ZFt?bIw[b3IW(8[3?$_T-5!SzX0d$z()E20P^#A:1pju+A-' );
define( 'LOGGED_IN_SALT',   '^bh=U6U[ ^c8]iBB3NEdtBzbR%rcd^oW*?C6W3j7u5RBv<#?!RLw?(0nEw_,QwN,' );
define( 'NONCE_SALT',       'U95ms;l;y/B],zRqPIoiK%.#NeH5G+O/MV`Za$SwJ7QK1132)k en7EVZdvDpr[+' );

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
