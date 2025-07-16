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
define( 'AUTH_KEY',          '3%PvTe)Z)[Js]#6h[aTME+JeM*As=}IRM@WH/^ND,II?TZIT]HK+lCN#N mTiXU*' );
define( 'SECURE_AUTH_KEY',   'g~;yB_QOZf/Srtdf@Uh-H98/<w6<?gxfn*X+u+tYI<YBhKF.8)n|a{%v&2LJ8?b*' );
define( 'LOGGED_IN_KEY',     's)Fvelx+w&NEQaHnr6I6@{SOUU_R$F|w^,S1E*QZ?2M/A~_+bR@xDIiDK7JFj1|2' );
define( 'NONCE_KEY',         '_7D@h?xYbE5s.ekql#*enY5hp8Xba+MjtZ,(AKfJW.N$l.d5SEs$#-1gSAhO?.?1' );
define( 'AUTH_SALT',         '0LY@3A]k?%k=z=r{&j]oI;W[JhA%!0dA^|=6!s]@eLD:vSb9P!z<Mh/%(n%{{qn0' );
define( 'SECURE_AUTH_SALT',  'YElWdH&Y>Xo0-td+<T~`%(X2]`SfxyQpF>DpR!j>O@h8vZ>}%uOHXJ=1G$nKGZSL' );
define( 'LOGGED_IN_SALT',    'iE7d$]0&=}DSKMO>8O3L6i^?wKt>}hhXW8[! 8!6~W~PD#n)_Xz5:)-:g2z:*qIh' );
define( 'NONCE_SALT',        '7nEM&:W8-q?|50#;# 5,WxA!1hT*>qH5Dd:~.~xQv_z@Zx&c!4A{G)D~JMUhzTSF' );
define( 'WP_CACHE_KEY_SALT', 'Q26zsz +<Z6Ig?A2*N/yaufVcL:uZE[5$SsMh8YiR8@g}x.p~O)zafOEz=(yA9Sd' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'svagency.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
