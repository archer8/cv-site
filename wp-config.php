<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link https://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'R2scYrYZfKLQFvDv');

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
define('AUTH_KEY',         '3|,48!nUAok+c.IKo:e$_n)73]Q6o1=a[>C8F++yBV2d`B%u8x4/eLD(5~|_AC?}');
define('SECURE_AUTH_KEY',  'b97y?pcP|KdS_N*{[cB1_<RV5JBG+JE!%s&4Wrq>5oXz,ujuA+gA+k~_c<2)Vild');
define('LOGGED_IN_KEY',    '6JIKlQhUl^I&=dX(2(VG6y$9/jWT#t}x_kh%kEn+dY$ZU;rsiq_iOOSa?(9DWL&b');
define('NONCE_KEY',        'sWbC|)sP:C#qYWPa@#*ekuZhPH(1[Gx>B $;j[<PATq$3?[*rMs2}-T^,!fp{:|q');
define('AUTH_SALT',        'E J 4j+1Le<cR;^H1OS%Cld 9<0>a`-qY0hECZpQge<6[sf)W_I*s[_49^~g]VxO');
define('SECURE_AUTH_SALT', '3M!gOq_ (t >EFv+|OC^UpV|-:iUDMFO^Q?C/L|*im9ak2m<ylGuKTq#xL HT*wK');
define('LOGGED_IN_SALT',   '.8BR>;+Jj5f=!.VHI7HN26(68-ha8nh01F6R5:orCa0J1+GV0w$V(|[8o[-UE`_Z');
define('NONCE_SALT',       '>x+Xh:@B|BwWia+$d(p=,cqF!JU}/|K-g;I%4~VxE_|D-T].]7Ob,in&1-`tu57m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to Australian English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * en_AU.mo to wp-content/languages and set WPLANG to 'en_AU' to enable
 * Australian English language support.
 */
define('WPLANG', 'en_AU');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
