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
define( 'DB_NAME', 'ng1' );

/** MySQL database username */
define( 'DB_USER', 'misti' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Misti@147' );

/** MySQL hostname */
define( 'DB_HOST', '157.245.105.80:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_0900_ai_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C^#5yr;2GnO_x.O!OS1gIcHs?;k4-pO??)DA;y(1,&rB8*w@iVmpA)aEbfAGR31F' );
define( 'SECURE_AUTH_KEY',  'sje@zN7u(!;*uos/}# -62Q`4)RyY33My#w?2|k=OsskH#v~yif:Vk2TYYWaQCS)' );
define( 'LOGGED_IN_KEY',    '?k%m0cgD)up`-y6!~wbsPnq.<=E5QN%bgaU*@USJ;1 25nxz tesB >3ilxRakvd' );
define( 'NONCE_KEY',        'a T;|0>8tz1{J-2OsB$RDmAJ!0W]j@h0>&W[=bC`3Gn7GIJ~,aZ/B3zu8@2NuhVg' );
define( 'AUTH_SALT',        'dWF^qVwxw[HNHL3R)dJ>VaNH{aOE(|/X}:<k~-FU3h=`_W=]4<Ge7M|=2d}>l,G<' );
define( 'SECURE_AUTH_SALT', '!iDN1!1$96mUB*4~l{Yv&SFu* </,RTNS42!6?A7,W<}m?dl;9da3iw7@&xP,KxA' );
define( 'LOGGED_IN_SALT',   'K Nb<&)}c4=&^na~BS5e#V~!LI Y2QT1^(FZ8<F1:I>jm1:5b1-EPX7H:%a;P~E<' );
define( 'NONCE_SALT',       'vp7+5rxj|q:l0f2mq!o=^5bV*)JY{O(;~&A1cR9@p*<eMiafc5<6%@c&[f{tV&P/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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
