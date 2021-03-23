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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dea6b6qh323ihf' );

/** MySQL database username */
define( 'DB_USER', 'hqtwylugpzkces' );

/** MySQL database password */
define( 'DB_PASSWORD', '99b88485b2599d3590dfa4791b4a9ba8fea39e579aea90d870a393be924cc457' );

/** MySQL hostname */
define( 'DB_HOST', 'ec2-52-7-168-69.compute-1.amazonaws.com:5432' );

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
define( 'AUTH_KEY',         'KItk-8*xsO+!m!Q>a:=O}v8jC]4yE5k;lE?9Uyi,^^Vl{SadfM_>Q7Vh0n~AO1qJ' );
define( 'SECURE_AUTH_KEY',  'R:?K5aU*YU~>y>ZxDjQSlo,!ZM.B;UfQAUBdE}|~59tl~8[P  S4hL;=aG2F/F.Z' );
define( 'LOGGED_IN_KEY',    'Xt#D;dFwFx^T<X(#4Wu`|^vIgClbIO*1{hdCW%fmTn<I_NZ{/#n.4j{v>.TV/6EX' );
define( 'NONCE_KEY',        '^akuoh.lojHd z?*P}b[Q5bd4`3JAJy,_+3NOR`gJfh4mWfkq[n=uHWT(o6sE+uh' );
define( 'AUTH_SALT',        'lzL-C~`:rrk@VO~7Kktq8Q,UBQ&4UhJ&cZ@RWp19Z$aDdeSG6fw)#}pq,2nP$9/o' );
define( 'SECURE_AUTH_SALT', '-5ab4Wj.autX:Pfu*4C0?Y}KV=|qtl12M~[H]E*UnbdK;]5/= E*rJgA{{#S{[cS' );
define( 'LOGGED_IN_SALT',   'F^UNNfHqOks*:L+--VNAp_QpIq_zYGOE(=t<J81F36pulD7h?+DGUN@IMr@+*+pL' );
define( 'NONCE_SALT',       'E+J~^c-5ex>arR&b>7o{qmPj[c>|w`(IL%t!t$b64@,J(0aXXD[6*xg8MEU_**&f' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
define( 'UPLOADS', 'wp-content/uploads' );git
require_once ABSPATH . 'wp-settings.php';
