<?php

/**
 * This template displaying client customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Client Section
 */
Kirki::add_section('client_section', array(
  'title'          => esc_html__('Client Section', 'stack'),
  'description'    => esc_html__('Add/Edit client content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-businessperson',
));

/**
 * Client Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'settings'    => 'client_switcher',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'section'     => 'client_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);

/**
 * client control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'client_control',
  'section'     => 'client_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'client_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// client heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'client_heading',
  'label'    => esc_html__('Section Heading', 'stack'),
  'section'  => 'client_section',
  'default'  => esc_html__('Notable Clients', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'client_heading' => [
      'selector'        => '#clients .section-title',
      'render_callback' => function () {
        return get_theme_mod('client_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'client_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'client_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// client description
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'client_description',
  'label'    => esc_html__('Section Description', 'stack'),
  'section'  => 'client_section',
  'default'  => esc_html__('Over the last 20 years, we have helped and guided organisations to achieve outstanding results', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '#clients .section-header p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'client_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'client_switcher',
      'operator' => '==',
      'value'    => true,
    ]

  ],
]);

// Client Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'client_repeater',
  'label'       => esc_html__('Client', 'stack'),
  'section'     => 'client_section',
  'priority'    => 10,
  'fields' => [

    'client_title'  => [
      'type'        => 'text',
      'label'       => esc_html__('Title', 'stack'),
    ],
    'client_image'  => [
      'type'        => 'image',
      'label'       => esc_html__('Image', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('client title', 'stack'),
    'field' => 'client_title',
  ],
  'button_label' => esc_html__('Add New Client', 'stack'),
  'default'      => [
    [
      'client_title' => esc_html__('Shopify', 'stack'),
      'client_image' => get_template_directory_uri() . '/assets/img/clients/img1.png',
    ],
    [
      'client_title' => esc_html__('Asana', 'stack'),
      'client_image' => get_template_directory_uri() . '/assets/img/clients/img2.png',
    ],
    [
      'client_title' => esc_html__('Phcorner', 'stack'),
      'client_image' => get_template_directory_uri() . '/assets/img/clients/img3.png',
    ],
    [
      'client_title' => esc_html__('Slack', 'stack'),
      'client_image' => get_template_directory_uri() . '/assets/img/clients/img2.png',
    ],
  ],
  'choices' => [
    'limit' => 4
  ],
  'active_callback' => [
    [
      'setting'  => 'client_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'client_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'client_repeater' => [
      'selector'        => '#clients .row',
      'render_callback' => function () {
        return get_theme_mod('client_repeater');
      }
    ],
  ],
]);
