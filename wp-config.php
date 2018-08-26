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
define('DB_NAME', 'w_test');

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
define('AUTH_KEY',         '0ef>L5)m#b6}+O/0TlO4Xgk<V&C|/ta~Yy m0Lh*@Z}$x4lFd!w8B8N768z#SF4.');
define('SECURE_AUTH_KEY',  '91d8Z7j0 f%2hY,l@g=d)nYz.?xBgz4GzG6V1qIL/W~$vFO0015]d|UiF8iTud80');
define('LOGGED_IN_KEY',    '63+[C-imJ;)_IQaK^$gzvT!$+fK]qv7-op%eLy+v3ud15 Q2hmiMWCo7CyUc1~bd');
define('NONCE_KEY',        'EhH$}G%`&G62(jr<-{|tLykpRZ?qir;M`&$bsZbyP3Ht9!%uirV;bzf1$=;(@1Xb');
define('AUTH_SALT',        'EJ{Ap`7mC_H]!n26Y{FIluV ^TYe7*uHwUb| GQ;#.`+<F7q;R`F5|]Jm>}^ki`9');
define('SECURE_AUTH_SALT', 'GRA<@{}?@|w2E_ZLLHF/<P7Wlt60N#A9rJAVg(_&ZZ<JMF<6q;JnSG|i{w#,m/=a');
define('LOGGED_IN_SALT',   '1PD8U7;#d$[]diKiU_^hx1Q:$_}i?I!fNaJ)?QrzlRl[wPtU-:7{~&a21VBBmbP#');
define('NONCE_SALT',       'l/LoegF]*oi_8{i9E~f=o6%=q^0Xz96>?4LfQ!m>3vKzGwHuTMgS7p*x!(0I}U4}');

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
