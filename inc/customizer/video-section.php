<?php

/**
 * This template displaying video customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Video Section
 */
Kirki::add_section('video_section', array(
  'title'          => esc_html__('Video Section', 'stack'),
  'description'    => esc_html__('Add/Edit video content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-video-alt3',
));

/**
 * video Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'video_switcher',
  'section'     => 'video_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Video control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'video_control',
  'section'     => 'video_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'video_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// video heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'video_heading',
  'label'    => esc_html__('Video Heading', 'stack'),
  'section'  => 'video_section',
  'default'  => esc_html__('watch video', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'video_heading' => [
      'selector'        => '.video-promo .video-promo-content h2',
      'render_callback' => function () {
        return get_theme_mod('video_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'video_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'video_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// video link
Kirki::add_field('stack_config', [
  'type'     => 'link',
  'settings' => 'video_link',
  'label'    => esc_html__('Video Link', 'stack'),
  'section'  => 'video_section',
  'default'  => 'https://www.youtube.com/watch?v=yP6kdOZHids',
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars' => [
    [
      'element' => '.video-promo .video-promo-content .video-popup',
      'function' => 'style'
    ]
  ],
  'active_callback' => [
    [
      'setting'  => 'video_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'video_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// video section background
Kirki::add_field('stack_config', [
  'type'        => 'background',
  'settings'    => 'video_section_bg',
  'label'       => esc_html__('Background Image', 'stack'),
  'section'     => 'video_section',
  'default'     => [
    'background-color'      => '',
    'background-image'      => get_template_directory_uri() . '/assets/img/bg-video.jpg',
    'background-repeat'     => 'no-repeat',
    'background-position'   => 'top center',
    'background-size'       => 'cover',
    'background-attachment' => 'scroll',
  ],
  'transport'   => 'auto',
  'output'      => [
    [
      'element' => '.video-promo',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'video_control',
      'operator' => '==',
      'value'    => 'style',
    ],
    [
      'setting'  => 'video_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);
