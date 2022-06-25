<?php

/**
 * This template displaying portfolio customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Portfolio Section
 */
Kirki::add_section('portfolio_section', array(
  'title'          => esc_html__('Portfolio Section', 'stack'),
  'description'    => esc_html__('Add/Edit portfolio content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-portfolio',
));

/**
 * Portfolio Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'portfolio_switcher',
  'section'     => 'portfolio_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Portfolio control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'portfolio_control',
  'section'     => 'portfolio_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'portfolio_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// portfolio heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'portfolio_heading',
  'label'    => esc_html__('Portfolio Heading', 'stack'),
  'section'  => 'portfolio_section',
  'default'  => esc_html__('Our Works', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'portfolio_heading' => [
      'selector'        => '#portfolios .section-title',
      'render_callback' => function () {
        return get_theme_mod('portfolio_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'portfolio_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'portfolio_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// portfolio description
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'portfolio_description',
  'label'    => esc_html__('Portfolio Description', 'stack'),
  'section'  => 'portfolio_section',
  'default'  => esc_html__('A desire to help and empower others between community contributors in technology <br>
  began to grow in 2020.', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '#portfolios .section-header p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'portfolio_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'portfolio_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);


// Portfolio Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'portfolio_repeater',
  'label'       => esc_html__('Portfolio Items', 'stack'),
  'section'     => 'portfolio_section',
  'priority'    => 10,
  'fields' => [

    'portfolio_title' => [
      'type'        => 'text',
      'label'       => esc_html__('Portfolio Title', 'stack'),
    ],
    'portfolio_link'  => [
      'type'        => 'link',
      'label'       => esc_html__('Portfolio Link', 'stack'),
    ],
    'portfolio_image'  => [
      'type'        => 'image',
      'label'       => esc_html__('Portfolio Image', 'stack'),
    ],
    'portfolio_preview_image'  => [
      'type'        => 'image',
      'label'       => esc_html__('Portfolio Preview Image', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('portfolio item', 'stack'),
    'field' => 'portfolio_title',
  ],
  'button_label' => esc_html__('Add New Item', 'stack'),
  'default'      => [
    [
      'portfolio_title' => esc_html__('Creative Design', 'stack'),
      'portfolio_link' => esc_html__('#', 'stack'),
      'portfolio_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-1.jpg',
      'portfolio_preview_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-1.jpg',
    ],
    [
      'portfolio_title' => esc_html__('Retina Ready', 'stack'),
      'portfolio_link' => esc_html__('#', 'stack'),
      'portfolio_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-2.jpg',
      'portfolio_preview_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-2.jpg',
    ],
    [
      'portfolio_title' => esc_html__('Responsive', 'stack'),
      'portfolio_link' => esc_html__('#', 'stack'),
      'portfolio_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-3.jpg',
      'portfolio_preview_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-3.jpg',
    ],
    [
      'portfolio_title' => esc_html__('Well Documented', 'stack'),
      'portfolio_link' => esc_html__('#', 'stack'),
      'portfolio_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-4.jpg',
      'portfolio_preview_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-4.jpg',
    ],
    [
      'portfolio_title' => esc_html__('Customer Support', 'stack'),
      'portfolio_link' => esc_html__('#', 'stack'),
      'portfolio_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-5.jpg',
      'portfolio_preview_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-5.jpg',
    ],
    [
      'portfolio_title' => esc_html__('User Friendly', 'stack'),
      'portfolio_link' => esc_html__('#', 'stack'),
      'portfolio_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-6.jpg',
      'portfolio_preview_image'  => get_template_directory_uri() . '/assets/img/portfolio/img-6.jpg',
    ],
  ],
  'choices' => [
    'limit' => 6
  ],
  'active_callback' => [
    [
      'setting'  => 'portfolio_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'portfolio_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'portfolio_repeater' => [
      'selector'        => '#portfolios .row',
      'render_callback' => function () {
        return get_theme_mod('portfolio_repeater');
      }
    ],
  ],
]);
