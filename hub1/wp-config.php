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
define( 'DB_NAME', 'hub1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Cwiv+/AK^54~g^{wp7MHQ7_eu8ij>qGFjr`|v<-eAxr!xr~+<>FVIVR/1@PX<44y' );
define( 'SECURE_AUTH_KEY',  'Xyi7[^L[9H5uH`ARi,v)#s+9T#$HZ&,}n7^z;hxCzt4l4Pf>m/m>oJJ=APtvfKqc' );
define( 'LOGGED_IN_KEY',    's=%k@^mOCu#wl^[74!UGKQju,sh+Hp@k*@x&9 rZK1+&vGelT+{Rkpz^97?<l-jB' );
define( 'NONCE_KEY',        '0}9N6.+<WM@t7}Xr.^j/&E+(4+F(@%x`pab,kXDP,w=kF6oI$hh6r8G.m_ab+,O)' );
define( 'AUTH_SALT',        '`b.`F)/ZiL5+L{@*dh&N!^[|u1-A*g,L-R?IPmynO]5KN<t!@=Er-GM)4s ]x?C@' );
define( 'SECURE_AUTH_SALT', 'fpdC pguR$UAKM[;i-7U>PmQ?JIdVmo{un&|n>B=IyB!pD-s,gR i~KF2xmks,gL' );
define( 'LOGGED_IN_SALT',   '43hMB790Se>-DGbk`Z]/(]Y7vfg8uU&~W9C+aj![?IdJG|H-wBsq{]&q3Z?Me !O' );
define( 'NONCE_SALT',       'k#6n(y`tNW3vvMfc|Y;qC=#?;Hl-,`CIqqv$KK+XNWs%_)0BTvhv7oO&Ss,bPoRy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hub_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
