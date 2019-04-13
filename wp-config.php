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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'seem4540' );

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
define( 'AUTH_KEY',         'E j|l`yp)t+n5XcgSW,w-%noc~i?tB4X9(2(GD^H68Fsv==+XITf=#O<ENaV/Py2' );
define( 'SECURE_AUTH_KEY',  '50fnG*!1__7 je@<#rhm:k~!`%oB,FEf5tyB*[HW*`fq{5>?dp7<f6y7>8XWy{VP' );
define( 'LOGGED_IN_KEY',    'za[Rp=YmXe*Ia2 95zNOaD7DOE +uL84.*4%kL<|4LfIQpcT+AkRT1R`H^f%WEf|' );
define( 'NONCE_KEY',        'BCz6*rO5J-@^UGDGAJG=QOC1QFAi0I&lbC,$l%RIo0dk*2?XR[/av-]FE~^IKIdC' );
define( 'AUTH_SALT',        '|p0i>u8Ie)MP;~)KKrq3c(Qb0^54mg+2;XRG9-PSF{jDP/Oi&8XWjBhifuC(ev]:' );
define( 'SECURE_AUTH_SALT', '(jHi,sF{,;57,wzw)fqtc5(zXb^nD9x*%,|yE:qBlBWTJJ(!HB<Kn@MX#ObnwN.Z' );
define( 'LOGGED_IN_SALT',   'H&dvD!H0R3@N~kk>.v>Oa1gn PA>8][dI1KiD&{8Kgr#&=Oy#@_TPdf`y)FF8<4H' );
define( 'NONCE_SALT',       '^5R1tc 8aI3`dm}LVK#2[Rg0o/7FXk7zTygVG!><2aK=uv-CLBfo!i(sL8 mXi*A' );

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
