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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '(q/9{ZLsbvskfFQ#VMK:4;^2S#pS-k*We;_}AiJC8Ji%r)4!Y{;fM);YP5q8^vT[');
define('SECURE_AUTH_KEY',  '!tY&KHQbla2@/LZ)VcS~dinJ>IXYs5TWhB#<HI0l|.zz5jR)vFHs=S/d]m7m1xvM');
define('LOGGED_IN_KEY',    '/0dlf;:hMyivJnX$(T)+^lq>UO~%N MZ|WCzidaccliLg,@/:<gX,291r/i!5vG%');
define('NONCE_KEY',        'JW3xK!rRNlmqZZBm>&mbjc3;1E`8-4:gG#/kn2iL){e9$a`]M(9v+@)q:Gto5)l]');
define('AUTH_SALT',        'h}&*mvPTQ&_tp|L>vPQ=[vY|ayn02noUJj[}|Rq,69a**DJj3%SK!^1Tc4q/JxrP');
define('SECURE_AUTH_SALT', '|^jUXmsWr9f7cq=*GmF@;!&JjBvc?Uf?eMB+!ywp#awIEf|h6}D%+u|Y0X*:i1*v');
define('LOGGED_IN_SALT',   '?-!0,2r)1es+@$q/QdFl75{M+H2)h[G;l7/s9.DT|f:br{a+$:y5Zn)y=SA2Sc!;');
define('NONCE_SALT',       'PcD-Wtnodf:83naL%KoVGo}xWYC$*X#Hj|48H7lT%RZ]Gsi^c-hP;;s/IY`Vm`#O');

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
