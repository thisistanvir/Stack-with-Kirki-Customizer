<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}


if (!is_active_sidebar('main-sidebar')) {
  return;
}
?>

<aside id="secondary" class="widget-area">
  <?php dynamic_sidebar('main-sidebar'); ?>
</aside><!-- #secondary -->