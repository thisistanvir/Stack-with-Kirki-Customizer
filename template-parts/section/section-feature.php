<?php

/**
 * This template displaying feature section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$aboutSwitcher = get_theme_mod('about_switcher', true);
$aboutHeading = get_theme_mod('about_heading');
$aboutDescription = get_theme_mod('about_description');
$aboutBtnText = get_theme_mod('about_btn_text');
$aboutBtnLink = get_theme_mod('about_btn_link');
$features = get_theme_mod('feature_repeater');
?>

<?php if (true == $aboutSwitcher) : ?>
  <!-- Feature Section Start -->
  <div id="feature">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="text-wrapper">
            <div>
              <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo $aboutHeading; ?></h2>
              <p class="mb-4 wow fadeInLeft" data-wow-delay="0.5s"><?php echo $aboutDescription; ?></p>
              <a class="btn btn-common wow fadeInLeft" data-wow-delay="0.7s" href="<?php echo $aboutBtnLink; ?>"><?php echo $aboutBtnText; ?></a>
            </div>
          </div>
        </div>

        <?php if ($features) : ?>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
            <div class="feature-thumb">
              <?php
              $i = 100;
              foreach ($features as $feature) :
                $i += 200;
              ?>
                <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="<?php echo $i; ?>ms">
                  <div class="icon">
                    <i class="<?php echo $feature['feature_icon']; ?>"></i>
                  </div>
                  <div class="feature-content">
                    <h3><?php echo $feature['feature_title']; ?></h3>
                    <p><?php echo $feature['feature_description']; ?> </p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- Feature Section End -->
<?php endif; ?>