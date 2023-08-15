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
define( 'DB_NAME', 'template30' );

/** Database username */
define( 'DB_USER', 'Wajiha' );

/** Database password */
define( 'DB_PASSWORD', 'warka123' );

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
define( 'AUTH_KEY',         '0P1SX/v`,NBo:ic!bTEC|:YDwDJVe7T-iV;%|}^stS~~G4d} 7Z*vyxpNY#:&@u]' );
define( 'SECURE_AUTH_KEY',  'i_u6c&Wmi*i. nalt%M*fA2dj%#lDrj>4sJ!*:ed-@hbkcW[`U&%@S;R;)?&=[i$' );
define( 'LOGGED_IN_KEY',    ';Pxl&6v~8rN?4xwR!}TBN/=>Sc.~YTps,~Jv:4}1oG^yq7s>./5H,Q+wHf>)YhUi' );
define( 'NONCE_KEY',        'X]0K]7]WfVg5K.U`]OWTR!rJ)tJ,4=P94cfC(>0rs^]Dci$YdoP]i+rM3uzx^u:N' );
define( 'AUTH_SALT',        '*Cu{*.6d&pC.Y ].va2jQ:Tv7xR||j!=<TbJ8HrE2K//hby|-[csjyExM+] dcN*' );
define( 'SECURE_AUTH_SALT', 'F_i!]NN?(1Zk fu<.R:}jfEV%I{WD||QaWob?8)rjSVCy4Dp-Z6lJ[w)S&NCDQd-' );
define( 'LOGGED_IN_SALT',   'L.)2 9Q.M^<?a9mfb_]x/,|;39&SP,#;T?qT|Ms|PkLt_~1pwvf6x[)IGQOsvQ`i' );
define( 'NONCE_SALT',       'xWsN1F9sSZ#uvmVq_sIdE+c{?t]F+#}UYKcY@TH|cM60g@y@H{Q<0[A6v4hW:t^9' );

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
