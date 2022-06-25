<?php

/**
 * This template displaying team customize option
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

/**
 * Team Section
 */
Kirki::add_section('team_section', array(
  'title'          => esc_html__('Team Section', 'stack'),
  'description'    => esc_html__('Add/Edit team content here.', 'stack'),
  'panel'          => 'stack_panel',
  'priority'       => 160,
  'icon'  => 'dashicons-groups',
));

/**
 * Team Switcher
 */
Kirki::add_field('stack_config', [
  'type'        => 'switch',
  'label'       => esc_html__('Enable this section?', 'stack'),
  'settings'    => 'team_switcher',
  'section'     => 'team_section',
  'default'     => 'on',
  'priority'    => 10,
  'choices'     => [
    'on'  => esc_html__('Enable', 'stack'),
    'off' => esc_html__('Disable', 'stack'),
  ],
]);
/**
 * Team control
 */
Kirki::add_field('stack_config', [
  'type'        => 'radio-buttonset',
  'settings'    => 'team_control',
  'section'     => 'team_section',
  'default'     => 'content',
  'priority'    => 10,
  'transport' => 'auto',
  'choices'     => [
    'content'   => esc_html__('Content', 'stack'),
    'style' => esc_html__('Style', 'stack'),
  ],
  'active_callback' => [
    [
      'setting'  => 'team_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Team heading
Kirki::add_field('stack_config', [
  'type'     => 'text',
  'settings' => 'team_heading',
  'label'    => esc_html__('Team Heading', 'stack'),
  'section'  => 'team_section',
  'default'  => esc_html__('Meet our team', 'stack'),
  'priority' => 10,
  'partial_refresh'    => [
    'team_heading' => [
      'selector'        => '#team .section-title ',
      'render_callback' => function () {
        return get_theme_mod('team_heading');
      }
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'team_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'team_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);

// Team description
Kirki::add_field('stack_config', [
  'type'     => 'textarea',
  'settings' => 'team_description',
  'label'    => esc_html__('Team Description', 'stack'),
  'section'  => 'team_section',
  'default'  => esc_html__('A desire to help and empower others between community contributors in technology <br>
  began to grow in 2020.', 'stack'),
  'priority' => 10,
  'transport' => 'postMessage',
  'js_vars'   => [
    [
      'element'  => '#team .section-header p',
      'function' => 'html',
    ],
  ],
  'active_callback' => [
    [
      'setting'  => 'team_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'team_switcher',
      'operator' => '==',
      'value'    => true,
    ],
  ],
]);


// Team Repeater
Kirki::add_field('stack_config', [
  'type'        => 'repeater',
  'settings'     => 'team_repeater',
  'label'       => esc_html__('Team Member', 'stack'),
  'section'     => 'team_section',
  'priority'    => 10,
  'fields' => [

    'member_image' => [
      'type'        => 'image',
      'label'       => esc_html__('Image', 'stack'),
    ],
    'member_name' => [
      'type'        => 'text',
      'label'       => esc_html__('Name', 'stack'),
    ],
    'member_designation'  => [
      'type'        => 'text',
      'label'       => esc_html__('Designation', 'stack'),
    ],
    'member_facebook'  => [
      'type'        => 'link',
      'label'       => esc_html__('Facebook', 'stack'),
    ],
    'member_twitter'  => [
      'type'        => 'link',
      'label'       => esc_html__('Twitter', 'stack'),
    ],
    'member_instagram'  => [
      'type'        => 'link',
      'label'       => esc_html__('Instagram', 'stack'),
    ],
  ],
  'row_label' => [
    'type'  => 'field',
    'value' => esc_html__('member name', 'stack'),
    'field' => 'member_name',
  ],
  'button_label' => esc_html__('Add New Member', 'stack'),
  'default'      => [
    [
      'member_image' => get_template_directory_uri() . '/assets/img/team/team-01.png',
      'member_name' => esc_html__('David Smith', 'stack'),
      'member_designation' => esc_html__('Chief Operating Officer', 'stack'),
      'member_facebook'  => esc_url('https://facebook.com'),
      'member_twitter'  => esc_url('https://twitter.com'),
      'member_instagram'  => esc_url('https://instagram.com'),
    ],
    [
      'member_image' => get_template_directory_uri() . '/assets/img/team/team-02.png',
      'member_name' => esc_html__('Eric Peterson', 'stack'),
      'member_designation' => esc_html__('Product Designer', 'stack'),
      'member_facebook'  => esc_url('https://facebook.com'),
      'member_twitter'  => esc_url('https://twitter.com'),
      'member_instagram'  => esc_url('https://instagram.com'),
    ],
    [
      'member_image' => get_template_directory_uri() . '/assets/img/team/team-03.png',
      'member_name' => esc_html__('Durwin Babb', 'stack'),
      'member_designation' => esc_html__('Lead Designer', 'stack'),
      'member_facebook'  => esc_url('https://facebook.com'),
      'member_twitter'  => esc_url('https://twitter.com'),
      'member_instagram'  => esc_url('https://instagram.com'),
    ],
    [
      'member_image' => get_template_directory_uri() . '/assets/img/team/team-04.png',
      'member_name' => esc_html__('Marijn Otte', 'stack'),
      'member_designation' => esc_html__('Front-end Developer', 'stack'),
      'member_facebook'  => esc_url('https://facebook.com'),
      'member_twitter'  => esc_url('https://twitter.com'),
      'member_instagram'  => esc_url('https://instagram.com'),
    ],
  ],
  'choices' => [
    'limit' => 4
  ],
  'active_callback' => [
    [
      'setting'  => 'team_control',
      'operator' => '==',
      'value'    => 'content',
    ],
    [
      'setting'  => 'team_switcher',
      'operator' => '==',
      'value'    => true,
    ]
  ],
  'partial_refresh'    => [
    'team_repeater' => [
      'selector'        => '#team .row',
      'render_callback' => function () {
        return get_theme_mod('team_repeater');
      }
    ],
  ],
]);
