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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'k)0bz^%i3,vqGlE(U3P/O(e@>QCO%~DC6mCt@3|nW|6bzX+y_Wk,@|m)4@qGL56z');
define('SECURE_AUTH_KEY',  '{8i99-drYjj>5W%nBLGQVvj2pFv(G&-*>T5p>1PG?DVP:.*-v2^DBi-pdjP4Hz -');
define('LOGGED_IN_KEY',    'ssB2P^io1+A+P~V!RR6EO4n6g~Il0RS)$}Q%sZC|Yr{&atHw029QedoTC,|2;Oxb');
define('NONCE_KEY',        '?5!I55NW<pPq)p+hP!>Z4P}P=?KRJ|J-C%H+(?#e-<wumSP|3vH7R.;|WI;lEf?t');
define('AUTH_SALT',        'L*v95U-)ZnH:@Y@1[[S-S7)g1NLwj9#+wA@t6?0|0JK[,8[][Mvlv3-m.uj3<Wj{');
define('SECURE_AUTH_SALT', '@{P<%W<q*O78%v]1YgqUZE*!-o<Ce>ijBs^m&8&y#Lt*xmIo)v9qc>-B/9oABu&#');
define('LOGGED_IN_SALT',   '}s}M[EGKG/q6S<siz==+$^+q2tY<(-p-taLH4-<?W6|v;;v]=O7nPbXDTe>dYjO4');
define('NONCE_SALT',       ':) `=ynu)-!a}wg)&t+JBCp7V4oQ/IVGmJA-BWHYC)Ckb(%8|V$X~HE+#)}A*;4n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
