<?php

/**
 * This template displaying testimonial section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

$testimonialSwitcher = get_theme_mod('testimonial_switcher', true);
$testimonials = get_theme_mod('testimonial_repeater',);
?>

<!-- Testimonial Section Start -->
<?php if (true == $testimonialSwitcher) : ?>
  <section id="testimonial" class="testimonial section-padding">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
          <?php if ($testimonials) :  ?>
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="0.3s">
              <?php foreach ($testimonials as $testimonial) : ?>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="img-thumb">
                      <img src="<?php echo esc_url($testimonial['testimonial_image']); ?>" alt="<?php echo esc_attr($testimonial['testimonial_name']); ?>">
                    </div>
                    <div class="info">
                      <h2><?php printf(esc_html__('%s', 'stack'), $testimonial['testimonial_name']); ?></h2>
                      <h3><?php printf(esc_html__('%s', 'stack'), $testimonial['testimonial_designation']); ?></h3>
                    </div>
                    <div class="content">
                      <p class="description"><?php printf(esc_html__('%s', 'stack'), $testimonial['testimonial_description']); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- Testimonial Section End -->