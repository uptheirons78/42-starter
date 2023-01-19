<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 * 
 * @package FortyTwoTheme
 */

if (!defined('ABSPATH')) { exit; }


function ftt_setup()
{
  // Make theme available for translation.
  load_theme_textdomain('fortytwo-theme', FORTYTWO_THEME_PATH . 'languages');

  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  // Let WordPress manage the document title.
  add_theme_support('title-tag');

  // Support for post thumbnails
  add_theme_support('post-thumbnails');

  // Register theme menus
  register_nav_menus(
    array(
      'primary-menu' => esc_html__('Primary Menu', 'fortytwo-theme'),
    )
  );

  //Switch default core markup for search form, comment form, and comments to output valid HTML5.
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

}

add_action('after_setup_theme', 'ftt_setup');