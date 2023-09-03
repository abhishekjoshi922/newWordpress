<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'git-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6}Yb~O<Ong/8Kp&%;P8KM;@#mJ.J;KlGSuix)2rvXm~t4C!=H_4+6TSnlkQO1n[E' );
define( 'SECURE_AUTH_KEY',  '`tCiw:6PIjiJU[qNkO7<va0/Glt!dm>An:p2e$K00@;?lq{ds_w%3HaFs6_M=3nO' );
define( 'LOGGED_IN_KEY',    '-7R13/&aj8lF?-.%Ctt2SHuE*OMAVIdkr^~=j,=,,hTiR<dX0@g{`M.tYnUN`4l=' );
define( 'NONCE_KEY',        '@0vEoAHB*10F6aMxA)*F/6H~HV+<,o!#1nw$-38uX?;s3FuX<;4qlum2;rS*}M46' );
define( 'AUTH_SALT',        'Eyy)&q/y{;qIc5~8z3o>`$eGi.7vn#WtDSzNt#[,beRA<R{6hB6o=R={y|cU:TqP' );
define( 'SECURE_AUTH_SALT', '[/PeVC aZ~kR.hu^!y[$=b(3xd[j{d;1Jzo&F%RkQgKi+5g:@Tg}{/6}g{uZ&w<V' );
define( 'LOGGED_IN_SALT',   'R<}z^UBN2i|COTlxB%S4%aS:7O)BqcN/K.cffL6<_6q{yZ5*BlL`O}#kcxjUV_+6' );
define( 'NONCE_SALT',       'eUTqM85l<v+8?,dQG~BxG2r3Q<@,~*~hQ AWB8zb,+Y9OH9hc}/0jvih7z_G-+Yz' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
