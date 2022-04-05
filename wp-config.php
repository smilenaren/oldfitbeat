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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hp2478z62b238' );

/** MySQL database username */
define( 'DB_USER', 'hp2478z62b238' );

/** MySQL database password */
define( 'DB_PASSWORD', '357143401dccb3e3' );

/** MySQL hostname */
define( 'DB_HOST', '10.3.64.4' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '7ea6ff5d97a085187e78cccfc3516bb6bd928b00' );
define( 'SECURE_AUTH_KEY',  '9589289682595f1ac85bbde19c2e37ba66fc8900' );
define( 'LOGGED_IN_KEY',    'bfac338dcf23d20f5a1d955565c66a59acbccd97' );
define( 'NONCE_KEY',        '80fbd36a652aef7ce4fbf30c522fc67f01029eec' );
define( 'AUTH_SALT',        '2181de8b054d6a9c1f193d3c44ae4b000c0f721a' );
define( 'SECURE_AUTH_SALT', '278dc71728f21703d12a3d9cb55e693473238681' );
define( 'LOGGED_IN_SALT',   '3ac7cc787c5944871d1078e4f87550cdb7256b5a' );
define( 'NONCE_SALT',       '666db4dcca181621e939999364dbf2ce533338ce' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
$_SERVER['HTTPS'] = 'on';
}

define( 'FS_METHOD', 'direct' );
define( 'FORCE_SSL_ADMIN', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
