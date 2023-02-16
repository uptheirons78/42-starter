<?php
/**
 * Enqueue scripts and styles
 * 
 * @package FortyTwoTheme
 */

if (!defined('ABSPATH')) { exit; }

function mb_main_scripts() {
  
  wp_enqueue_style('line-awesome-icon-min', FORTYTWO_THEME_TEMPLATE_URL . '/assets/lib/line-awesome.min.css');
  wp_enqueue_style('main-style', FORTYTWO_THEME_TEMPLATE_URL . '/build/index.css', array(), microtime());
  wp_enqueue_script('main-js-file', FORTYTWO_THEME_TEMPLATE_URL . '/build/index.js', array(), microtime(), true);

}
add_action('wp_enqueue_scripts', 'mb_main_scripts');