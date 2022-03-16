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
define('AUTH_KEY',         '7GL9uygc4L6hlHqnhF0rxWOxurMByjiBItEghYuO3ZnzeQzQ0+GtOMKVQqSMzcXGnubscZQvW7bXqTqrAfEMEA==');
define('SECURE_AUTH_KEY',  'lw5kN+YmNbDu8agUKGE99AU/pwDdeRjgmsQyiH0BbuaXS4gsvbeilLRQYFOjwFwOrmYspapi73DcH30SpjVGYA==');
define('LOGGED_IN_KEY',    'qv8arfT5jJs1Tt4zVvaSUiTRU8erEdRkh2QmB58MhA8pSpO1uiXOTns83ftCUxE+34gI7Hla2bD0r+S6TrjBXA==');
define('NONCE_KEY',        'PoxZlrVPySHkW03KF4NoQeyjE4obt29Eu65w0kDwY+VLQEhQuqWeDSjKvJ/S7CtXBFAxYJE/FsFhb4qD/iHnIw==');
define('AUTH_SALT',        '9P60pnOor0AGFdilNqsIMt1SsAHjyhHfsQ5yZQxNGGhEy0FkxMt41a1hg7+8HZ5d00gRDC0n8AnKThmG7E6dCg==');
define('SECURE_AUTH_SALT', 'ahBHPBpDLTPPEU6HdGa9MkKoLpYvXvnD02oHSKHpHZYnr3sj+AN55ajbVeJSXfT989vZRe8JsAYpVKIQgpLDdg==');
define('LOGGED_IN_SALT',   'R/I9JuYIMu5nHxRFBZ4m0zB17eeO0MihJldh5Ew9M7Lu6hVmQFUibp9yz3XJYYngnU/o+ZRgWLX0GZQ/OMMAqA==');
define('NONCE_SALT',       '118qz5O0mxermyyqz1JvV1RMn8W+QTAC7NQdjixO9+Dy9H9V2ZqVwufub+wIKt1VZtuwjwwd03sFxiJkEyo8Fg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'http://devhuan0251mtm6303inclass6.local' );
define( 'WP_SITEURL', 'http://devhuan0251mtm6303inclass6.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
