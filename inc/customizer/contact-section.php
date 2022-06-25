<?php

/**
 * This template displaying contact customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Contact Section
 */
Kirki::add_section('contact_section', array(
  'title'          => esc_html__('Contact Section', 'stack'),
  'description'    => esc_html__('Add/Edit contact content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-admin-comments',
));

/**
 * Contact Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'settings'    => 'contact_switcher',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'section'     => 'contact_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);

/**
 * contact control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'contact_control',
  'section'     => 'contact_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'contact_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// contact form
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'contact_form',
  'label'    => esc_html__('Contact Form', 'stack'),
  'description'    => esc_html__('Paste contact form shortcode here.', 'stack'),
  'section'  => 'contact_section',
  'priority' => 10,
  'partial_refresh'    => [
    'contact_form' => [
      'selector'        => '#contact #contactForm',
      'render_callback' => function () {
        return get_theme_mod('contact_form');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'contact_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'contact_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// contact Section Heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'contact_heading',
  'label'    => esc_html__('Section Title', 'stack'),
  'default'    => esc_html__('We\'re a friendly bunch..', 'stack'),
  'section'  => 'contact_section',
  'priority' => 10,
  'partial_refresh'    => [
    'contact_heading' => [
      'selector'        => '.contact-title h1',
      'render_callback' => function () {
        return get_theme_mod('contact_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'contact_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'contact_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// contact Section Description
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'contact_description',
  'label'    => esc_html__('Section Description', 'stack'),
  'default'    => esc_html__("We create projects for companies and startups with a passion for quality", 'stack'),
  'section'  => 'contact_section',
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '.contact-title p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'contact_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'contact_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// contact title
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'contact_title',
  'label'    => esc_html__('Contact Title', 'stack'),
  'section'  => 'contact_section',
  'default'  => esc_html__('Contact Us', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '.contact-right-area h2',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'contact_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'contact_switcher',
      'operator' => '==',
      'value'    => true,
    ]

  ],
]);

// Contact Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'contact_repeater',
  'label'       => esc_html__('Contact Info', 'stack'),
  'section'     => 'contact_section',
  'priority'    => 10,
  'fields' => [

    'info_icon'  => [
      'type'        => 'select',
      'label'       => esc_html__('Icon', 'stack'),
      'choices' => [
        'lni-map-marker' => esc_html__('Map', 'stack'),
        'lni-envelope' => esc_html__('Envelope', 'stack'),
        'lni-phone-handset' => esc_html__('Phone', 'stack'),
      ]
    ],
    'info_title'  => [
      'type'        => 'text',
      'label'       => esc_html__('Title', 'stack'),
    ],
    'info_link'  => [
      'type'        => 'link',
      'label'       => esc_html__('Link', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('contact title', 'stack'),
    'field' => 'info_title',
  ],
  'button_label' => esc_html__('Add New Info', 'stack'),
  'default'      => [
    [
      'info_icon' => esc_html__('lni-map-marker', 'stack'),
      'info_title' => esc_html__('Address: 28 Green Tower, New York City, USA', 'stack'),
      'info_link' => esc_html__('', 'stack'),
    ],
    [
      'info_icon' => esc_html__('lni-envelope', 'stack'),
      'info_title' => esc_html__('Email: contact@stuck.com', 'stack'),
      'info_link' => esc_html__('mailto:contact@stuck.com', 'stack'),
    ],
    [
      'info_icon' => esc_html__('lni-phone-handset', 'stack'),
      'info_title' => esc_html__('Phone: +84 846 250 592', 'stack'),
      'info_link' => esc_html__('tel: +84 846 250 592', 'stack'),
    ],
  ],
  'choices' => [
    'limit' => 3
  ],
  'active_callback' => [
    [
      'setting'  => 'contact_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'contact_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'contact_repeater' => [
      'selector'        => '.contact-right',
      'render_callback' => function () {
        return get_theme_mod('contact_repeater');
      }
    ],
  ],
]);
