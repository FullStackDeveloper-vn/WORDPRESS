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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'IN*R:l#KpWc/UrW]FVNNf`gBKl{jJHeJBk:pWr?,U}hUG=_#87mFdz02pM5O<>XN' );
define( 'SECURE_AUTH_KEY',  'Au[%efmpDIf)fyo|B@w|zr?).-|A7bSw<K>NUyEuB4y0n1M7S>Z.x68O|pwDCRXT' );
define( 'LOGGED_IN_KEY',    'v k(7BZ!(wFgpRVjSaPr>/]s&4YzgsAq*rB]lG=};S!|r`~5,xs1{iyJ@8ES[-g)' );
define( 'NONCE_KEY',        'p[Mhf<Hk]I)jf}n|=^V-<(vNTPu=z`,#{OsD[!v1cTPK64ym<n#;!F4U  bC/K=q' );
define( 'AUTH_SALT',        '&C!:JvthmN%~MLkU#=[.G;]Sb;N0>kmF,0|8ftNsL3RyS%HXU1|X)6?Y-:ZxNv 3' );
define( 'SECURE_AUTH_SALT', '^r#1E54}ARxs5({{Rf8pE_CtGC)4]SU_I6qz6}lu~ 8fCl]?CVp=f*|I+{J+Ux)|' );
define( 'LOGGED_IN_SALT',   'JIQ#CZ9v.zn10q;A30d{c.PT4gI*rHu>exXp0Me[}15Nv#MLxj+-93UihCLOL0AO' );
define( 'NONCE_SALT',       ')SQTZHV3Kcw0z1-)*mhPbU62|XHO]Juvx4sBHVkMJ{i}?Xd:/>@p~Ww?yJ0!4,$%' );

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
