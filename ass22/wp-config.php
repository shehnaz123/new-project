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
define( 'DB_NAME', 'dgkNRZIRGl' );

/** MySQL database username */
define( 'DB_USER', 'dgkNRZIRGl' );

/** MySQL database password */
define( 'DB_PASSWORD', '0mUq0zxNjY' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.j MILe*c~Q*=gtwseJYs/:@ne9Km9TQ>pn_}k0lhs<n^oi@7?RUE!YP%5.M4/&,' );
define( 'SECURE_AUTH_KEY',  'Sdn*^@6_vcN&i,@ku~)Z41kse4ZF8[paq:xPAun2N6(l9E=S2B/b7Q!zo],{BEq0' );
define( 'LOGGED_IN_KEY',    '<PHO;L+1t/?H%LSb&jy;l]Q>ri90^M8.D&h1fS,``nFPThDydLJXDh}<85R2helI' );
define( 'NONCE_KEY',        'h|jrpvWu];0SW+>fKi|bV}UOt8<%5epvu<Q7{=j/v!3t*om2}5OE8*!*93WV|=!D' );
define( 'AUTH_SALT',        'EZAP(hblh+_3#TSA9K![)n$E d@%:+Pe$@qRcg0vHfJYWOsB9tG(8w3W$@69;*X,' );
define( 'SECURE_AUTH_SALT', '{Dz:#0n/fY86||a1_|C&Ks/8a2]h^SXx[>J;0oajPiE^RK>D(cEexF}(7F ~7[Ki' );
define( 'LOGGED_IN_SALT',   '`h4-0KoF<FCVLhTc&$B]{CH7%]3!zi^`=cCs0R&opg@0FLJYhC_jAcP`Jq(5D*i:' );
define( 'NONCE_SALT',       '!$lV>c!btt`T&q,RAJb@jMFLvIdb.x_ZR[ji<q)fmkgd~l!v(]>6J3B.~?x(@U0}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
