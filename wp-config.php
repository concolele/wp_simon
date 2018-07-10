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
define('DB_NAME', 'myblog');

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
define('AUTH_KEY',         'S@nz-V?T`OVQt)SVmOw;`U-+hK`2l,r^Z+Kiu91QQ$kNV1dua &8785 ~X!e>Cb(');
define('SECURE_AUTH_KEY',  'ipz0,XNgQ~XEP0jRc*M}PcE$$)?:e_KxAKG]&-+h>(~Hpiw1}jx!dt)RL5nk2>nQ');
define('LOGGED_IN_KEY',    'k4@3SnEtnM+l,v_BhE8Hr!6gQ&t+2(uPtr7=6@_^<Ij2t*sY]9j|vAJ[9lV}Ef:T');
define('NONCE_KEY',        'oa#*dsg/[[.=CxbMPlUcw&/cf0xbg3-hh23CS1qKrz%Hb@[<*Y)7CPMsOp26&p{K');
define('AUTH_SALT',        ',p+0BB%MrRB/x{f}%+@4L+}Uae(^]/}3CGToxD4zHg>`&S{6`K3G({%TqLo$}I5D');
define('SECURE_AUTH_SALT', '|dOF]cRm!W(Y@1Gb`Tt:4re9xx08!i^nUE-2}o$wkKzk^?x7:6&BxwF>rG.8}F^]');
define('LOGGED_IN_SALT',   '0BO-&f3wy1hgwPiLc`t{t$kNnyP(*gLl=)]={.8.K4q.0%*^>sw<A&AMRvT9m>7)');
define('NONCE_SALT',       'Wq+;Lt?z2j[?!z%gr GAa(YR+th,bP)<8F=-@tbrd};4<`dD+D3M]9~y*NCu4;v-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

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
