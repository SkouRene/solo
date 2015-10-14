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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '6EtfyQgdQv');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Aqa5Py .sy9%mYKC(V3S.RCH*dl-%J4vosR=C=LU-(nvch*JED!5tNv$d}}^#]]6');
define('SECURE_AUTH_KEY',  '#d@,FLvUWMU9US#lZqT8W~e$ErTDgnT#*IZsCPXh?}.XdLGZY95a!w+UBzu+]0H,');
define('LOGGED_IN_KEY',    'c~6.y;DKCCBv+c0H#B)z76]$8Ef#e4?0k2fS3FKC&RLW`ObDx$mv Gv5W>`?JdPC');
define('NONCE_KEY',        'R4rkh@hXJ/]:%|yru+_$.`40S-tF7SN|gDv@Rf4LdXnNx1;z3PBhDCDD68eue6@F');
define('AUTH_SALT',        'Sg)p8R3)6>9,(BAsaJlm5]q3S~sf_^4)0Z% GGo:M#T_[C&_Q,KHA?E+JRdeLI+X');
define('SECURE_AUTH_SALT', 'e_B,&h))=A3eVrG*s_)PLJwZ 3;QziixHFmxM}/jJn85k(7+<6K9O#&06u.YBKqL');
define('LOGGED_IN_SALT',   'uI0L#wn1QLn8A`4}WU;B=U%P74E|AX%+|U2,*wp3h&4!]nw>r,fgo[bCyoRUdz?2');
define('NONCE_SALT',       'IzAe0GrpDg9tbRulI>lYM^X6CF?}H@AI-VFkUF;%6Pf)Eh#sA;V`NJzrP%5+)Slf');

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
