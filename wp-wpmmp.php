<?php
/**
Plugin Name: Coming Soon Plugin
Plugin URI: http://web-settler.com/coming-soon/
Description: Adds a responsive coming soon page to your site.
Author: umarbajwa
Author URI: http://web-settler.com/coming-soon/
Version: 1.0
**/

require plugin_dir_path( __FILE__ ) . 'config.php';

require WPMMP_PLUGIN_INCLUDE_DIRECTORY . 'functions.php';

define( 'WPMMP_PRO_VERSION_ENABLED', true );

load_wpmmp();