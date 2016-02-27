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
define('DB_NAME', 'wp_heykramer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'steeler$06');

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
define('AUTH_KEY',         '!E.oDJU_dFyz(]&BV&-Pp7x|d0SmoVsi|q,dk+O|ww:d7>?j=@]yM}6|q|es`lBT');
define('SECURE_AUTH_KEY',  '4~Un0-~)XZeB~3TD`8{>/E+}(+gfF|nj|wKdDn;?#!2/F]4q$PO.tqw9yWLuRe-C');
define('LOGGED_IN_KEY',    'd,83pX@+_e+<{pr-@)pF|`T2IzGXeWyb5O;6/k+{n|M;I+4LC0Tz+0Mg)kITovyo');
define('NONCE_KEY',        'i1!LFvvuvN# Ax^fM r^g<WW#q$?MS:r(EgbRGD}M}(=oj/+<(w7_HJ$3AbC8VFM');
define('AUTH_SALT',        '}?]-L]C50T]U;BkQW<FPQ5k0IOVt;cO=o)MjMuO0_|qaH[v|&P@u&r.[$bHx HNk');
define('SECURE_AUTH_SALT', 'Lg~8 zJk8`#Ry&?KgP>x=r}1{z}-?nJqHze7;FW_(PG;0fwA<|#s4SzH)yBrP;HZ');
define('LOGGED_IN_SALT',   '/6tc S!6{N1<SEGA)Qa`c%GWV}!t tGNGY9|N3%jeoy>CM<I08|7a2.|rngvcB-q');
define('NONCE_SALT',       'vfl|sM&d0u-+PPR35.7!p0lHASPMqcLdS|^>#P#:A cwcCcpvOF-Ckk2c&n5)hj/');

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
