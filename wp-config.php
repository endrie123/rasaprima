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
define( 'DB_NAME', 'rasapr_wp228' );

/** MySQL database username */
define( 'DB_USER', 'rasapr_wp228' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Up(b2.746S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'qtaokaacqjkem6tkm6js4ywv7mifg3f1w5ffrduki8hsttzsctxl1kmfbqnsj0qp' );
define( 'SECURE_AUTH_KEY',  'gmukbeeqmns549shu1lynremmudu8tegfvythyohb0itq9123l1xmzizqk8tzrvj' );
define( 'LOGGED_IN_KEY',    'rrid1psyd9rijinx33mygvvjk553qybyptlnxnsr0zc4twvjs8ytxkore4jw9wsb' );
define( 'NONCE_KEY',        '9ebfsawl87xsxd4tisnryxyfmypnhgflc9nl2bvyqiuj0mkx6a8ml5yhmmbui0fx' );
define( 'AUTH_SALT',        '3tyhllobhlijsn9dqqktbs9kgk8zj247d3fjn0u5nvyjy2b1fdetas09osu74yrg' );
define( 'SECURE_AUTH_SALT', 'daqojfuvjxofeg1p3uv8wntov9rsonkgdnhsmt6ckkyjydzrvqktgta6cky6kecx' );
define( 'LOGGED_IN_SALT',   'tbbnrhrwreglssmuvc7peajad4uixwg7cl8dbctodo14iqwpjord0lupm7ex4fyy' );
define( 'NONCE_SALT',       'hk73inuu3kxxpfxqaueommmbksuzaliu0vmtqktjjsgwfuateyo5ll57ncj20frt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpum_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
