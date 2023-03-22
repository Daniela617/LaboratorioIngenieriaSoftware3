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
define( 'AUTH_KEY',         '~P0!/#>%Gh{3wH]ASeiFUJ=(hTN9QmNfw^HTlBd4*7`m#=itu(jl0kyTx =bGB~|' );
define( 'SECURE_AUTH_KEY',  'X<xCS, PT&^%1ad+thz5&?5M@QW.F#J.4=%a<B?]UCH bSuo%E+pK<X65Qh1*kN6' );
define( 'LOGGED_IN_KEY',    '(:7}MmbkpB|;tF/%qQVKmu[J-p0!=9alLGH1>4t`Cl&Lmj6coe^-py&Zhf2dxt-I' );
define( 'NONCE_KEY',        'X&:Ag#FIAm,UNN`~^Pt[lM^U|dGV~J2H/:(PRck&vw6q72EA}{ .qmYZH}byT!5u' );
define( 'AUTH_SALT',        'I_8^Yz&k+}D9mRU$/Fno!$[kuU8T%Y`AzgOKjM!k684A(P HoL!e>Ul/jIdANvf:' );
define( 'SECURE_AUTH_SALT', 't+N<R3! ]4 L+{DZ&UV6pm!}+BUj/Qj=j@2<V{E}zACv7ZG_83KH7cr?Qfk@G^oc' );
define( 'LOGGED_IN_SALT',   'RhPbMwuX1&3: -W&EnJfqSr-}$3{]%q-+:.7^d*9#fN[LeoZ shvr :CO]DLK1)N' );
define( 'NONCE_SALT',       'QP*$pzJGl hVPX?ZTqQUU=WcK@TjJ-=Q6ACAL{WcmUBU(nh^?BFGD|j^Ic1YQ}?<' );

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
