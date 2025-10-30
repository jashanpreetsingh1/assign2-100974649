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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '4bFucDNhso%e!tISr|2Kz9KTaHaHilKD</f|Jf$<,Ut7oj.F)`[_o7MY~J{?iu#z' );
define( 'SECURE_AUTH_KEY',   '}Ml?W6zZpAH:cf9eD8Axkg<)+GWcf&5.a/s;sBIOV= ^:]8qr2mOS`0Sh,yqx2}E' );
define( 'LOGGED_IN_KEY',     '>3Os#e-Wd zQKx^pg{P5y:&CIyON5bHB5M48Db-[6U1EG~cEh>4X^I(T&20$Ma%H' );
define( 'NONCE_KEY',         'O@E][a/C5P^a!0Y](=4l9-;8Np,)(:Y~YNV0nR-gjd6PWTJ=BTC==bG$$3x&Ny*y' );
define( 'AUTH_SALT',         'LMfqDXpU4l=MTpk%JA!rHsvPoFvwxs)]OOzS(7qg]d%6yp3RN!Rnt2*`kY5M ,CF' );
define( 'SECURE_AUTH_SALT',  'mWTqUI5 ~e-x;_d^=C;9IdB$p1J)g(.*}^1ehZB6I?CwdWo2,FF>:||uF/<fqk@C' );
define( 'LOGGED_IN_SALT',    '.v7K5Z!1{9uS0:t#2-g]y_ >7=?.~1DE&XGv$VQuz{`N<9~P2Kj~#90+}m}AI(Qi' );
define( 'NONCE_SALT',        '+l.fXBDqK7iv9;0UkY%:<X/M.rH/lb}!_JIGS5m`6hE!FEypBy+<o}Rq$,>&g k!' );
define( 'WP_CACHE_KEY_SALT', ')8L->3AJ9$!)hZ@E=W*[@*Ya;u}`lfgs7l],n8g aL WX4sk6`W9h17x,iXQw8Yy' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */
define( 'DISALLOW_FILE_EDIT', true );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
