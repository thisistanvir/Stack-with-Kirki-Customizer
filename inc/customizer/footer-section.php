<?php

/**
 * This template displaying footer customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Footer Section
 */
Kirki::add_section('footer_section', array(
  'title'          => esc_html__('Footer Section', 'stack'),
  'description'    => esc_html__('Add/Edit footer content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-minus',
));

/**
 * Footer Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'footer_switcher',
  'section'     => 'footer_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Footer control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'footer_control',
  'section'     => 'footer_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'footer_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// footer image
Kirki::add_field('stack_config', [
  'type'     => 'image',
  'settings' => 'footer_image',
  'label'    => esc_html__('Footer Branding', 'stack'),
  'section'  => 'footer_section',
  'default'  => get_template_directory_uri() . '/assets/img/logo.png',
  'priority' => 10,
  'partial_refresh'    => [
    'footer_image' => [
      'selector'        => '.footer-logo',
      'render_callback' => function () {
        return get_theme_mod('footer_image');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'footer_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'footer_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// footer copyright
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'footer_copyright',
  'label'    => esc_html__('Copyright Text', 'stack'),
  'section'  => 'footer_section',
  'default'  => esc_html__('Designed and Developed by <a href="http://itanvir.net">iTanvir</a>', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '.copyright p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'footer_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'footer_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);


// Footer Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'footer_socials',
  'label'       => esc_html__('Footer Socials', 'stack'),
  'section'     => 'footer_section',
  'priority'    => 10,
  'fields' => [

    'social_icon' => [
      'type'        => 'select',
      'label'       => esc_html__('Icon', 'stack'),
      'choices' => [
        'lni-facebook-filled' => esc_html__('Facebook', 'stack'),
        'lni-twitter-filled' => esc_html__('Twitter', 'stack'),
        'lni-instagram-filled' => esc_html__('Instagram', 'stack'),
        'lni-linkedin-filled' => esc_html__('Linkedin', 'stack'),
      ]
    ],
    'social_link'  => [
      'type'        => 'link',
      'label'       => esc_html__('Link', 'stack'),
      'default' => esc_html__('', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('social item', 'stack'),
    'field' => 'social_icon',
  ],
  'button_label' => esc_html__('Add New Social', 'stack'),
  'default'      => [
    [
      'social_icon' => esc_attr('lni-facebook-filled'),
      'social_link' => esc_url('#', 'stack'),
    ],
    [
      'social_icon' => esc_attr('lni-twitter-filled'),
      'social_link' => esc_url('#', 'stack'),
    ],
    [
      'social_icon' => esc_attr('lni-instagram-filled'),
      'social_link' => esc_url('#', 'stack'),
    ],
    [
      'social_icon' => esc_attr('lni-linkedin-filled'),
      'social_link' => esc_url('#', 'stack'),
    ],
  ],
  'choices' => [
    'limit' => 4
  ],
  'active_callback' => [
    [
      'setting'  => 'footer_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'footer_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'footer_socials' => [
      'selector'        => '.social-icon',
      'render_callback' => function () {
        return get_theme_mod('footer_socials');
      }
    ],
  ],
]);
