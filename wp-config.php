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
define('DB_NAME', 'wpthemedev');

/** MySQL database username */
define('DB_USER', 'wpthemedev');

/** MySQL database password */
define('DB_PASSWORD', '!x4HpSX(59');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** let WordPress use a different filesystem method than FTP */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'opsqu5hbkrcmhxw1q6z4zatnfvwyamuqokucnewrsh5gfegcwjucdshwo0s00jxx');
define('SECURE_AUTH_KEY',  '8eta8k9m3q97vq87a9zl6vxgogyoz7oiynpgwiwahqahuadaizqm55mxlscoxcfo');
define('LOGGED_IN_KEY',    '2r09l0bxlirp5jl2ruzq7jtoyugd8tkpjbaf3uwrssjja8vg3jxyyhyqyvilil0a');
define('NONCE_KEY',        '9ckxoxbazs6coe1c1e8buad1odrvylw4lr6uilgqi23vwr5f9vlxkws9isqnxmuz');
define('AUTH_SALT',        'eqxnmknyvw9fzr4armbhgqlelhvayxrpbytza4ixg0wpx9yvieltfovfu0lg36zn');
define('SECURE_AUTH_SALT', 'ap8mlnam3rtbkbpqnihupqxcpouv0rndtifcsgoxwtnm24z9kzjxkf05s4q7ijww');
define('LOGGED_IN_SALT',   'bxjjovn4g3qfdglkxvlnokvtmajyywfku5nphvbc7jbzcrpq3ddht3b9d6m2prxz');
define('NONCE_SALT',       'ak6z71lgom3jdvjoozgzyzgtebeljwqyy55vbpcak15jadg3f0hfjtpk2ooc9wdk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sos_';

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
