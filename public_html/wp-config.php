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
define( 'DB_NAME', 'bruntnet_wpbn' );

/** MySQL database username */
define( 'DB_USER', 'bruntnet_wpbn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p7S0[23LT)' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'htqrhtlpyr2ttxxmpsoxxcwywmczgiypjk5sqf5krcw2rk1xvv0dm7fpmqbx2hvn' );
define( 'SECURE_AUTH_KEY',  'eoobrxiscewaskbvqctirmpuzfbakepgyljtbobjgfmqp88dtm5c0mnq5izqmlbp' );
define( 'LOGGED_IN_KEY',    'jmv02tpx2pecpekua3tolegulmyiha2tmrtfhcg4wraghldzkuja8i7xr94gughs' );
define( 'NONCE_KEY',        'n3tsu0ziwaz0vvnyd12zoccv1gylbjmz15tdhqwbr5qzjcnsydn0pqxeyansfs8v' );
define( 'AUTH_SALT',        '1niidmoyx3iu56df11bhfu5ryi9zp23jygz2o8uweup38ldtksyet0k0ql9hmpiy' );
define( 'SECURE_AUTH_SALT', 'umhvc0bcjymt6lliad69xcq37rjfzddqgiq0tfiavgzl7p1qi4ydur2xki6fgqna' );
define( 'LOGGED_IN_SALT',   'gxf1qr8quovezeiuv7cbbcwpbdtjpdkj2paqia4ncmgx44spxuk9exikouw5w07s' );
define( 'NONCE_SALT',       'mhdxeafrclkkgwgzpdsjkrvcywk5glyoub8bz9zjb6dowe5pj5k8beootaww2qxb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bnet_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'bruntech.net.au');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
