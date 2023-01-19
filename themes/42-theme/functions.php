<?php
/**
 * WP Theme constants and setup functions
 * 
 * @package FortyTwoTheme
 */

 /* === Constants === */
 define ( 'FORTYTWO_THEME_VERSION', '1.0.0' );
 define ( 'FORTYTWO_THEME_TEMPLATE_URL', get_template_directory_uri() );
 define ( 'FORTYTWO_THEME_PATH', get_template_directory() . '/' );
 define ( 'FORTYTWO_THEME_INCLUDES', FORTYTWO_THEME_PATH . 'includes/' );

 require_once FORTYTWO_THEME_INCLUDES . 'setup.php';
 require_once FORTYTWO_THEME_INCLUDES . 'enqueue-scripts.php';