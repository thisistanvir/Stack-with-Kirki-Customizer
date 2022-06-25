<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
          <?php if (has_custom_logo()) :
            the_custom_logo();
          else :
          ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="<?php echo esc_attr(bloginfo('name')); ?>">
          <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="<?php echo esc_attr('lni-menu'); ?>"></i>
        </button>


        <?php
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarCollapse',
          'menu_class' => 'navbar-nav mr-auto w-100 justify-content-end clearfix',

        ])
        ?>

      </div>
    </nav>
    <!-- Navbar End -->
  </header>
  <!-- Header Area wrapper End -->