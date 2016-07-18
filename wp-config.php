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
define('DB_NAME', '52wq_db');

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
define('AUTH_KEY',         'dT^45O?SIVHj42<RqlVbWF?f^?l*M/+^r=aDdXtI;0Yn<LIhEu:(>R!COXObxwnH');
define('SECURE_AUTH_KEY',  'i`i/UP(2[Xp ]9]_Mfw,M@:*FrYh~Fr^(F!Y^NN`wyya/fO|5eS)l| .8]Z81Lw.');
define('LOGGED_IN_KEY',    '&Wg@V.bb)A^/T[v>qw904TxhgZXfc:4$:uh)MsiKj<`Q2<F%SBJo]S,#vi&u!?|q');
define('NONCE_KEY',        '-(4b0XDE@R7h{HPKs#j:BRClmm(w%Uadaa`Iy5y&M:%rdC?n1#.ka^|h7cO]pb(m');
define('AUTH_SALT',        'Q1FZu]ZG3k[!`(_+]c:>QCw9^68r8jBl(F,5h}nv|[5vF}K5<SV2L(Fhl7uY1Qwm');
define('SECURE_AUTH_SALT', 'z]C>KIAk~1`tH7N07z/i|Ur~r_NLkjizx:xIAmr*K*qopABdL-h^E~@AHxT4C+XM');
define('LOGGED_IN_SALT',   'B|k`QQ1Hi_Ivt,b/8q+ d6OO4Ds 5TrB)IGgp0jPD!Z5B[If63J4BA?uN*0AyeX<');
define('NONCE_SALT',       'MPOuhaY_Ae8Y~1=>:n{4ODIQgQ;m+ @3/.j+~pwsb,o1^^au4ruZ92$:opWr_:fL');

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
