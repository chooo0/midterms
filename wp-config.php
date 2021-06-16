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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bikeshop' );

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
define( 'AUTH_KEY',         '|qK$r#-$Wwil ;_~3|ni3JBjVYk6JRU/Dn);Giqy4WNVxpUo77&}ZAhB,*<C)Wb>' );
define( 'SECURE_AUTH_KEY',  '!L}A4D6pY>N>V-hz#j;n{eY,LL6F<,tANz=yCVQP1GEI-pomFWQ3zk]AM=G9K@lt' );
define( 'LOGGED_IN_KEY',    '`cGt) .80T3m7S%X3F6hnT9V)]KJWTZwD(}Tw*FnmM2HykoKmC+%S0v#jQ^1`6!h' );
define( 'NONCE_KEY',        '8Xe05C`4ipf Sb/[M{V[g|HqLfEi<^J6?.xHM.=/v2/-++6e41.z#8>-/0S=Q=:,' );
define( 'AUTH_SALT',        '1JF#*h_@?F[x>FH-rC}5M||}PXA[nQ|nd9/1xLed[3=wo$Hdbhetp<PgRhdlt9pi' );
define( 'SECURE_AUTH_SALT', 'Eo1}qcv6]hzeR^=%N5}I[N#/2`v0p#<?{^}Tl(bs9w]qX`JU<@,<4kC-lP4 O;O{' );
define( 'LOGGED_IN_SALT',   '`*R[(Sp}ZXIL9!~&^]nR=,/U7GG2Pmzc_hnsoFzi4:N?_d;y^(^pRYlRH9l5o]xZ' );
define( 'NONCE_SALT',       '1jphnQGrC.Ulf+~vtrVSWl/zBwSkfdCn)^bA8^+z~<-?7!wlL.<$G)9)WzpuawoH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bike_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
