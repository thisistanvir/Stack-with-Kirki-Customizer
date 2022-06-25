<?php

/**
 * This template displaying blog customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Blog Section
 */
Kirki::add_section('blog_section', array(
  'title'          => esc_html__('Blog Section', 'stack'),
  'description'    => esc_html__('Add/Edit blog content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-welcome-write-blog',
));

/**
 * Blog Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'blog_switcher',
  'section'     => 'blog_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Blog control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'blog_control',
  'section'     => 'blog_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'blog_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// blog heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'blog_heading',
  'label'    => esc_html__('Blog Heading', 'stack'),
  'section'  => 'blog_section',
  'default'  => esc_html__('Latest blog', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'blog_heading' => [
      'selector'        => '#blog .section-title ',
      'render_callback' => function () {
        return get_theme_mod('blog_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'blog_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'blog_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// blog description
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'blog_description',
  'label'    => esc_html__('Blog Description', 'stack'),
  'section'  => 'blog_section',
  'default'  => esc_html__('A desire to help and empower others between community contributors in technology <br>
  began to grow in 2020.', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '#blog .section-header p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'blog_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'blog_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);
