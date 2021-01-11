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
define( 'DB_NAME', 'mohitdb1' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mohit12345' );

/** MySQL hostname */
define( 'DB_HOST', 'mohitdb.cfwwwlgwrvlf.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'b+D7a o^^H,{>j.h_;y-iamymdM~Is%GhR+LDmKY7=tbzpl885sBk=Aezk] Eo3^' );
define( 'SECURE_AUTH_KEY',  'a>+V[[bLCQFXZ6>p 9ZDW!*bP`|2bcRi$aOM8t1O.#iBG>!9,<VVnC!fB=`9H~0y' );
define( 'LOGGED_IN_KEY',    '0sh1tBLv?Y)-n ;nZ*[`8rc`ZZuN|[9b]W?OqxrX|9bxe.QIwDP6?}fMHoz(.+|?' );
define( 'NONCE_KEY',        'C@I*j,&Z4~m+6X<FtL#lqcty&-9S$381n:Wh8m2{Y!:uFHjikK7?qAhZ1thJ@YUj' );
define( 'AUTH_SALT',        'KPlfAq)`(Jql4$g8n,9|eVF%kL7 iLR6>NtI`LFBWfvd!=%jNV8;Edsz&D=r|>hM' );
define( 'SECURE_AUTH_SALT', '1Lr(x`(^sgO`If!aDGG4JG%7qq7_9#X8+?~mMnrq_Hw#5gS~vnJFePhbX(s.e@G?' );
define( 'LOGGED_IN_SALT',   't.9xIShV}OCm{]%~>}Bs o-*A/xa8j3ToQ;usn|LHez+@4FLC/#<RSc|N:~h1lmc' );
define( 'NONCE_SALT',       '/a$U3YS@g;~bMnCE]|O|jAN4Qt Ym3]>0zd[<:vbY aPS:[ K?LuE,_<IhQk7x8a' );

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

