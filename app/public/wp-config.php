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
define('AUTH_KEY',         'dp6mit1W7ZpziWciLqxaSUpNdN/Bqk/6NRJ8KPnWoqLNoJi0+w0Yu2w2k/1wg9gtzthA7vlcLKK/DaBExQ0ETA==');
define('SECURE_AUTH_KEY',  'aqlmqBvZYM/USNycDsh+EcGgm4/rzejyCQ3LRF95mZhmjOeleob7olFsIb6ceJe57oKXsM9BS5xyAxUMFp2FcQ==');
define('LOGGED_IN_KEY',    'WV13AFjxUxcND7Awq28KQ35TkW0dJAxEw1rjVKSngs84VHx1gqcRaiIlddwJsdF0d6K9QwSnpmdNdQx75OK6/A==');
define('NONCE_KEY',        '80WAz6FbQ+nbyoJCUI7ye15I31kI/ZHlQX11bNwLEy7atmlYJdbGx8kPZ6cTEFFMDz0fHNqbHOSB+LaKLsJm4g==');
define('AUTH_SALT',        'hQRvVmxDP3j1yebXD7xeClLOdfqZztz0uOx0BTAbhmUAXGdZePMYa5gV1hsw8g0dQqpILxFCGXwQu0FmUcSdRg==');
define('SECURE_AUTH_SALT', '9HDj1JWxBuDCoCgEP9uk/MCkYKZrD67lRsDEJn3RFVhtxFMhOH0gh8ej7pFqezZdjHq6kSOidy4HK7SIugOAAA==');
define('LOGGED_IN_SALT',   'dShYEVRCF/jv2zDdOGpjevd5JSkOQen0NqmWtBxLK7RUkMLJBQAMCM+bQXoJohbOBJMnzvGXXjMQ27WB35LPCw==');
define('NONCE_SALT',       '5vOSte0bzSf78WXki3k+ZvYb5ZMTCJuVjfPhd1uAi+Hbw2e2baNezbdX+SiCbFnm1lkGAQY2ljbgL/8ibFeWZw==');

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
