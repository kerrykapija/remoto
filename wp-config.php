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
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         'DaMi+:&p#BU5efK|*Hg&g8Rday CE9fyyzXz{rnIzVq:m7=V1EejI|j8*)]VBm#[' );
define( 'SECURE_AUTH_KEY',  'PoT%I`/Rx2~EI]QJaz)sm<`/psBJ6YCqA(:y#P$4s5s=$O-Lcz?upfWsx6DeU|A!' );
define( 'LOGGED_IN_KEY',    '/0p6MorO66p ~gQ{rPbTAdNUB7g=x6F01Wz2LkZI1X)d!(u2_[77Km3d8E6x6D$w' );
define( 'NONCE_KEY',        'u <05ZIPG(Zr+9aiv=O2(wOn$Rt:k` I,G@6U7cA)-<&-7ggVjr&usZp<x#H_CD/' );
define( 'AUTH_SALT',        'FYP;{g0*:RZw.dvli5~9VQM1QaC^e)TI)5_zI,%T<M|M>HRdea8hW_r~k2)GTi6<' );
define( 'SECURE_AUTH_SALT', 'jo.L!_kYy;.Q`dYw560hp?g TF){}5NfCi~e92SLx=%tS2TUJ,> ]2ZCL4T*cs4)' );
define( 'LOGGED_IN_SALT',   'e[ZfpeEQXmBDr3EHA15fay+e@2QS% HF#n01-W@!?~@J-$H3!#loQ?!`kduK%P,9' );
define( 'NONCE_SALT',       'tBs1!/Ff/&<?=lh$UfLaPL}I> eDRrrd1OK9Etx<@K%H$l;z(iN-aS8T43$_6JKu' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
