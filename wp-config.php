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
 
 define('WP_HOME','https://daads.com.br/site');
define('WP_SITEURL','https://daads.com.br/site');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/eoyxa4epwf5t/public_html/site/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'site_daads' );

/** MySQL database username */
define( 'DB_USER', 'iluminati' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Watash1Kam!ro' );

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
define( 'AUTH_KEY',         'Zb7+M; Wok2z7;yXs|8ihjX^@%C^9T-hCxUCF-SY9l:?*r.knw7n~r{=) ?4>1D`' );
define( 'SECURE_AUTH_KEY',  'V9t:1=62DuV4u98L@bmb .=!njG({D^9p{>CeF<ESEqW+fsZhS|8:;B[0Zz RKO#' );
define( 'LOGGED_IN_KEY',    '#dE{]:TTKN),(#M_8|3OlRJ+%d?KD8.[O6<`roA~!@P>5y&(fid{lnTG~hPo{L9/' );
define( 'NONCE_KEY',        'VZ+%SNWb.ImQgfpWvu/$g4HQuJ4NxDO:~lNb1M%H<x:i6;>_j:1vZ62`u;:*Vh`(' );
define( 'AUTH_SALT',        'H7FzPNxn9dMg@!6Kz>X&|;yRsHz|&qDM^587_f:MT9POINj%[UH;bn4>(X24rNLH' );
define( 'SECURE_AUTH_SALT', '2`<8$J^|*;Vj:V*taW=R$`S|v<$hB?P=$)&5V9R<R_363zEWiT;kr$UX=T<:^8m@' );
define( 'LOGGED_IN_SALT',   'B=W2O]E{hna{_bLbSUS_Kx9PP-Vh! %ysE0r(RuX.D4_d36:,ROnBqnC ni.YV$p' );
define( 'NONCE_SALT',       'eYLh+Al HR;#E.hjx.^;sT4D/c-AA.oH>k}j%JBdHFP6EnBjTn]aQ<hm8hOnST-+' );

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
