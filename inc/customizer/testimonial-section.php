<?php

/**
 * This template displaying testimonial customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Testimonial Section
 */
Kirki::add_section('testimonial_section', array(
  'title'          => esc_html__('Testimonial Section', 'stack'),
  'description'    => esc_html__('Add/Edit testimonial content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-testimonial',
));

/**
 * Testimonial Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'testimonial_switcher',
  'section'     => 'testimonial_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Testimonial control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'testimonial_control',
  'section'     => 'testimonial_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'testimonial_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Testimonial Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'testimonial_repeater',
  'label'       => esc_html__('Testimonials', 'stack'),
  'section'     => 'testimonial_section',
  'priority'    => 10,
  'fields' => [

    'testimonial_image' => [
      'type'        => 'image',
      'label'       => esc_html__('Image', 'stack'),
    ],
    'testimonial_name'  => [
      'type'        => 'text',
      'label'       => esc_html__('Name', 'stack'),
    ],
    'testimonial_designation'  => [
      'type'        => 'text',
      'label'       => esc_html__('Designation', 'stack'),
    ],
    'testimonial_description'  => [
      'type'        => 'textarea',
      'label'       => esc_html__('Description', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('testimonial name', 'stack'),
    'field' => 'testimonial_name',
  ],
  'button_label' => esc_html__('Add New Testimonial', 'stack'),
  'default'      => [
    [
      'testimonial_image' => get_template_directory_uri() . '/assets/img/testimonial/img1.jpg',
      'testimonial_name' => esc_html__('Grenchen Pearce', 'stack'),
      'testimonial_designation' => esc_html__('Boston Brothers co.', 'stack'),
      'testimonial_description' => esc_html__('Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. ', 'stack'),
    ],
    [
      'testimonial_image' => get_template_directory_uri() . '/assets/img/testimonial/img2.jpg',
      'testimonial_name' => esc_html__('Domeni GEsson', 'stack'),
      'testimonial_designation' => esc_html__('Awesome Technology co.', 'stack'),
      'testimonial_description' => esc_html__('Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. ', 'stack'),
    ],
    [
      'testimonial_image' => get_template_directory_uri() . '/assets/img/testimonial/img3.jpg',
      'testimonial_name' => esc_html__('Dommini Albert', 'stack'),
      'testimonial_designation' => esc_html__('Nesnal Design co.', 'stack'),
      'testimonial_description' => esc_html__('Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. ', 'stack'),
    ],
    [
      'testimonial_image' => get_template_directory_uri() . '/assets/img/testimonial/img4.png',
      'testimonial_name' => esc_html__('Fernanda Anaya', 'stack'),
      'testimonial_designation' => esc_html__('Developer', 'stack'),
      'testimonial_description' => esc_html__('Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. ', 'stack'),
    ],
    [
      'testimonial_image' => get_template_directory_uri() . '/assets/img/testimonial/img5.png',
      'testimonial_name' => esc_html__('Jason A.', 'stack'),
      'testimonial_designation' => esc_html__('Designer', 'stack'),
      'testimonial_description' => esc_html__('Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. ', 'stack'),
    ],
  ],
  'choices' => [
    'limit' => 6
  ],
  'active_callback' => [
    [
      'setting'  => 'testimonial_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'testimonial_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'testimonial_repeater' => [
      'selector'        => '#testimonials',
      'render_callback' => function () {
        return get_theme_mod('testimonial_repeater');
      }
    ],
  ],
]);

// Testimonial Section Background
Kirki::add_field('stack_config', [
  'type'        => 'background',
  'settings'    => 'testimonial_background',
  'label'       => esc_html__('Background', 'stack'),
  'section'     => 'testimonial_section',
  'default'     => [
    'background-color'      => '',
    'background-image'      => get_template_directory_uri() . '/assets/img/testimonial.jpg',
    'background-repeat'     => 'no-repeat',
    'background-position'   => 'center center',
    'background-size'       => 'cover',
    'background-attachment' => 'scroll',
  ],
  'transport'   => 'auto',
  'output'      => [
    [
      'element' => '.testimonial',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'testimonial_control',
      'operator' => '==',
      'value'    => 'style',
    ],
    [
      'setting'  => 'testimonial_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
]);
