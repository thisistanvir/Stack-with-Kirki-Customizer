<?php

/**
 * This template displaying counter customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Counter Section
 */
Kirki::add_section('counter_section', array(
  'title'          => esc_html__('Counter Section', 'stack'),
  'description'    => esc_html__('Add/Edit counter content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-ellipsis',
));

/**
 * Counter Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'counter_switcher',
  'section'     => 'counter_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Counter control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'counter_control',
  'section'     => 'counter_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'counter_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Counter Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'counter_repeater',
  'label'       => esc_html__('Counter', 'stack'),
  'section'     => 'counter_section',
  'priority'    => 10,
  'fields' => [

    'counter_icon' => [
      'type'        => 'select',
      'label'       => esc_html__('Icon', 'stack'),
      'choices' => [
        'lni-users' => esc_html__('Users', 'stack'),
        'lni-emoji-smile' => esc_html__('Smile', 'stack'),
        'lni-download' => esc_html__('Download', 'stack'),
        'lni-thumbs-up' => esc_html__('Thumbs Up', 'stack'),
      ]
    ],
    'counter_number' => [
      'type'        => 'number',
      'label'       => esc_html__('Counter Number', 'stack'),
    ],
    'counter_title'  => [
      'type'        => 'text',
      'label'       => esc_html__('Title', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('counter title', 'stack'),
    'field' => 'counter_title',
  ],
  'button_label' => esc_html__('Add New Counter', 'stack'),
  'default'      => [
    [
      'counter_icon' => 'lni-users',
      'counter_number' => esc_html__('23576', 'stack'),
      'counter_title' => esc_html__('Users', 'stack'),
    ],
    [
      'counter_icon' => 'lni-emoji-smile',
      'counter_number' => esc_html__('2124', 'stack'),
      'counter_title' => esc_html__('positive reviews', 'stack'),
    ],
    [
      'counter_icon' => 'lni-download',
      'counter_number' => esc_html__('54598', 'stack'),
      'counter_title' => esc_html__('Downloads', 'stack'),
    ],
    [
      'counter_icon' => 'lni-thumbs-up',
      'counter_number' => esc_html__('3211', 'stack'),
      'counter_title' => esc_html__('Followers', 'stack'),
    ],
  ],
  'choices' => [
    'limit' => 4
  ],
  'active_callback' => [
    [
      'setting'  => 'counter_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'counter_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'counter_repeater' => [
      'selector'        => '#counter .row',
      'render_callback' => function () {
        return get_theme_mod('counter_repeater');
      }
    ],
  ],
]);

// Counter Section Background
Kirki::add_field('stack_config', [
  'type'        => 'background',
  'settings'    => 'counter_background',
  'label'       => esc_html__('Background', 'stack'),
  'section'     => 'counter_section',
  'default'     => [
    'background-color'      => '',
    'background-image'      => get_template_directory_uri() . '/assets/img/count-bg.jpg',
    'background-repeat'     => 'no-repeat',
    'background-position'   => 'center center',
    'background-size'       => 'cover',
    'background-attachment' => 'scroll',
  ],
  'transport'   => 'auto',
  'output'      => [
    [
      'element' => '#counter',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'counter_control',
      'operator' => '==',
      'value'    => 'style',
    ],
    [
      'setting'  => 'counter_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);
