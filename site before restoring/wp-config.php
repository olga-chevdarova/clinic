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
define('WP_ALLOW_REPAIR', true);
define( 'WP_HOME', 'http://osteopathclinic.com' );
define( 'WP_SITEURL', 'http://osteopathclinic.com' );
define('DB_NAME', 'osteopa2_main');

/** MySQL database username */
define('DB_USER', 'osteopa2_admin');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'W}zv32A3D.A(7A2{,>8?&bGY;SV!*1toYYB~mDr*bUS I0+7af0Mhd1^=x`it<Mo');
define('SECURE_AUTH_KEY',  '3)#nerJj3ya]msqwTNF*hl|[AI.$e m$@&Zf&fG(VS)uErqEYf2Xc9IVL6l5qABO');
define('LOGGED_IN_KEY',    '1DvFrQ0>6>cy?*orn8qVQ{X$fG#D|8LSUe,}%TOmVasSR/hdsq4>)NEG^S1e5Zhk');
define('NONCE_KEY',        '}3#%Lf:b&hU^6brR.Cks+&ltdCynH[P~GW`D<]HEu.H{,O=:532M{P8irKBT:rO0');
define('AUTH_SALT',        ']45}bqKdKU<=WS 1[OXAP56#)m#Vu(VpkU<L$]1,wBUx)*B[1,8(?8n@l}I]gx}8');
define('SECURE_AUTH_SALT', 'ZG]v|!7P?@ue} !a0P=dr1S8=kW_IhQ^kn+3Fh(NX(*R^qt/84P}u47oCvK73^ M');
define('LOGGED_IN_SALT',   'LBD#[[ dd3#BtB^+/>_T1Y4Q5Uy@=NC(7fROy?*cxIw<->a{)q#7@fPl^&aWpqr8');
define('NONCE_SALT',       '5hw>=UXwN}?Tl9o@(>,hM!~t$X]ZErXlOdK2wHJC{i$K0Hc}Ry!lv;pzm$6/EK>s');

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
