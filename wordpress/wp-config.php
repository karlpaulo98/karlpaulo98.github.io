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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9c=7IvJR/RCXSfjn.d`}SE$8bgrqK~nB:`wtfv`#jyN~!%FH6,ts=/tF07?8%3|#');
define('SECURE_AUTH_KEY',  'H5g($69g.kcPqQ%tU 2 :~vexN>s8y1*KzV$-t2as ?!_t(/K0$V*>TmKv6G,M/,');
define('LOGGED_IN_KEY',    '?I~_*Qjdos+bF0t xZGS^G^0o#?G}[4V,-*u:fbgD.CY$u]{Jl%wptHjAF ~p-*p');
define('NONCE_KEY',        'j.9fVOYC7&Rs#%`oe#hK*=T>/M:{OF_!I?z]X]`A~FHyKd:SLk7v<jOhRK?h;8|^');
define('AUTH_SALT',        'Va#VCq<jqI.hm20q(Bq0!n@H8S+7jIZTna5=lY<VTSgU#~#I6$8g{vb3IiG2IyKZ');
define('SECURE_AUTH_SALT', 'g<fmkP8L0E&JYM>+F;FBNGo+o5q|OhdKjD*aUo>VvD@(t:ALiPe{O}vy[6s1-Vj>');
define('LOGGED_IN_SALT',   '#]]o=~)(&?[;O]o8C=O,aEV6`2ST~}NnE(^;ak%}-C@tCx4#33PQmu<dQl3]?!7j');
define('NONCE_SALT',       'JBefp;lmGQSF<4]aP6B)^Bnsx/A NRzMnNv3F#89NpYN=Y0Qx-Dco(crp$j5~eU6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
