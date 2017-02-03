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
define('DB_NAME', 'qualcable');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'wU;tA1ZQ;~3=(Cz7&m,.Z|,H$DT70mHd9_Yc1FSIe=K>xJ2I*,L?ZZ+#?`VTQ(cI');
define('SECURE_AUTH_KEY',  '`!EcgM!&:Y/cz3)edP]y/vY?FH1Dz#15Z~czSUjdbZ- 9#aK}jrNe;:/1_mT6Lm#');
define('LOGGED_IN_KEY',    'U&*zAsjq*r1!)3_Iw?S]N~JaTd7dh<B6Vga]C<,.R 6)2hC]gl%3FB D@fX9sylF');
define('NONCE_KEY',        'AJaryv8=rQRJ]~8WKc |RK;nrpc1 j&hE1#INqf{v6i26AHhzk^,x6z<O^YGne[r');
define('AUTH_SALT',        'x#txU*Tojg;c{*z8VC^Jo`K0CM4;fM1;6jgN&31~bU|S0sE?<<+ouPANsy7T5`Ao');
define('SECURE_AUTH_SALT', '[jFV6v/B=R](9z#RFlQkA/Z5*g-(ce!N Ncw0X]=&Wjki7G8fj44UkK=#WI!o!&s');
define('LOGGED_IN_SALT',   'd_%%YWPuhPqMV;823<kZtJq#K=s~t8dC2,W= I*Q&#iZSca`9i?j8,6}td`QALY}');
define('NONCE_SALT',       'vh#^,Dq4-s~]>o=Y4}D9p3F0`kAE9Q+4bE7MdE`|nc}KW0oT5 MAlc_EvAFly08e');

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
