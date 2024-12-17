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
define( 'DB_NAME', 'prtwordpress' );

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
define( 'AUTH_KEY',         'B4;)~AqMd[l)}uT0@esgm++Fvvde^rgHeuL@&xKx@fa|Wk:<_otINZ#e-P7|/|{8' );
define( 'SECURE_AUTH_KEY',  'tyQMmG#LSD$:VN?#aY({WH]^_8kpA+^q1P*1l>NZ1l3,A)n)~H~S2|WdhG<ElXV!' );
define( 'LOGGED_IN_KEY',    '}K/q=.oa%9f4ie6.rCvx;wd.nt:jnPYbz}&`L@7EQdj@XY~Ksen4)z;W)~RwGzRg' );
define( 'NONCE_KEY',        'Ypbk>v,1.D)dYM6]}Rom/Sjk&O#2}%Z8AFU=1bS^v:Oq`uYp/%24n8dy%d$??3@*' );
define( 'AUTH_SALT',        'be{94i3hT)p,,;qwu3zTyL2-M@P~_gi2uO~k@#NY02Ze72(zX$#W^Z622jz8@@#U' );
define( 'SECURE_AUTH_SALT', '@)fZ/GB!;ru`@4g!:mb;[F29%bOh3o$ty:} P:]x&GopVbNFz=sOlNnch30(=qc4' );
define( 'LOGGED_IN_SALT',   'A3|X}|#Osi)ksMm2NN_x6_*AIdrHamiqSj0f@(PA-nJ_&g~L6 yr8<lCf v>%F>!' );
define( 'NONCE_SALT',       '>%_rtC|}fI;);c.nhJ/^MNhG{Jcs7DM<[ 0p_VtO*eo%~<Z_`>0}}uRYi{ZZ./.h' );

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
