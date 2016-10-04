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
define('DB_NAME', 'mariablair_wordpress');

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
define('AUTH_KEY',         'Il!)p@[=fzY&DX2{Uw>v&]Z}Pv;GH,w/zMxE`=WQ3lF:(v/I$h,J.0Ubv7$Vx@{[');
define('SECURE_AUTH_KEY',  ':Eln&p4`qb/Q@Fdw43SqC(*;6::Q ]sv+SXI/$A#i Eg=1@V1`|jS,U,+nka:Pti');
define('LOGGED_IN_KEY',    '_z?y-;dq,XQ$s!OB0<wC%]u.C/AV`1UdWIB<oS27x:8f8AXrrt[TG(5O0.AYTb!T');
define('NONCE_KEY',        'rbd]-tF$P4kI#g0;7x?5Ld^N@}-3tdGPveo-AS;NmC)r/y@2tig:t]_rCd)O~LEm');
define('AUTH_SALT',        '=?3iGG~^WhKnN%~3V]klB*eJn6W1r 6DY|Wcaqe{zYL8ZD,hHvv)K]~ze9/jpONr');
define('SECURE_AUTH_SALT', 'Kp!_?he[Pq&X|[smZE`wlsQ:KaZG#Vy)|kiUo|eG!IY7,F,Fv Tg`H!v}=s}ipk+');
define('LOGGED_IN_SALT',   '(Dqw^/G>6ZmoC*;K?Q;690,{G6*|{5^~Tn u_sSmqTB;to&p?oCQv`$$xzUad<dX');
define('NONCE_SALT',       'H&NwTL5HixJr.2yn@]!R`pOJf@3Zk!)?,}cd8^>k/DJ#Ey O}r)`9/~3CIT$;)3[');

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
