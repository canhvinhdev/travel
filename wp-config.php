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
define('DB_NAME', 'travel');

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
define('AUTH_KEY',         'X<bY->L7VfBXWtg%Sv}vev%A00pc$cP-<M]2RXo|xx;r}-wss;l@?2!BMs~*4K_e');
define('SECURE_AUTH_KEY',  'Dm2B`(48y}Xjez{vyk|@>44o{g6g0.y^[~,](zDpN%rN<vp=>E]we-l+/WZ sIdx');
define('LOGGED_IN_KEY',    'Y.M^&X5kw:)77i]uTR18LOp}V3YmH|lz!3s^]By=kB+Zc&*bNiUwI:;w$kgn]%yq');
define('NONCE_KEY',        'Gln=T~z9=0:yCjjEgg$=;Ox+zCVxrd799[u#$.>2)d.Z^jStxQUigqZ!Jza]cg$T');
define('AUTH_SALT',        'zH1O Z=-5omiS[a5SM|lj}ZpC Tv7DWYIM_/IW~sI$f40>|6PblVfv6lf09[;IP1');
define('SECURE_AUTH_SALT', 'p`G7e)eP^glDiV`p8,;K2Rl{?KA7|xxIq[jCb9<BCRL1BYXpkOK(l3MGo~Ef,nSF');
define('LOGGED_IN_SALT',   '@M*PPrb_2Vk`7R5Z@ijCW4CP%:qPjOn=]0L4opRWc34Is9&s$2N=|snxhW0PC+!a');
define('NONCE_SALT',       '>>S:iAn8N_dJ%QP*<JVw&>TJC0EbjT&m)y{1`]jsPQOu{0U)3clgSieZ3*c5>C)L');

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
