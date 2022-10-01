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
define( 'DB_NAME', 'template-news' );

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
define( 'AUTH_KEY',         'm*tr.9nNBy9Z0`Gt6!G-WT`];GIl4!SLwkL#y?:+*q_uu7DMS@pnojwY8<X%tH{p' );
define( 'SECURE_AUTH_KEY',  'n`$kjwp=3bcr#@&Ik&L/~+Zu~Eixf7vZePpcIP^3;ypIH>^[ I$lCXr!3$,9Rmt1' );
define( 'LOGGED_IN_KEY',    'a8*?v bH8K& K1RV:L9z8B?qr-)^$Hvc<R>og_QqHVc^Lw!+<_4BEsM0B-6A3/To' );
define( 'NONCE_KEY',        'Uf-#0,OnR  VmhqN+B/$]*vl$HN>rS-vBw7+gBQ<lr(f{JndZ/ctaZ[@>Bkyoa(v' );
define( 'AUTH_SALT',        'O)&idpk]EM9Ca^T*k*j4iwt{<}F]&/kZ_/%`gxwhX9{eY[R3P=@keux@pnAdg>qg' );
define( 'SECURE_AUTH_SALT', '$/sj+&,z0D0Mbt{y(ejiGwJv^[n8/8%6.yMsJsGR;C6&p!%nvG%QP6[rmLL0Cq u' );
define( 'LOGGED_IN_SALT',   '0FFTMC/Z=}5bunc#bLDviU6M+|vYdn7qq5>~[;#T.i,ZO&Pd+0`::dS~~#aHPk7B' );
define( 'NONCE_SALT',       'Hs]|@]:^VHx)lVEf<jHvw2]HD$l*](]sa2xL^E1#{~p8B/mM!7>b3V^@@8e`Tf[p' );

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
