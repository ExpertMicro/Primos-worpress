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
define('AUTH_KEY',         '4uZsNWAbKlD/1svjLS+tgdFINlp3x6jMcA37xyhN9l8dz9w/sBrVYZ83ebiwqHJwML6Y/5sIjfHmLMlEQjwZDg==');
define('SECURE_AUTH_KEY',  'kA1Uqvbjk3PnV92/yEJDAqDD5CM915yUkhrF3nXsthp9ol8N6Vk/0grARrX4b/HyUg6sUJsot1GbC2kboIegew==');
define('LOGGED_IN_KEY',    'ObHRl5ZIqPiipCUiLUQZYeLmKaI+jXDxhUgrLP0bxtTLbiAsjdr4LdK0rwr64Q7/mgkzx1dskyU9jRvddFs+CA==');
define('NONCE_KEY',        'iiunV2OwjnoktjDCd2dw7PkHNUA3euOy3EzBpTPJqke+z5nV62mhps58+krbAanDRZFlEcMxJ57XlHy+TZzvhw==');
define('AUTH_SALT',        'FYoZcn1uNV68SSTh05XLcUlr8WcCMNnYEoqnk0E45pm8H7nEq2Z8Twek5pFWZcO3PXr5Or+QkVsnsQPi5A03SQ==');
define('SECURE_AUTH_SALT', '5ATxR2IVUuxMT2iLktKLRyTWX8ALCUtJI1PqpCJ5U1mh9t1HtUb4K6EX1qzXONmmpLfiDTkZaFveVSH6fyzazg==');
define('LOGGED_IN_SALT',   'HNEyaRlLra2nA0u3c9xLA8jbKtDIZdq4mUBwzwlErNacmt8MPtREpeDvbJkK/wPomH1SLl3+1S3AxKAO/GKVEg==');
define('NONCE_SALT',       'qBU6vbf+VGUWmF2+vT7p+w727307tLNck6TbShtFNil0F5DGKNRkt8MwMbWVA7D2AhBJr0vpgQuwuZM2WUc5+A==');

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
