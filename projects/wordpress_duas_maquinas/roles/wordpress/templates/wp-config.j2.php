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
define('DB_PASSWORD', 'ganso123');

/** MySQL hostname */
define('DB_HOST', '192.168.33.24');

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
define('AUTH_KEY',         'jd&2$5a1>n0Z2A4Po`04ObYTvED<fMR1a0!^e=i$5lio~)X(_j+TXZFuW;Co+NGE');
define('SECURE_AUTH_KEY',  'fG%)?+;Wxt5l=kATM#=G8WP9N5yXT>d}oHP6fFOVhmI:,[-!rn`/ceWPj>1]6Wfa');
define('LOGGED_IN_KEY',    ' ~vv.eR:e4%]^`%6pJV|->I^fD[n$RKp.OdUVPYc)LAiEB k~?`m]dlL?&vL^yY8');
define('NONCE_KEY',        '$ Nnak2rXyfl~;8E.K+]2)2PqBuATAy_dL&|`+`tgRFlxXW}aKu4oW8X=WeHL1}$');
define('AUTH_SALT',        'Ng9jA0<3CySbn(zuUJFb;A#Kx*qXCg>hKvC_G<+@t:c+?E4seTv[+T_`}_k#?XTK');
define('SECURE_AUTH_SALT', 'xg;K}3z;Gon)M,Qzpp%@afrtW%:aYzFVWp-TNI1lE(}Y#xzO84brV]Ff6+]Yx#kr');
define('LOGGED_IN_SALT',   'l*M6cz B$R#nss[ksygE$9D!W4B[}mlJnAek%QED80wJ7#=%t(+xV6tqX1zC!t:8');
define('NONCE_SALT',       '=_1349Xjxpv#D^mY.CMCRS!7v$h%-@!`nZdct|&ne$qIGa}z6nTLCmg2oo4M4AG#');

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
