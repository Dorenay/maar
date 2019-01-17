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
define('DB_NAME', 'test_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306');

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
define('AUTH_KEY',         '7I6g==@%Wi@a9?9WdBNNSKqcNZV2).q??&kH7&Cc3x#|S[<6_pAFMUa<5JX1Pb0P');
define('SECURE_AUTH_KEY',  '1_prW/!`XUX76TYM.?o%Am~hNY~O33X!>Vs<tgE-9GY%F4$ad;m*+}DU~lI3K/:>');
define('LOGGED_IN_KEY',    '!kr_A`:b({* ^0#HSH#jx^mPR{6ihn0*^WWUbRB%()u:]7g4gNL/Hn#`d:,[dZnA');
define('NONCE_KEY',        '<6?;^n&duq|lHEXRC|9B;NJ02G?vE95Mh;[$K2H_<#^2F}/$KgI>L2Z6k0M2Z!_b');
define('AUTH_SALT',        '/(t)8Hi7doV(xJxX1_ZBxDJKm#n,EZ({EMLA=Xd}x]z4`}1+.WXB 8;M N.0F}Cy');
define('SECURE_AUTH_SALT', ' xnDj]Y*$;V}SKmwpK<2m<wo_;71ke:WVuBe?UZ6j. S&3!Zc5]PJRA]L>V~jY1u');
define('LOGGED_IN_SALT',   'E16E&:;R@ER9tZ=b?Az~mV!0?TW)]{N/SU*6|2X.hjf|MF`-w5<C7RYi=*+i#XJ>');
define('NONCE_SALT',       '@vphQ@AsYT8f^9{H(l!az})mkRrJV7#qmRb{+={/Lo{EyO*A,#E6F9o5(eVceKeb');

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
