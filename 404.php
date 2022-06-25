<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @package stack
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

  <section class="section error-404 not-found pt-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'stack'); ?></h1>

          <div class="page-content">
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'stack'); ?></p>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn"><?php esc_html_e('go back to Home', 'stack'); ?></a>

          </div><!-- .page-content -->

        </div>
      </div>
    </div>
  </section> <!-- .error-404 -->

</main> <!-- #main -->

<?php get_footer(); ?>