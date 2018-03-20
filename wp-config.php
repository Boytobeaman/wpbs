<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wpbs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'pftPNwF3w?*%z4!$rkhe0Gq/J)][ZNiFMfhSdJ>W,Qt^L|}2M7BLyb%n,ov1km`$');
define('SECURE_AUTH_KEY',  'Xn7<(ox6yCe4M2X0-Pl<om:P%0ZEY2>$y7tV5N:Rc`kB{e)Qeruq_ 6i6;7&7)^l');
define('LOGGED_IN_KEY',    'NY$5CCB3jS|5ZI2uJoy&]K9K]1s6CH4Q1i1#&5*|3qPI)PU6BJpV{C i77w?h?$>');
define('NONCE_KEY',        'uxQ2p8yj:]JE,Kmq0tg%.[m~:sf+U`/_pxH/l0)#xXqOqA;w3OjO`)~*>># HC:h');
define('AUTH_SALT',        'A#BUG pauBDM>^6~Y0|v3F=AK]44p$Qzv2 +MD[=@;xZeC27SiTPQ7FD7|ieq=EL');
define('SECURE_AUTH_SALT', 'i[%x%8J!sOpsU[pcy.LH XMK4E+:to=)CG@gqm=7#><l#orALF}(Jy;?f>ATR>`&');
define('LOGGED_IN_SALT',   'HwYoJM&;Abqx}{`3X@.W ~w{|mB87Zr~I,WwQMp*Yu2(ac/e:(Y$ki_-3evwle^I');
define('NONCE_SALT',       '/}12M8,5B3vDkBYk%Bs6$n-7op=Aqi)A.3{$r&mI-9Pm|%E`7g%nv!$kz3@A}o>D');

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
