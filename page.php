<?php

/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter_Theme
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

if (is_front_page() && !is_single()) :
  get_header();
else :
  get_header('blog');
endif; ?>

<main id="primary" class="site-main content-block">

  <?php if (have_posts()) : ?>

    <?php get_template_part('/template-parts/content', 'breadcrumb'); ?>

    <section class="section">
      <div class="section-container">

        <div class="internal-content-wrap <?php if (is_active_sidebar('main-sidebar')) {
                                            esc_html_e('sidebar', 'stack');
                                          } ?>">
          <?php get_template_part('/template-parts/content'); ?>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </section> <!-- .section -->

  <?php else : ?>
    <h2><?php esc_html_e('Nothing Found', 'stack'); ?></h2>
  <?php endif; ?>

</main> <!-- #main -->

<?php get_footer(); ?>