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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '3@#SAoeO[;VQ2@[)> m~})y$TY;C&j%YL+y!a|wB%Y=}W:TMn#%$Wzga;(sxxptl' );
define( 'SECURE_AUTH_KEY',   '6$kM.7n8a(,wC@n3n[b}hL`H~%<sL$f~HS:r5kzz8]NxM,A8$;Fhc+PmlS<BrE*g' );
define( 'LOGGED_IN_KEY',     'Fey{;e@=PwlRc07l$)A[A1hGU/e^%=`}[`B$_7VOWZho7B2=3$MU-)|-tT7(qCKx' );
define( 'NONCE_KEY',         '1.S+jEW^67^$>n@e^)*]nrF1:x@+dDxH{)``nEHfj4#k5(~xT}e)AS;?wPc7pzg7' );
define( 'AUTH_SALT',         ';{zMrKKQ56d34DLvx`b|,Oi)Um4OrEM9}m3&N{|nqPlV79[^jl@~sW3^N;g,%<N:' );
define( 'SECURE_AUTH_SALT',  'hNc yDl%+M_Q|3ke>X 8]pcyB<^>V1L)lp~%m3l!dKwEJL/td&Q(d3k&N>>Y(o34' );
define( 'LOGGED_IN_SALT',    'yFfjmN} +O7Y*+CqZN5%6w%T@j%NCn}eCr:wZbYo@ 9zpefcM$Fm:35XT>lv1w^M' );
define( 'NONCE_SALT',        ' L{^|ViY6zbNIiLOe[{H9H}x=u*.)w?)g6d0a SdEONiyZl=4z$j-u-4>5GG{/8O' );
define( 'WP_CACHE_KEY_SALT', '*XHde?(?i}c}Mx1+R  &K o3*|OU,x|4$TQG}MlG7Ju3DeS%IQ*;A$m9eU#2IK%z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
