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
define('DB_NAME', 'wpbs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'work168168');

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
define('AUTH_KEY',         '^&*<m&DqX1xV}S>ow`BZ1$uy1?(NU >tpA/0WO(8uaNc[)r$944XB?|~zNlX402L');
define('SECURE_AUTH_KEY',  '>%v/j_!RbKwCZh15Z)uA)Fs{Ya:peM~]p({wD]A$9&({aB[iEjS_,D8?+t1Dr[Tv');
define('LOGGED_IN_KEY',    'x_L_nrH<Dg,((^_/<MXcEYBK4pu/*CF+8GoKZ!e1<*/H JY:,z<My{N:JJ-No08H');
define('NONCE_KEY',        'qUo%Sk$F];-Qn@hAmex0BWt$p>^J$x?5?lxoyq{O)~;JBZT<R_ohe>QZGGR.?MMs');
define('AUTH_SALT',        'ze=20qc/`VxjRsoqxjE=BV!=xnA8Fuqb=,POIepwb1%UeyFx/`0c8LQeEU>yA^#v');
define('SECURE_AUTH_SALT', 'n*k<gfH)Kzdt)HfEu5|&,lEoi8>/-rK)&hswc?siofB7u+{0avz2Q.i:-qEOtT5,');
define('LOGGED_IN_SALT',   'We{g]u-~|?JGtR|>oj+BPD/W*]j=w;@LVWjr>`aghR_B4~cBIo+}7oD,nAl%p ?H');
define('NONCE_SALT',       'kvr/M |Y$# $q_/H4)l|~Lgbh=5*3,:sR>jfO5d_{tpcKAB<~;$*7&47_N!aB9?b');

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
