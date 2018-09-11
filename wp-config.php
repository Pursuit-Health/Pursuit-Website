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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home4/g2w2v2j8/pursuithealth.io/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'g2w2v2j8_pursuit');

/** MySQL database username */
define('DB_USER', 'g2w2v2j8_reader');

/** MySQL database password */
define('DB_PASSWORD', 'N.qdbS&_(W1}Qt,wNt');

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
define('AUTH_KEY',         '..hhm_yP!U/z!$;X{c4}G}sh;p{_,z0z!/0&wHZ{+g/-=[CJ;6HN(w@3)lucJ%lU');
define('SECURE_AUTH_KEY',  'H2&YBa o2LH#iT pOY}9Kb9:u*C&GIuJDkn`,[zo*6By2U~70&vf6v-?X8Mh|<B#');
define('LOGGED_IN_KEY',    'GnOy]_3(D6V=d37&KdPEWN3 iX{tiVP)^Lf]@gca;*.kD#.qc@m aw/N|v6/&uoJ');
define('NONCE_KEY',        ':4Rs[(t``/63L<d`Idi;=elu0/nK<C#R-}#s%/RB~q/y7}ap`/ZD#9~0q~5lKVgM');
define('AUTH_SALT',        '*j.Z&4SAT75<g(!v,1Wk38c7/#Y&)~ ZJU1_cJgf1a0Ix^)AgOwY5Q7$5J.=58@u');
define('SECURE_AUTH_SALT', '3&)9n(s@nzqr]5X$rjde|NwVwZZ#[r7bif[1(!M36kV]t3 XQh$=>kCGOme_>YUR');
define('LOGGED_IN_SALT',   '!4W|yyq9@k1ou)wN*i|j83V+jP3g2_H|Ou_?e,99]h@{^[d,J]sKAa40g:-S$5ao');
define('NONCE_SALT',       'X93B/cL-A*g{Q3TZ qZ{BhJ~LaaAi;d+;]Ngnp/]Q:-b~f@0xoS. /^:G@1q3c_l');

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
