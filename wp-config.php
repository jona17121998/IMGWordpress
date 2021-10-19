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
define( 'DB_NAME', 'exampleDBzoqlf');

/** MySQL database username */
define( 'DB_USER', 'exampleDBzoqlf');

/** MySQL database password */
define( 'DB_PASSWORD', 'LysVNQKBEq');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'HiqmuTaXeqxu+<;]iqmu*<.62A*<.{62ALTPXD9HSaWepxt+aWepxt+#_]5qmt*#');
define( 'SECURE_AUTH_KEY', '8>074BNURY7FBJUQYgrnvNVRYkgov|gnv@,084F>,{7FBMUQYjEBIUbYjrnu^UQYj');
define( 'LOGGED_IN_KEY', '{7y.{36EQXT{3BIQMUfnjEQMUfnjq$,^muqy.{<;A6E.]<;A6EPXTb2A6IPMTfm');
define( 'NONCE_KEY', 'x#;5HDx.]#;9HDLW2;9HDLWeamtWSdlhpw_]#:spw_[#:9GCO_~#195DOKSe95DOW');
define( 'AUTH_SALT', '6PXTAIELXfbiuqEQXTbnjq$,^bmuq$.^<3A6*#_]6D9LSPW5DLHSaWepxtHTPWiq');
define( 'SECURE_AUTH_SALT', 'AEL.*<3A6EPXTfA6EPXTfmiq$y.{62ALTPbifALTPbiemyu+TbXfqyu^<.{qyu$<');
define( 'LOGGED_IN_SALT', 'McnIEMYfbjvry,iemx*+<;{2E*+.;62DLHPaX{6EAITPXiqmHTPXiqmu*<.lx*+_;');
define( 'NONCE_SALT', '2TPW2DLHPaWemtLTPaiemx*+<iemt*+.;62A#;]5D9HSaWeD9HSaWhplt~SOWiplt');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
