<?php

/**
 * This template displaying services customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Services Section
 */
Kirki::add_section('services_section', array(
  'title'          => esc_html__('Services Section', 'stack'),
  'description'    => esc_html__('Add/Edit services content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-networking',
));

/**
 * Services Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'services_switcher',
  'section'     => 'services_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Services control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'services_control',
  'section'     => 'services_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'services_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// services heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'services_heading',
  'label'    => esc_html__('Services Heading', 'stack'),
  'section'  => 'services_section',
  'default'  => esc_html__('Our Services', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'services_heading' => [
      'selector'        => '#services .section-title ',
      'render_callback' => function () {
        return get_theme_mod('services_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'services_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'services_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// services description
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'services_description',
  'label'    => esc_html__('Services Description', 'stack'),
  'section'  => 'services_section',
  'default'  => esc_html__('A desire to help and empower others between community contributors in technology <br>
  began to grow in 2020.', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '#services .section-header p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'services_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'services_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);


// Services Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'services_repeater',
  'label'       => esc_html__('Services Items', 'stack'),
  'section'     => 'services_section',
  'priority'    => 10,
  'fields' => [

    'service_icon' => [
      'type'        => 'select',
      'label'       => esc_html__('Icon', 'stack'),
      'choices' => [
        'lni-pencil' => esc_html__('Pencil', 'stack'),
        'lni-briefcase' => esc_html__('Briefcase', 'stack'),
        'lni-cog' => esc_html__('Cog', 'stack'),
        'lni-mobile' => esc_html__('Mobile', 'stack'),
        'lni-layers' => esc_html__('Layers', 'stack'),
        'lni-rocket' => esc_html__('Rocket', 'stack'),
      ]
    ],
    'service_title' => [
      'type'        => 'text',
      'label'       => esc_html__('Title', 'stack'),
      'default'     => esc_html__('', 'stack'),
    ],
    'service_description'  => [
      'type'        => 'textarea',
      'label'       => esc_html__('Description', 'stack'),
      'default' => esc_html__('', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('service item', 'stack'),
    'field' => 'service_title',
  ],
  'button_label' => esc_html__('Add New Item', 'stack'),
  'default'      => [
    [
      'service_icon' => esc_attr('lni-pencil'),
      'service_title' => esc_html__('Content Writing', 'stack'),
      'service_description'  => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack'),
    ],
    [
      'service_icon' => esc_attr('lni-briefcase'),
      'service_title' => esc_html__('Digital Marketing', 'stack'),
      'service_description'  => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack'),
    ],
    [
      'service_icon' => esc_attr('lni-cog'),
      'service_title' => esc_html__('Web Development', 'stack'),
      'service_description'  => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack'),
    ],
    [
      'service_icon' => esc_attr('lni-mobile'),
      'service_title' => esc_html__('IOS & Android', 'stack'),
      'service_description'  => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack'),
    ],
    [
      'service_icon' => esc_attr('lni-layers'),
      'service_title' => esc_html__('UI/UX Design', 'stack'),
      'service_description'  => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack'),
    ],
    [
      'service_icon' => esc_attr('lni-rocket'),
      'service_title' => esc_html__('Branding & Identity', 'stack'),
      'service_description'  => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack'),
    ],
  ],
  'choices' => [
    'limit' => 6
  ],
  'active_callback' => [
    [
      'setting'  => 'services_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'services_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'services_repeater' => [
      'selector'        => '#services .row',
      'render_callback' => function () {
        return get_theme_mod('services_repeater');
      }
    ],
  ],
]);

// Services Alignment
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'service_item_alignment',
  'label'       => esc_html__('Service Item Alignment', 'stack'),
  'section'     => 'services_section',
  'default'     => 'left',
  'priority'    => 10,
  'choices'     => [
    'left'   => esc_html__('Left', 'stack'),
    'center' => esc_html__('Center', 'stack'),
    'right'  => esc_html__('right', 'stack'),
  ],
  'output' => [
    [
      'element' => '.services-item',
      'property' => 'text-align'
    ]
  ]
]);
