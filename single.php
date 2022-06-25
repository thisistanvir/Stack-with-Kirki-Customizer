<?php

/*
 * Template Name: Home Template
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
endif;
?>

<!-- Breadcrumb Area -->
<?php get_template_part('/template-parts/content/content', 'breadcrumb'); ?>


<!-- Blog Section Start  -->
<div id="blog-single">
  <div class="container">
    <div class="row">

      <?php get_template_part('/template-parts/content/content', 'single'); ?>


      <div class="col-lg-4 col-md-12 col-xs-12">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<!-- Blog Section End  -->


<?php get_footer(); ?>