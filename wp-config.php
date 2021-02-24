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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'T,~|CdZ*u7vhZ|{,:uVE|Nk3x7;PN$yc6{b4/4/NW$bcj?ET=YO<mypk6Y{b33^/' );
define( 'SECURE_AUTH_KEY',  'ZgEKs)r8{u&cP[G`)DJd0%JU;;5T`1e}=gA+vQ.g`%h$E>d{;;xi)!1CI%|?+:vY' );
define( 'LOGGED_IN_KEY',    '6ckeD_XPH8IL^:,eK[hXrh$9w).@4hdSUaZZVWrfkz$!4T<C`Jabc3XT=Am7oBz9' );
define( 'NONCE_KEY',        'aOb#j.h>|^B65t fxuPt&}E*tr]!$]39%f8-gewnOakK;A)B<.`SnuJ!= ~FB>Ce' );
define( 'AUTH_SALT',        '!2Q4Og(EL`e5fG47UcboD>jjZ#k/Mx>XcydV2ejW@`/& ,?5c6<)QTox}sTreiv,' );
define( 'SECURE_AUTH_SALT', '>m`zIT,-cdBzM_0$Qf$f)9(I*Ngqs0Rgp4-ca[y7EV)kTY}x@2@@=zmlisbSz,T$' );
define( 'LOGGED_IN_SALT',   'HbTv]]45wTrcw:/,eIDZ1mD*BrjNtWHli:-]^Oe^{oG% p{5k(xvT4+dR]%xVX(F' );
define( 'NONCE_SALT',       '*eJA!CupiDD>hIFO5$Xb{`bhvPo9t@dRw# +&z:Mu3mWpA^EV9K*]jYcBg0LDDok' );

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
