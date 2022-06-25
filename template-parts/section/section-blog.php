<?php

/**
 * This template displaying blog section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$blogSwitcher = get_theme_mod('blog_switcher', true);
$blogHeading = get_theme_mod('blog_heading');
$blogDescription = get_theme_mod('blog_description');
?>
<!-- Blog Section -->
<?php if (true == $blogSwitcher) : ?>
  <section id="blog" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo $blogHeading; ?></h2>
        <p><?php printf(esc_html__('%s', 'stack'), $blogDescription); ?></p>
      </div>
      <div class="row">
        <?php get_template_part('/template-parts/content/content', 'excerpt'); ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- blog Section End -->