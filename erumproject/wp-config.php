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
define('WP_MAX_MEMORY_LIMIT', '512M');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'erum' );

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
define( 'AUTH_KEY',         '<&LdS]w.^(p]k4vMm3`B*Y?8G]*=$l+5vcfM^pNj%uiu[|>)Hf>v/p$h+hgbA+42' );
define( 'SECURE_AUTH_KEY',  'wNfFS~eQTT[*%#KC[c8w^/`6XUSIRWfDj j&Gxxj$Vh?!g&j($|!:&hxX3-incO`' );
define( 'LOGGED_IN_KEY',    'SS:2.~TjJwCN<I;cG58z54N:aabox]yyJC#UXgDF/l=(WL@>%-hzAFptv|rZ@N!@' );
define( 'NONCE_KEY',        'EJ[L^<9$c!c=sAiRI;RTl0k^~u-LJHG43ueBPly@Ny72W}P=o#/4z4L-=A4-?H3=' );
define( 'AUTH_SALT',        '~6!MvVipY6a>]P96zKyM($F}O|LKr?Xh9A0l8mq(-,K^L=tEs=074(bF~pDlkmk[' );
define( 'SECURE_AUTH_SALT', '&=O{UT-*M=d+}b5A+4W!X#%4lR`:i-lY(-5D{i7-y^4: n/9TjRV0>;;h}P_>17*' );
define( 'LOGGED_IN_SALT',   'H*#[^o&7e*{D,`c5`$g7W|zP?:%-V6i$vx/$.XfE?j>=Ans7cE<Yr^U-^#Ywx9fN' );
define( 'NONCE_SALT',       '+#/y])E}*gQ*>:UT?%P4B/hMK~7Jwi-O1Pj.0,x2a#Ea^M~XM=j(Sw:So;@WBO9;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'emwp_';

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