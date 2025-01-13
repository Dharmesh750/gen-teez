<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_genteez' );

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
define( 'AUTH_KEY',         'g}R|?q1mI98L20;g()_gy5wWCEC:Iu1/HwW-pbeZvfvNjZ1K`1^#9JzSUX(Y6D:2' );
define( 'SECURE_AUTH_KEY',  'e$}|.laS.20,.{|$U(yI;TUYgIWzt~Nx_v?3<aCQ(t?]/Cs7p-N/Jl4LBgtdz^7&' );
define( 'LOGGED_IN_KEY',    '5wWWl6F7n-4u]7XhQkt&XLU|!bii&h{* ){Hg~rM.k@vC0oVI?e`EN0/9SU;r4zA' );
define( 'NONCE_KEY',        'tcm.JGGh462|R:.}6_[fpMri*~299u2%mTJXnhys8piM3fdY#V:V&GGzQuD)<b^Y' );
define( 'AUTH_SALT',        'SdwVSy:vUEG3tE-]5g]E*A0Jt92T7&cg]ikD5uq=nYmP(dV4D0gPfyy5q_^Oq:<!' );
define( 'SECURE_AUTH_SALT', 'UUst4p^L+Q-^>7+x_7tCCl}h#n7*)=[kb$0B5.QR^O[88u,I:l0rE4I3g}+?nb]K' );
define( 'LOGGED_IN_SALT',   'aVUY-v.bbCuTr~nUyA{.BMAmrS@sgEQJ^r+8w:ZV]7OQ*L0bf9 ~Zn43/Ez=;=0y' );
define( 'NONCE_SALT',       '1x553797>B|{w-(rX[9o3O.>vNPK SZ8D~Eplf6~bYJM.x+Yd`%(mz}|4jZc@ugJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
