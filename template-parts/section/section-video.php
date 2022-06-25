<?php

/**
 * This template displaying video section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$videoSwitcher = get_theme_mod('video_switcher', true);
$videoHeading = get_theme_mod('video_heading');
$videoLink = get_theme_mod('video_link');
?>

<?php if (true == $videoSwitcher) : ?>
  <!-- Start Video promo Section -->
  <section class="video-promo section-padding">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
            <a href="<?php echo $videoLink; ?>" class="video-popup"><i class="<?php echo esc_attr('lni-film-play'); ?>"></i></a>
            <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo $videoHeading; ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Video Promo Section -->
<?php endif; ?>