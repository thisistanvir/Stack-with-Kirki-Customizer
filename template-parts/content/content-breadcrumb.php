<?php

/**
 * Template part for displaying the Breadcrumb
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stack
 */

?>
<!-- Page header Start -->
<section class="page-header" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper text-center">
          <h2><?php the_title(); ?></h2>
          <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Home', 'stack'); ?> </a>/ <?php the_title(); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Page header End -->