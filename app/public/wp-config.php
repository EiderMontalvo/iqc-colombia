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
define( 'AUTH_KEY',          's@`U+)qffr%*)<*4Dpe_EDT25sY]eW6n09LQ<3Xb?@W}CI[Ez1QoX{;mfU4)358?' );
define( 'SECURE_AUTH_KEY',   '+1+3wf g7CHjt8>bRb4zi?i4GNi;fB,{j8oDPnf1&Il0KRGkLRk9b)J~OS75Or}1' );
define( 'LOGGED_IN_KEY',     '~(N5U&NZ58t*6G||} ^IgbSO~Z6r6t|ou:m|<wkyY]z!=) U]$B?V4Zq4f~dDb3y' );
define( 'NONCE_KEY',         'BmQKeG5x^jUQy_f,-=ZnM+,63[s$X.GA|Gy)/u>+D23 Wd27a5m5P>p4>8FPUR#O' );
define( 'AUTH_SALT',         'CH:S($!U|TQRrL/C[qcKtAMNn<VS~{xY?FdH#d+_M$6r{&~o8TwJ^X|JSs9tJ?#l' );
define( 'SECURE_AUTH_SALT',  '3~#^C`z6yT6(ZA$UGnu!|2@?,U@@(o)Cfq+UH|a7V)v.|!RT-?757o{He[%KVRS,' );
define( 'LOGGED_IN_SALT',    'h_WMO{yr`IxxQ(#$%]a_%st=]01l[SmnI9?b0N&6kijyoi[yw5xF;$@mYF?#(Bld' );
define( 'NONCE_SALT',        'AA~z%ijy=VlxWlU2C6C1*d>7l,sQKiy89A#Q97f9oD&YPzCot`!o.~qo9#y4gEO,' );
define( 'WP_CACHE_KEY_SALT', '.uQq}6xLW,gVd`cM4~BP;RJlIk6SkE78y?c}yhA=dv2t+;_Nj{.0hr]|y5U&2{Nj' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
