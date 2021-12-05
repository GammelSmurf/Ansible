<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb01' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dkfl2001' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.57.103' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3}a#!Lw|5^4)c=Z:O;Ia|e(gZ,Ute<5Dr9|x+4<3`j~noklfO*-p-G1>9<.v8GBj' );
define( 'SECURE_AUTH_KEY',  'QG(ADuPfc-`W6$bcyMH8fS(r&vsH,/e{Fep&evjgHoDxUK:Z]U];Z9FuCJ(|@,f-' );
define( 'LOGGED_IN_KEY',    'PYJvrST2}b(_:N$u Y#2u@4$@(%gUPuz(BT-eLS nyV)MeDD`/gn2!#1)hGK/ttf' );
define( 'NONCE_KEY',        't$Y;;]_!}4Y]p1/nS8*^G`K5hXm Z/i#e2F!%nxV}(`2po6~=mpJy~yA(zP~q:1h' );
define( 'AUTH_SALT',        'ulIyR;/IfJAKu=:fgw^#7:Z[rLS:vG3`3%q}(U#F6H@6Hz0c2F:9pbSU=[~G~GZ-' );
define( 'SECURE_AUTH_SALT', '#`Vl:Zs-e4pAFOz%X]ta-ciT{r/<%^b~]Gi%=dw53zxoUxpNGm{D?Y$n$w`!K5Vg' );
define( 'LOGGED_IN_SALT',   'm@<bup%]k=pENs0Pd(~1Pab7d7+V]tzwxEX8pXN{!~HRFpfDY)VnT)m_VfNDl.IM' );
define( 'NONCE_SALT',       '`:EL5>wpGzAyHC9l>JZZhC1C;dzb,3/ T%k^W;(R~LZx,uGpzAWX?v[I|2nEdn8>' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
