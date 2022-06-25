<?php

/**
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


$bannerHeading = get_theme_mod('banner_heading');
$bannerButtonText = get_theme_mod('banner_btn_text');
$bannerButtonLink = get_theme_mod('banner_btn_link');
$bannerImage = get_theme_mod('banner_image');
?>

<!-- Hero Area Start -->
<div id="hero-area" class="hero-area-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="contents text-center">
          <h2 class="head-title wow fadeInUp"><?php echo $bannerHeading; ?></h2>
          <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
            <a href="<?php echo esc_url($bannerButtonLink); ?>" class="btn btn-common"><?php echo $bannerButtonText; ?></a>
          </div>
        </div>
        <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
          <img class="img-fluid" src="<?php echo $bannerImage['url']; ?>" alt="<?php echo $bannerHeading; ?>">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero Area End -->

<!-- Feature Section -->
<?php get_template_part('/template-parts/section/section', 'feature'); ?>

<!-- Services Section -->
<?php get_template_part('/template-parts/section/section', 'services'); ?>

<!-- Video Section -->
<?php get_template_part('/template-parts/section/section', 'video'); ?>

<!-- Team Section -->
<?php get_template_part('/template-parts/section/section', 'team'); ?>

<!-- Counter Section -->
<?php get_template_part('/template-parts/section/section', 'counter'); ?>

<!-- Pricing Section -->
<?php get_template_part('/template-parts/section/section', 'pricing'); ?>

<!-- Skill Section -->
<?php get_template_part('/template-parts/section/section', 'skills'); ?>

<!-- Portfolio Section -->
<?php get_template_part('/template-parts/section/section', 'portfolio'); ?>

<!-- Testimonial Section -->
<?php get_template_part('/template-parts/section/section', 'testimonial'); ?>

<!-- Blog Section -->
<?php get_template_part('/template-parts/section/section', 'blog'); ?>

<!-- Clients Section -->
<?php get_template_part('/template-parts/section/section', 'client'); ?>

<!-- Contact Section -->
<?php get_template_part('/template-parts/section/section', 'contact'); ?>

<?php get_footer(); ?>