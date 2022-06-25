<?php

/**
 * stack functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stack
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if (class_exists('Kirki')) {
  include_once('inc/stack-customizer.php');
}

/**
 * TGM Plugin Activator
 */

include_once('inc/tgm-plugin-activation.php');
include_once('inc/required-plugins.php');


/**
 * Better Comments
 */
include_once('inc/better-comments.php');

/**
 * Define theme version
 */
if (!defined('STACK_VERSION')) {
  // Replace the version number of the theme on each release.
  define('STACK_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
if (!function_exists('stack_supports')) :
  function stack_supports() {

    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
    load_theme_textdomain('stack', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to head.
     * */
    add_theme_support('automatic-feed-links');

    /*
      * Let WordPress manage the document title.
      */
    add_theme_support('title-tag');

    /*
      * Enable support for Post Thumbnails on posts and pages.
      */
    add_theme_support('post-thumbnails');

    /*
      * Switch default core markup for search form, comment form, and comments
      * to output valid HTML5.
      */
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

    /*
      * Enable support for Post Formats.
      *
      * See: https://codex.wordpress.org/Post_Formats
      */
    add_theme_support('post-formats', array(
      'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ));


    /**
     * Add theme support for selective refresh for widgets.
     */
    add_theme_support('customize-selective-refresh-widgets');


    /**
     * Add support for core custom logo.
     */
    add_theme_support(
      'custom-logo',
      [
        'height'      => 100,
        'width'       => 350,
        'flex-height' => true,
        'flex-width'  => true,
      ]
    );

    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus(
      [
        'main-menu'   => __('Primary menu', 'stack'),
      ]
    );
  }
endif;
add_action('after_setup_theme', 'stack_supports');


/**
 * Enqueue scripts and styles.
 */
function stack_files() {
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '4.0', 'all');
  wp_enqueue_style('line-icons', get_template_directory_uri() . '/assets/fonts/line-icons.css', [], '1.0', 'all');
  wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', [], '1.0', 'all');
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', [], '1.0', 'all');
  wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', [], '1.0', 'all');
  wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', [], '1.0', 'all');
  wp_enqueue_style('nivo-lightbox', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', [], '1.0', 'all');
  wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', [], '1.0', 'all');
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], STACK_VERSION, 'all');
  wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', [], STACK_VERSION, 'all');
  wp_enqueue_style('stack-style', get_stylesheet_uri());


  wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('nivo-lightbox', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], STACK_VERSION, true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'stack_files');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stack_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__('Main Sidebar', 'stack'),
      'id'            => 'main-sidebar',
      'description'   => esc_html__('Add widgets here.', 'stack'),
      'before_widget' => '<div id="%1$s" class="widgets single-widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
    )
  );
}
add_action('widgets_init', 'stack_widgets_init');


/**
 * Excerpt Length
 */
function stack_excerpt_length($length) {
  return 20;
}
add_filter('excerpt_length', 'stack_excerpt_length', 999);

// post excerpt more
function stack_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'stack_excerpt_more');




/**
 * custom comments form order
 */
function stack_comment_field($fields) {
  $comment = $fields['comment'];
  $author  = $fields['author'];
  $email   = $fields['email'];
  $url     = $fields['url'];
  $cookies = $fields['cookies'];

  unset($fields['comment']);
  unset($fields['author']);
  unset($fields['email']);
  unset($fields['url']);
  unset($fields['cookies']);

  $fields['author']  = $author;
  $fields['email']   = $email;
  $fields['url']     = $url;
  $fields['comment'] = $comment;
  $fields['cookies'] = $cookies;

  return $fields;
}
add_action('comment_form_fields', 'stack_comment_field');
