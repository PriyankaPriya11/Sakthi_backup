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
define('DB_NAME', 'c1livelife_speed');

/** MySQL database username */
define('DB_USER', 'c1livelife_speed');

/** MySQL database password */
define('DB_PASSWORD', 'hdFMtoYJ98#zH');

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
define('AUTH_KEY',         '7?;8VKq}z0dk?n?=qS;-rt*CsaiQcj4(6eq{[Q`{6.HY9~rr`Mb6_%j2oqMB6B74');
define('SECURE_AUTH_KEY',  'Z:V4i~U=v7stVYuO)[6!xp`@y=<,#G72LPn!HzVb%5px]Qc 8hvW,6:72Ki}QC$s');
define('LOGGED_IN_KEY',    'riJjsxcyuKgcxhng)^9+)hD4C +Q8CF1e<J21=Q)*T!#bwg1Xk?LVw*L@$i](l:j');
define('NONCE_KEY',        'd6) tc -2ti$1Cln-^cu,J#,-<XupH(lWF)a*kUZmAwx<AYU>cpd+Pp~*UvF>M-T');
define('AUTH_SALT',        '!?hmPydUp.;!CG{e7<SW_5E=cl0`QE)/-+wN^/bJXZ.:>3!*,Iw*|Jr5W?#4J~n ');
define('SECURE_AUTH_SALT', '=A.N|@&=p[se|Sh3_d05>28x^60)l&XjdY]Qg0 e@QZ=E)LbO/$.a@EOG`%4Rx!~');
define('LOGGED_IN_SALT',   'lhGELc}[.40D7po^I(9vY5|gP]n]_5<-L*nIIkgoa0D*f:ng>;!nktlb>g+~9@0#');
define('NONCE_SALT',       'vIdAUS%SWUMj&_({=f5j&2iq+C=jG3OQ-s`Wm6b#wUYz33VHaei%6^VO9|W7sLF9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lls_';

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
