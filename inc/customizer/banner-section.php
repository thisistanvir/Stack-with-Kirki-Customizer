<?php

/**
 * This template displaying banner customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Banner Section
 */
Kirki::add_section('banner_section', array(
  'title'          => esc_html__('Banner Section', 'stack'),
  'description'    => esc_html__('Add/Edit banner content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-admin-customizer',
));

/**
 * banner control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'banner_control',
  'section'     => 'banner_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
]);

// banner heading
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'banner_heading',
  'label'    => esc_html__('Banner Heading', 'stack'),
  'section'  => 'banner_section',
  'default'  => esc_html__('We Discover, Design & Build Digital <br> Presence of Businesses', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'banner_heading' => [
      'selector'        => '#hero-area .contents .head-title',
      'render_callback' => function () {
        return get_theme_mod('banner_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'banner_control',
      'operator' => '==',
      'value'    => 'content',
    ]
  ],
]);

// banner button text
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'banner_btn_text',
  'label'    => esc_html__('Button Text', 'stack'),
  'section'  => 'banner_section',
  'default'  => esc_html__('Explore', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '.header-button .btn',
      'function' => 'html',
      'property' => 'text',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'banner_control',
      'operator' => '==',
      'value'    => 'content',
    ]
  ],
]);

// banner button link
Kirki::add_field('stack_config', [
  'type'     => 'link',
  'settings' => 'banner_btn_link',
  'label'    => esc_html__('Button Link', 'stack'),
  'section'  => 'banner_section',
  'default'  => esc_html__('#services', 'stack'),
  'priority' => 10,
  'active_callback' => [
    [
      'setting'  => 'banner_control',
      'operator' => '==',
      'value'    => 'content',
    ]
  ],
]);

// banner image
Kirki::add_field('stack_config', [
  'type'        => 'image',
  'settings'    => 'banner_image',
  'label'       => esc_html__('Banner Image', 'stack'),
  'section'     => 'banner_section',
  'default'     => [
    'url' => get_template_directory_uri() . '/assets/img/hero-1.png',
  ],
  'choices'     => [
    'save_as' => 'array',
  ],
  'active_callback' => [
    [
      'setting'  => 'banner_control',
      'operator' => '==',
      'value'    => 'content',
    ]
  ],
]);

// banner bg image
Kirki::add_field('stack_config', [
  'type'        => 'background',
  'settings'    => 'banner_background_image',
  'label'       => esc_html__('Banner Background Image', 'stack'),
  'section'     => 'banner_section',
  'default'     => [
    'background-color'      => '',
    'background-image'      => get_template_directory_uri() . '/assets/img/hero-bg.png',
    'background-repeat'     => 'no-repeat',
    'background-position'   => 'center center',
    'background-size'       => 'cover',
    'background-attachment' => 'scroll',
  ],
  'transport'   => 'auto',
  'output'      => [
    [
      'element' => '#hero-area',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'banner_control',
      'operator' => '==',
      'value'    => 'style',
    ]
  ],
]);

// banner heading typography
Kirki::add_field('stack_config', [
  'type'        => 'typography',
  'settings'    => 'banner_heading_typo',
  'label'       => esc_html__('Heading Typography', 'stack'),
  'section'     => 'banner_section',
  'default'     => [
    'font-family'    => 'Titillium Web',
    'variant'        => '700',
    'font-size'      => '30px',
    'line-height'    => '48px',
    'letter-spacing' => '0',
    'color'          => '#585b60',
    'text-transform' => 'uppercase',
    'text-align'     => 'center',
  ],
  'priority'    => 10,
  'transport'   => 'auto',
  'output'      => [
    [
      'element' => '#hero-area .contents .head-title',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'banner_control',
      'operator' => '==',
      'value'    => 'style',
    ]
  ],
]);

// banner button text typography
Kirki::add_field('stack_config', [
  'type'        => 'typography',
  'settings'    => 'banner_button_text_typo',
  'label'       => esc_html__('Button Text Typography', 'stack'),
  'section'     => 'banner_section',
  'default'     => [
    'font-family'    => 'Open Sans',
    'variant'        => 'regular',
    'font-size'      => '14px',
    'line-height'    => '1.5',
    'letter-spacing' => '0',
    'color'          => '#ffffff',
    'text-transform' => 'uppercase',
    'text-align'     => 'center',
  ],
  'priority'    => 10,
  'transport'   => 'auto',
  'output'      => [
    [
      'element' => '#hero-area .header-button .btn',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'banner_control',
      'operator' => '==',
      'value'    => 'style',
    ]
  ],
]);
