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
define('AUTH_KEY',         'edRI638Ji44qTGBeEMUJ23axXB3XR++3yXnQeY4ois4lEKKOr0uLyg02oqOgl7IaxNHmXWgp5HtIJMKOFPYsAw==');
define('SECURE_AUTH_KEY',  'WA6+2bqyWQadsers/F3opLuq4bBbtZh5Vva17ZfivpJskXPcDB9OZVWZp5//lV1ua8OUBKQUinnMFrppPzjbsQ==');
define('LOGGED_IN_KEY',    'NRvxWBaBII1sUWmwebQvdOkkuAKWpLfQwLjEhE7amCVz9C0K/u3abRR8JjQ46RXl7anSdBLlS+rVpsVLorqiqw==');
define('NONCE_KEY',        'pmnxacD8+N9wlXoVhW0YfwNnSRNuIiWXpLrPjy3ERF43NkXLgx5uR1OL796u3LcO9+Wc0RYlESA2YWxFXVMgsg==');
define('AUTH_SALT',        'gsc5xnQFKuzak6Hb1pyNodQxEUpA+vT+ey8ZlkyCP2S56XVf4Ye8Ockfi9GHY2oKyaBQhEcE+FwFQLBYNQk0+w==');
define('SECURE_AUTH_SALT', 'Zi8n5sLPyB0uV708HaWR6k+A3Ukm67WEVrKNXx9vHzLpXoliNcuGwsNI1Yv4EEVxOCf7dCXawtOo12C0zxniyg==');
define('LOGGED_IN_SALT',   '3US5UmOYVjxT8grYSXM3/DOPivKL5QP/HBDegAeMzzfxnyfNKrI3wNBEpXaNi+R5wEMfwgHiL+1YiPNxHJe+KQ==');
define('NONCE_SALT',       'SAUlQkkT2Zxsj25yOxt5MdQ5C1/T4eRbkYLvwAyRdzP8ZejbFSNAMmNWrlbAlTO8W5w0XV1RnPAU2PVLa3ZG9A==');

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
