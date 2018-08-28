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
define('DB_NAME', 'ecommerce');

/** MySQL database username */
define('DB_USER', 'ecommcerceuser');

/** MySQL database password */
define('DB_PASSWORD', 'ecommerce');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' ;VLZ:W1|57F{*Ck%ak^Nv]-k^zZuu:`e35JwqR5#[{uH$KjWT3~<||N/|FvC|,?');
define('SECURE_AUTH_KEY',  'C># V@5CM;~Zpa|O-&1@(zsJ#;M~+/@|Y921=j0Z Zd>5mXp^/eV>o;P.S+8pJ4_');
define('LOGGED_IN_KEY',    'gJ$F7{Z;9gJqHS=a{AKK9{h<v)QW:i!~>v?k.j[R:)3Tb1g7B%z|OQ#dE# 3&|J>');
define('NONCE_KEY',        'rgs/8xk{qwE#:4+|pbUFj|)U**b6EA /40;$H#Fs3V8>R/yV-qx0#Nmg2n+/DES/');
define('AUTH_SALT',        '+Sg$6p?4Lj<_/( w (TA-6f&bQq1gA)#!-<n+MvG.Mj7Fjr||lE]qFE~~oR6|8I-');
define('SECURE_AUTH_SALT', 'q5c2->G2k*F?/G+,MZ7j|Fd.Wb3$OZni47+L(&4@6>n63i 3N#_jOK)Gz96+#?nC');
define('LOGGED_IN_SALT',   'e0@UYj/2Qi4`{K)nijb>$<@vrm4kre$~+v4l+z<:zX$F5|1IYusm3?J^6*^_t=>O');
define('NONCE_SALT',       ',,aLfFh~O7|`xO+XZo?v%afv=@I-{PDA[K@D(m6*||x0Z^h!|6+L6NZ$ =^Fo0vo');

define ('WPLANG', 'es_ES');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
