<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

$footerSwitcher = get_theme_mod('footer_switcher', true);
$footerBrand = get_theme_mod('footer_image');
$footerCopyright = get_theme_mod('footer_copyright');
$footerSocials = get_theme_mod('footer_socials');
?>

<!-- Copyright Section Start -->
<?php if (true == $footerSwitcher) : ?>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3 col-xs-12">
          <div class="footer-logo">
            <img src="<?php echo esc_url($footerBrand); ?>" alt="<?php echo bloginfo('name'); ?>">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
          <?php if ($footerSocials) : ?>
            <div class="social-icon text-center">
              <?php foreach ($footerSocials as $social) : ?>
                <a class="facebook" href="<?php echo esc_url($social['social_link']); ?>"><i class="<?php echo esc_attr($social['social_icon']); ?>"></i></a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-lg-4 col-md-5 col-xs-12">
          <p class="float-right"><?php echo $footerCopyright; ?></p>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<!-- Copyright Section End -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
  <i class="lni-arrow-up"></i>
</a>

<!-- Preloader -->
<div id="preloader">
  <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->


<?php wp_footer(); ?>
</body>

</html>