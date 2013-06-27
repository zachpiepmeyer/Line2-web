<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'line2-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '6jR28tJJTv4aTvwF');

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
define('AUTH_KEY',         '/{%9#c4&sf^A8^vEggZPgQ*#p<c1b8D`d8vO-g+0Huse<.EDa@Irs7h**^&.aRh[');
define('SECURE_AUTH_KEY',  'J-m);S}IB/URPVE@p5YqE@i79drNc#B+TKR>/pU`:-bf{y2:I@&q|Sh-z*/+X_+]');
define('LOGGED_IN_KEY',    'k|#+c5b:+$e^#%ZV/Bgu)T)C}#Z||(F|;Uw{tvw)dSqx}wyq);w#fK`,KhwbDmMe');
define('NONCE_KEY',        'z@[eztNO>YU~1f9|eBt4 /|i.~.&0%p|T5i#sN;+SF3rjEUtfA90Dlt[Zmh8q^[D');
define('AUTH_SALT',        '6|-||WRr[&LSkpi0w<f/!,BrT0` +nogNaZXjR?jD&m=4,?yr&Y1FC>^9 e+D</#');
define('SECURE_AUTH_SALT', '}9VY*|~V`X?Rt|++6P4grGkA-+?VK>]@V^0xQNzYAFi1I`tWdJ8f;NZ+ERMuoi;V');
define('LOGGED_IN_SALT',   '*5/Xa6VjSUYqmtS51CvpA-J|F~vuk%/+*oI`xmN]+r,i?mPJ[(|5<3nwhO[Rf~Q<');
define('NONCE_SALT',       '^g~iTC3HbXR2.a2)9!IO*o/SCU%6PRLp7,2T%)VK{KZ@]-w]{b#=qPw`PTGRJ-{X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
