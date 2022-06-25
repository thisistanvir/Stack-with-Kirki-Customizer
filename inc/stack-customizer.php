<?php

/**
 * This file displaying customizer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stack
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

/**
 * stack config
 */
Kirki::add_config('stack_config', array(
  'capability'    => 'edit_theme_options',
  'option_type'   => 'theme_mod',
));

/**
 * Stack Panel
 */
Kirki::add_panel('stack_panel', array(
  'priority'    => 10,
  'title'       => esc_html__('Stack Options', 'stack'),
  'description' => esc_html__('Update website content here.', 'stack'),
  'icon'  => 'dashicons-admin-customizer',
));



require_once dirname(__FILE__) . '/customizer/banner-section.php';
require_once dirname(__FILE__) . '/customizer/about-section.php';
require_once dirname(__FILE__) . '/customizer/services-section.php';
require_once dirname(__FILE__) . '/customizer/video-section.php';
require_once dirname(__FILE__) . '/customizer/team-section.php';
require_once dirname(__FILE__) . '/customizer/counter-section.php';
require_once dirname(__FILE__) . '/customizer/pricing-section.php';
require_once dirname(__FILE__) . '/customizer/skills-section.php';
require_once dirname(__FILE__) . '/customizer/portfolio-section.php';
require_once dirname(__FILE__) . '/customizer/testimonial-section.php';
require_once dirname(__FILE__) . '/customizer/blog-section.php';
require_once dirname(__FILE__) . '/customizer/client-section.php';
require_once dirname(__FILE__) . '/customizer/contact-section.php';
require_once dirname(__FILE__) . '/customizer/footer-section.php';
