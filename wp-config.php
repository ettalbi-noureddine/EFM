<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'autoMaroc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'dW-DY.f.gJtzYH&(NfZwoMbhr>}NmI62f^HHu|vJ#cZ/K[LIUe)6*tH&U>c|KVGP');
define('SECURE_AUTH_KEY',  'WUbYqS-~-La.clOg/MRu |2Q&9Uj@BlX541j+p2gn-.m(||s}`Os|i=_,#YiP^`-');
define('LOGGED_IN_KEY',    'h[0x>G#7k5=O_]s?(o5S*{2K5-Of,V;Z|[|>!E-cA^/1%3heohEP*XLI13`+489W');
define('NONCE_KEY',        'oZB6{mPeMHcr>{p/Fc&+u@7xtKXo&@(8Q_]^t*+x]WC9@M,oAgWSI2;LA5WxNR6S');
define('AUTH_SALT',        'uJc+Rxh9B6AnN|cBp6vZy%]Vkixi5hlD|7P1>>$:fxb`OY@0)CL4@}9aul(1+;m/');
define('SECURE_AUTH_SALT', '/J6T+:hL%W<Z|6MQZV*] QGXn|0s~`V#i74|q8=:R|0PSA9W|ZO$tl##PkB`r#FT');
define('LOGGED_IN_SALT',   '=R[#YJzrBV#cy4|D+w[$6?Gq|G !~Ov9ND=%`li[-f)LuSvh=)Amh24YqL8]~4HA');
define('NONCE_SALT',       'jeU?UU_uSo6|5-y,*]1VFvM1|qkNWKrDErvfk/[ccQREY}WR7`7p1Y#yHxKpHzv_');

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
