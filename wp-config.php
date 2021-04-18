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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '?B8<^jBK.A-`6~b0)QmI:sJo7Pi$<ZeVZ.zdE<,)%2ra{9U^pSqH0Mnau/iTu;Ud' );
define( 'SECURE_AUTH_KEY',  'W}^yk;fgiXO<~lX.{nMHWjn^0E`Qb&r},-0] uEWuI>D495(aa>qGxuLG}G9Kh e' );
define( 'LOGGED_IN_KEY',    'Nl[snhtABPpRH^QML|YB/+j@<m2q.G=1)skF=5qR|c[R@DQfHNq;lPp%7Ld/I<ok' );
define( 'NONCE_KEY',        'T1PB`4-.[[RNDw$E^D-8a}mk?%V6fNp-,A0x[8+I4+fsWbJo9P5Cbtfx2gL8qd?M' );
define( 'AUTH_SALT',        'MoU6W2bwmgr|nW+[O72CVBOi> E2h_`BXaYkR/Y}vT:CArc<Fb>j/PeYf9)R%C5I' );
define( 'SECURE_AUTH_SALT', 'H)3cj7jVYSsu<#x.5)1b,{04!1q-O2)5A%/|BSR=vs^230}wQT|<ZK:3!/4yH~#Y' );
define( 'LOGGED_IN_SALT',   '@%mgfr3NzNj k=y#[$J2=cooF}_vdb|qzE$Fe{j^g7f-eQN&&r8f,cgGGN75M-P7' );
define( 'NONCE_SALT',       '6U:Ez%?nElo?86lI|@R}s/:^1_oIp#r^Zc]E`Ae<_~8w:YXg!S>`k/9i+p#E[Fg_' );

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
