<?php

/**
 * Database Constants
 *
 * (These are probably defined in local-config-db.php)
**/
define( 'DB_NAME', 'database_name_here' );
define( 'DB_USER', 'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

// Custom Table Prefix
$table_prefix  = 'wp_dev_';

/**
 * URL To The Content Directory
 *
 * (You'll Probably Want To Change This.)
**/
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

// Loopback Connections Can Suck, Disable If You Don't Need Cron
# define( 'DISABLE_WP_CRON', true );

// You'll Probably Want Automatic Updates Disabled During Development
define( 'AUTOMATIC_UPDATER_DISABLED', true );