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
define( 'AUTH_KEY',          ',!A.sHO{w[53G-9} ?}^. h>_k*`IriqAc4O2VD_D%j;(lXlo=|,^&V)XhPn<_7i' );
define( 'SECURE_AUTH_KEY',   'f&p7/s0!DUjiQ}`9.1SOM,VwSH=AroApZ{p`>HC.^Yk6xRx2!m-LJ<J~XgCfA07e' );
define( 'LOGGED_IN_KEY',     'sNy MN$.BSdj6GuAuw:Tc`^A^UJ|2@-7WMUM.wa+QLDo`5+lN]LUF:e<pnDaq7{x' );
define( 'NONCE_KEY',         '-Fz fVK`]M7ELWjE$@7cdZ Tst)N<Qmk)<o([!+sDg887g::igD?_3LBSzB-_I|O' );
define( 'AUTH_SALT',         'PL9nZ_6,a;rb_wh~w/;R|Z{Si~wm}ZZwWW+m1NZ4:U;w]tIn{%dT?Z[JWIPdB)h=' );
define( 'SECURE_AUTH_SALT',  'c;T1C-wOuy=OHS+/zDep42!#kg)EAK+?5LMqt/d!%y?kn1d++vdR:e$:vm3ga[1U' );
define( 'LOGGED_IN_SALT',    'V)Wc|B5ETK:n?TkC>12!!4>Jx5=V()liy}uM@w7kgJ+c1?e8^M5@BMt-78,+6BC)' );
define( 'NONCE_SALT',        'W^3:Qr[b )j$phW].GKDd_(wp|:vFFvS^(u(49h#Nf]Lbw-&ZwV-8JHF%77MS|ha' );
define( 'WP_CACHE_KEY_SALT', '9x-IBF$48y0s=&Q]gykR4>Iw!D&8GQsV?uDz@c8h4yfts#I,N:?/~q5Eqp^%q4yU' );


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
