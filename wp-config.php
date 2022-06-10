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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PrimjerSajta' );

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
define( 'AUTH_KEY',         'Ns2c?cVBbulb0/+}Rsd{r$4f7/Z-r~Wxu$459D?~&Ut]E!Q`-ci1OjJcnMF)&H_Z' );
define( 'SECURE_AUTH_KEY',  'D_CA5L=>xJJ-~`}qHe1=j:{@%8;UJTvI< c3641s4/O!LD>:)V{|fB|WzVlUZ@pa' );
define( 'LOGGED_IN_KEY',    '7Y5d1`^ +y2j6m1J6_X9BH=nUWx)rn)5iWF*74,W/`1;hSf+)hN/{[vUMO({3|U(' );
define( 'NONCE_KEY',        'scd/$<*xRF/R~P+f7C*;%<X3ST&S*/$}h)c!RfvM`,-%eT?raScqAA$MnC%.8go;' );
define( 'AUTH_SALT',        'Mi)^mnC?*$Uy!waDMXm+p=8/Q*48njfl<=!g.iNS-lxZ$ md1iuYi.P>K-reh?^_' );
define( 'SECURE_AUTH_SALT', ' NXf+U%Nf,2@<%O_+FHFsi <0NRv-:V{ Xl*)bA>.u8whR_ ^[u*3ndyPqtw{rWX' );
define( 'LOGGED_IN_SALT',   'ZP!61bhw{4nOa4UkCV=GSFa=./<E LI|gh.K);[cN[Nvr8lmpkrUhUU:cYpJ2@d>' );
define( 'NONCE_SALT',       '?}`|e6rMY4So*n|6RIyzD9:WCa{-;Z7`JWMR?D1:7(u9hF1c}/@Uz`Z=DCG`(X#=' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
