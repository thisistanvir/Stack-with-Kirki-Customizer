<?php

/**
 * This template displaying feature customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * About Section
 */
Kirki::add_section('about_section', array(
  'title'          => esc_html__('About Section', 'stack'),
  'description'    => esc_html__('Add/Edit about content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-info',
));

/**
 * About Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'settings'    => 'about_switcher',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'section'     => 'about_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);

/**
 * about control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'about_control',
  'section'     => 'about_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'about_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// about heading
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'about_heading',
  'label'    => esc_html__('About Heading', 'stack'),
  'section'  => 'about_section',
  'default'  => esc_html__('We are helping to grow  <br> your business.', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'about_heading' => [
      'selector'        => '.text-wrapper .title-hl',
      'render_callback' => function () {
        return get_theme_mod('about_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'about_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'about_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// about description
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'about_description',
  'label'    => esc_html__('About Description', 'stack'),
  'section'  => 'about_section',
  'default'  => esc_html__('A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '.text-wrapper p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'about_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'about_switcher',
      'operator' => '==',
      'value'    => true,
    ]

  ],
]);

// about button text
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'about_btn_text',
  'label'    => esc_html__('Button Text', 'stack'),
  'section'  => 'about_section',
  'default'  => esc_html__('More About Us', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '.text-wrapper .btn',
      'function' => 'html',
      'property' => 'text',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'about_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'about_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);

// about button link
Kirki::add_field('stack_config', [
  'type'     => 'link',
  'settings' => 'about_btn_link',
  'label'    => esc_html__('Button Link', 'stack'),
  'section'  => 'about_section',
  'default'  => esc_html__('#', 'stack'),
  'priority' => 10,
  'active_callback' => [
    [
      'setting'  => 'about_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'about_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);
// Feature Item

Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'feature_repeater',
  'label'       => esc_html__('Feature Items', 'stack'),
  'section'     => 'about_section',
  'priority'    => 10,
  'fields' => [

    'feature_icon' => [
      'type'        => 'select',
      'label'       => esc_html__('Icon', 'stack'),
      'choices' => [
        'lni-microphone' => esc_html__('Microphone', 'stack'),
        'lni-users' => esc_html__('Users', 'stack'),
        'lni-medall-alt' => esc_html__('Medall', 'stack'),
      ]
    ],
    'feature_title' => [
      'type'        => 'text',
      'label'       => esc_html__('Title', 'stack'),
      'default'     => esc_html__('', 'stack'),
    ],
    'feature_description'  => [
      'type'        => 'text',
      'label'       => esc_html__('Description', 'stack'),
      'default' => esc_html__('', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('Your Custom Value', 'stack'),
    'field' => 'feature_title',
  ],
  'button_label' => esc_html__('Add New Item', 'stack'),
  'default'      => [
    [
      'feature_icon' => esc_attr('lni-microphone'),
      'feature_title' => esc_html__('WHAT WE DO', 'stack'),
      'feature_description'  => esc_html__('Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stack'),
    ],
    [
      'feature_icon' => esc_attr('lni-users'),
      'feature_title' => esc_html__('Meet our team', 'stack'),
      'feature_description'  => esc_html__('Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores ', 'stack'),
    ],
    [
      'feature_icon' => esc_attr('lni-medall-alt'),
      'feature_title' => esc_html__('Our Creation', 'stack'),
      'feature_description'  => esc_html__('Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores ', 'stack'),
    ],
  ],
  'choices' => [
    'limit' => 3
  ],
  'active_callback' => [
    [
      'setting'  => 'about_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'about_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'feature_repeater' => [
      'selector'        => '.feature-thumb',
      'render_callback' => function () {
        return get_theme_mod('feature_repeater');
      }
    ],
  ],
]);
