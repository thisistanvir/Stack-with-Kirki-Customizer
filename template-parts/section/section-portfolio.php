<?php

/**
 * This template displaying portfolio section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$portfolioSwitcher = get_theme_mod('portfolio_switcher', true);
$portfolioHeading = get_theme_mod('portfolio_heading');
$portfolioDescription = get_theme_mod('portfolio_description');
$portfolios = get_theme_mod('portfolio_repeater');
?>

<!-- Portfolio Section -->
<?php if (true == $portfolioSwitcher) : ?>
  <section id="portfolios" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo $portfolioHeading; ?></h2>
        <p><?php echo $portfolioDescription; ?></p>
      </div>

      <!-- Portfolio Recent Projects -->
      <?php if ($portfolios) : ?>
        <div id="portfolio" class="row">
          <?php foreach ($portfolios as $portfolio) : ?>
            <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?php echo esc_url($portfolio['portfolio_image']); ?>" alt="<?php echo esc_attr($portfolio['portfolio_title']); ?>" />
                  <div class="single-content">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="zoom-icon">
                          <a class="lightbox" href="<?php echo esc_url($portfolio['portfolio_preview_image']); ?>"><i class="<?php echo esc_attr('lni-eye item-icon'); ?>"></i></a>
                        </div>
                        <a href="<?php echo esc_attr($portfolio['portfolio_link']); ?>"><?php echo $portfolio['portfolio_title']; ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
    <!-- Container Ends -->
  </section>
<?php endif; ?>
<!-- Portfolio Section Ends -->