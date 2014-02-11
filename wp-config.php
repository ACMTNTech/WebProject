<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'acm');

/** MySQL database username */
define('DB_USER', 'acmadmin');

/** MySQL database password */
define('DB_PASSWORD', 'A#C#m13pZQjX');

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
define('AUTH_KEY',         '}kF.;r$|i7>`O=|=Bo&@m+7-nR?F=L-ml,j:)K;XbR@;P_L|@5UAGhpYSg+|&U h');
define('SECURE_AUTH_KEY',  'YE~H*ysb=P]{+!v$-zZ*6(n-sYz3:Q!,&xGY%MS2<D*Uv5tIx6pWf~,yGV6 ;l+P');
define('LOGGED_IN_KEY',    '}|)viQKF*GWS!JhxT6P`irY/w[-vbfEyO8dBXbe=$m,muA*-/%@W339~Fih-T&mY');
define('NONCE_KEY',        '>nn[!/Ug3Bjc8bnr5B$(sy5m42tdE{V,teTL>EA_7Nd(a%+ Whr/AbetQFybceGS');
define('AUTH_SALT',        'r_(wv>Or^oc6Fk8o$A6T19mYl5RLb_[GtjlzO ulsea6B=.W]0|OH5+u#TVPfA8j');
define('SECURE_AUTH_SALT', '~t12Pu^@-0}.@NO|F;j+mwd|:dK|d8|T_--(#(?qr{Yyb|^@[&_xFTxH2k~e]g<n');
define('LOGGED_IN_SALT',   'Y4tSF<f~q 2zra9-nS5ng=&f/Rk1Vj:p<*eYIkQTfifQAnU5kCEjlfP4pg.*q+S`');
define('NONCE_SALT',       'o3 Q_u4<~J?YJ63}$#=Y+I<)N$e;={(12>||By![-gw>{Z3h|4hv|ZK}0}M74ycT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
