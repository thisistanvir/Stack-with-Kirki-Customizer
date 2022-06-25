<?php

/**
 * This template displaying skill customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Skill Section
 */
Kirki::add_section('skill_section', array(
  'title'          => esc_html__('Skill Section', 'stack'),
  'description'    => esc_html__('Add/Edit skill content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-admin-settings',
));

/**
 * Skill Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'skill_switcher',
  'section'     => 'skill_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Skill control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'skill_control',
  'section'     => 'skill_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'skill_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Skill heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'skill_heading',
  'label'    => esc_html__('Skill Heading', 'stack'),
  'section'  => 'skill_section',
  'default'  => esc_html__('Our Skill', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'skill_heading' => [
      'selector'        => '#skill .section-title ',
      'render_callback' => function () {
        return get_theme_mod('skill_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'skill_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'skill_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Skill description
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'skill_description',
  'label'    => esc_html__('Skill Description', 'stack'),
  'section'  => 'skill_section',
  'default'  => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, aut aspernatur modi minima alias provident obcaecati! Minima odio porro nemo magnam dolore minus asperiores veniam dolorum est! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nesciunt possimus quaerat ipsam, corporis architecto aspernatur non aut! Dolorum consectetur placeat excepturi, perspiciatis sunt.', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '#skill .site-heading p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'skill_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'skill_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Skill Image
Kirki::add_field('stack_config', [
  'type'        => 'image',
  'settings'    => 'skill_image',
  'label'       => esc_html__('Skill Image', 'stack'),
  'section'     => 'skill_section',
  'default'     => get_template_directory_uri() . '/assets/img/about/img-1.jpg',
]);


// Skill Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'skill_repeater',
  'label'       => esc_html__('Skills', 'stack'),
  'section'     => 'skill_section',
  'priority'    => 10,
  'fields' => [

    'skill_title' => [
      'type'        => 'text',
      'label'       => esc_html__('Skill Title', 'stack'),
    ],
    'skill_progress'  => [
      'type'        => 'number',
      'label'       => esc_html__('Progress', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('skill title', 'stack'),
    'field' => 'skill_title',
  ],
  'button_label' => esc_html__('Add New Skill', 'stack'),
  'default'      => [
    [
      'skill_title' => esc_html__('Strategy &amp; Analysis', 'stack'),
      'skill_progress' => esc_html__('88', 'stack'),
    ],
    [
      'skill_title' => esc_html__('Eeconomic growth', 'stack'),
      'skill_progress' => esc_html__('97', 'stack'),
    ],
    [
      'skill_title' => esc_html__('Achieves goals', 'stack'),
      'skill_progress' => esc_html__('70', 'stack'),
    ],
  ],
  'choices' => [
    'limit' => 3
  ],
  'active_callback' => [
    [
      'setting'  => 'skill_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'skill_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'skill_repeater' => [
      'selector'        => '#skill .skills-section',
      'render_callback' => function () {
        return get_theme_mod('skill_repeater');
      }
    ],
  ],
]);
