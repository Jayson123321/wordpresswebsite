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
define( 'DB_NAME', 'juniordevs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'R*,bP!54NGR;r%@yD2+Z=]pAo:@FLvR;KO]I`14w^gSe[2.g-~j9nkY!yl),-L6.' );
define( 'SECURE_AUTH_KEY',  'C|GSE=c;`T`%JVa|1Rc`e~$uRH`aHI=#*H&XhLp%0z5Y66QMo9v!Zb`-pVc>&.bh' );
define( 'LOGGED_IN_KEY',    '8+s9zJf[vbddc82zMevx2~RiI!vJ|:JZXnhlZ[Sl:yzboO<Mg5{?mzW3~7+(MDMV' );
define( 'NONCE_KEY',        '<cX/[[$H.<|}pq,^VBCHC_!(D8.I8o0 a(R|op.e2V %xvy:Y%K~?A*1|;3U9K=^' );
define( 'AUTH_SALT',        ' m>koAJ3XUTzJ:<&=^A|2*j.:x#;60$j #/9fJb*r/z CYE7_-/nrFe{6FI)y#]c' );
define( 'SECURE_AUTH_SALT', 'JRAA/]a`:40X?DRT.Y3edIbbM@I(9]^I~@%|[ZQ<`5p>oM)@][=[YtH:WMj(Z:01' );
define( 'LOGGED_IN_SALT',   '|?.M`y0++v&H+r)WHXJ@HSTpkT.;P/n@V83a:e:`o.P#}mixQ@dJKy5y !*Jy%*r' );
define( 'NONCE_SALT',       'N1?u7$9)W&#Vd-USys8;QR<P%p=R/$$T)zyeED~Yj>PBLxHMNT#*D.%l[BFBWk=^' );

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
