<?php

/**
 * This template displaying pricing customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Pricing Section
 */
Kirki::add_section('pricing_section', array(
  'title'          => esc_html__('Pricing Section', 'stack'),
  'description'    => esc_html__('Add/Edit pricing content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-images-alt',
));

/**
 * Pricing Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'pricing_switcher',
  'section'     => 'pricing_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Pricing control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'pricing_control',
  'section'     => 'pricing_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'pricing_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Pricing heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'pricing_heading',
  'label'    => esc_html__('Pricing Heading', 'stack'),
  'section'  => 'pricing_section',
  'default'  => esc_html__('Meet our Best Pricing', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'pricing_heading' => [
      'selector'        => '#pricing .section-title ',
      'render_callback' => function () {
        return get_theme_mod('pricing_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'pricing_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'pricing_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Pricing description
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'pricing_description',
  'label'    => esc_html__('Pricing Description', 'stack'),
  'section'  => 'pricing_section',
  'default'  => esc_html__('A desire to help and empower others between community contributors in technology <br>
  began to grow in 2020.', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '#pricing .section-header p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'pricing_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'pricing_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);


// Pricing Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'pricing_repeater',
  'label'       => esc_html__('Pricing Table', 'stack'),
  'section'     => 'pricing_section',
  'priority'    => 10,
  'fields' => [

    'pricing_featured' => [
      'type'        => 'checkbox',
      'label'       => esc_html__('Want to featured?', 'stack'),
      'default' => false,
    ],
    'pricing_title' => [
      'type'        => 'text',
      'label'       => esc_html__('Pricing Title', 'stack'),
    ],
    'pricing_value' => [
      'type'        => 'number',
      'label'       => esc_html__('Pricing Value', 'stack'),
    ],
    'payment' => [
      'type'        => 'select',
      'label'       => esc_html__('Payment', 'stack'),
      'default' => 'monthly',
      'choices' => [
        'monthly' => esc_html__('Monthly', 'stack'),
        'yearly' => esc_html__('Yearly', 'stack'),
      ]
    ],
    'pricing_feature_1'  => [
      'type'        => 'text',
      'label'       => esc_html__('Feature 1', 'stack'),
    ],
    'pricing_feature_2'  => [
      'type'        => 'text',
      'label'       => esc_html__('Feature 2', 'stack'),
    ],
    'pricing_feature_3'  => [
      'type'        => 'text',
      'label'       => esc_html__('Feature 3', 'stack'),
    ],
    'pricing_feature_4'  => [
      'type'        => 'text',
      'label'       => esc_html__('Feature 4', 'stack'),
    ],
    'pricing_feature_5'  => [
      'type'        => 'text',
      'label'       => esc_html__('Feature 5', 'stack'),
    ],
    'pricing_feature_6'  => [
      'type'        => 'text',
      'label'       => esc_html__('Feature 6', 'stack'),
    ],
    'pricing_button_text'  => [
      'type'        => 'text',
      'label'       => esc_html__('Button Text', 'stack'),
    ],
    'pricing_button_link'  => [
      'type'        => 'link',
      'label'       => esc_html__('Button Link', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('member name', 'stack'),
    'field' => 'pricing_title',
  ],
  'button_label' => esc_html__('Add New Pricing', 'stack'),
  'default'      => [
    [
      'pricing_title' => esc_html__('Basic', 'stack'),
      'pricing_value' => esc_html__('12.90', 'stack'),
      'payment' => 'month',
      'pricing_feature_1'  => esc_html__('Business Analyzing', 'stack'),
      'pricing_feature_2'  => esc_html__('24/7 Tech Suport', 'stack'),
      'pricing_feature_3'  => esc_html__('Operational Excellence', 'stack'),
      'pricing_feature_4'  => esc_html__('Business Idea Ready', 'stack'),
      'pricing_feature_5'  => esc_html__('2 Database', 'stack'),
      'pricing_feature_6'  => esc_html__('Customer Support', 'stack'),
      'pricing_button_text'  => esc_html__('Get It', 'stack'),
      'pricing_button_link'  => esc_html__('#', 'stack'),
    ],
    [
      'pricing_title' => esc_html__('Professional', 'stack'),
      'pricing_value' => esc_html__('49.90', 'stack'),
      'payment' => 'month',
      'pricing_feature_1'  => esc_html__('Business Analyzing', 'stack'),
      'pricing_feature_2'  => esc_html__('24/7 Tech Suport', 'stack'),
      'pricing_feature_3'  => esc_html__('Operational Excellence', 'stack'),
      'pricing_feature_4'  => esc_html__('Business Idea Ready', 'stack'),
      'pricing_feature_5'  => esc_html__('2 Database', 'stack'),
      'pricing_feature_6'  => esc_html__('Customer Support', 'stack'),
      'pricing_button_text'  => esc_html__('Get It', 'stack'),
      'pricing_button_link'  => esc_html__('#', 'stack'),
    ],
    [
      'pricing_title' => esc_html__('Expert', 'stack'),
      'pricing_value' => esc_html__('89.90', 'stack'),
      'payment' => 'month',
      'pricing_feature_1'  => esc_html__('Business Analyzing', 'stack'),
      'pricing_feature_2'  => esc_html__('24/7 Tech Suport', 'stack'),
      'pricing_feature_3'  => esc_html__('Operational Excellence', 'stack'),
      'pricing_feature_4'  => esc_html__('Business Idea Ready', 'stack'),
      'pricing_feature_5'  => esc_html__('2 Database', 'stack'),
      'pricing_feature_6'  => esc_html__('Customer Support', 'stack'),
      'pricing_button_text'  => esc_html__('Get It', 'stack'),
      'pricing_button_link'  => esc_html__('#', 'stack'),
    ],
  ],
  'choices' => [
    'limit' => 3
  ],
  'active_callback' => [
    [
      'setting'  => 'pricing_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'pricing_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'pricing_repeater' => [
      'selector'        => '#pricing .row',
      'render_callback' => function () {
        return get_theme_mod('pricing_repeater');
      }
    ],
  ],
]);
