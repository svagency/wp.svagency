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
define( 'AUTH_KEY',          'aY0uF%BH,<{(1@AR,E2wpGd!v0HG7L:<hO${TVoV+q.rNbMzMV-FOee9ng=RC:~.' );
define( 'SECURE_AUTH_KEY',   'jS)]4%Dmq^BUzS>,A|7xgbUz$`2%9,LdAN `3^cc.$vbrul+X[NUSB;|Su&bMg0z' );
define( 'LOGGED_IN_KEY',     '(5_bz*UV,@y)#&N|qHxnt|Eq(I4nX.+!g]X.3Y3_O,=FzF9t|QmXC#n0,[Z|qa,?' );
define( 'NONCE_KEY',         'T:H-lXws|)ko*nCa,Vk+4!_9e{AD(G{4U_f)Sd&D[1N$d?%bK&gA$AtV4[y_o8rl' );
define( 'AUTH_SALT',         '$q,ts^,JvX#yOH04{/BT/Wc`o|rOxX~c.Bs*G1K7RR.oU6e=<Z?BW]`)Jz*[o&wm' );
define( 'SECURE_AUTH_SALT',  '*oQ+3k D]xnW3&2`Z>}StfC@1UxR&c2isX@>}LbCX17v|&%o]Q::@y2>P={tgp2}' );
define( 'LOGGED_IN_SALT',    '>f$}*eZMc.Jh[ad}nDC)76Yw6*= ~%P:Qlk-HT[bWbuca6#h`V7ufujU:|8zZR=T' );
define( 'NONCE_SALT',        'f%) `B<Lq5kwPCorv.NlDZN%}q{RR7i=IcofHBTH+wM%/mf~K:05z;.?_~,p#~N&' );
define( 'WP_CACHE_KEY_SALT', 'y;uydrbX7^VDh$au#K}1r]OB{cvC|!l{4J8EZhL#F}vA v$oriNAGMA/Aa|2`#Lv' );


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
define( 'DOMAIN_CURRENT_SITE', 'sv-agency.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 2 );
define( 'BLOG_ID_CURRENT_SITE', 2 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
