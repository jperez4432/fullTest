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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QsZ/qjPqqAvUh3PEwcmyVwLVD2OdSO9iMDIB3RvsLxipu0Khya3bAvAkKoIWfsIrahox5iZK/lkQbQWFK51xZA==');
define('SECURE_AUTH_KEY',  'atJPOD8Hud7+fzp+4TfjWe+2CcwDJhjBnzePYxYhNt52EZJu6Oh7HKFCDDZ4S9tnGi1HQseZP21RYvYtN7e6Hw==');
define('LOGGED_IN_KEY',    'dKvFs859CzcPRabFMw2dJAwLNNsvUb3YAfW3SKPHjo7kVofan1Xj5OMyjeAZktNNIc2XxfFwsat4rLG3skUyUQ==');
define('NONCE_KEY',        'OpcdSzisHdkPr+xPZ8uxMphWX7//scUoU529oAjMtf9Tkd9hw85lOaW8X1R6FyT9eb38EgZJoz2ToVS9/3Zmww==');
define('AUTH_SALT',        'dR8fQNmBkQnWjbg8X4CPpC1q3IZb7gOZiJjoATJsOYR0a/6KJzwjvlgMMpGJk66+TpXOBII0UvnHuOwFujlrLw==');
define('SECURE_AUTH_SALT', 'adE60FyFpOI046Wj3PuuYhwbNJnFr3qzKmRgndb/mFh+JNwKjvz/+At1mfkPnm+NEWJBTmqTqP5O1ZZ+vvLlJQ==');
define('LOGGED_IN_SALT',   'ZCEx+bf0lISdx1JNcLjVDtTo9L8ivD5x46CES1mzDYToTM+12ddwtrM6xlBxVd4vJpWeU2Ce6uy6DV9pJH+phg==');
define('NONCE_SALT',       'QKSz9mGTXcCbTzDRDir7FHtgcBNE1DNHUWZWxB3gESgRQtiwmmm3eFuri4zjkxgDgKpgqewIbVQLLfkhgcb4lw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
