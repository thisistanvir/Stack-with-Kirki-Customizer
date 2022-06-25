<?php

/**
 * This template displaying counter section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$counterSwitcher = get_theme_mod('counter_switcher', true);
$counters = get_theme_mod('counter_repeater');
?>

<?php if (true == $counterSwitcher) : ?>
  <!-- Counter Section Start -->
  <section id="counter" class="section-padding">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <?php if ($counters) : ?>
            <div class="row">
              <!-- Start counter -->
              <?php
              $i = 0.1;
              foreach ($counters as $counter) :
                $i += 0.2;
              ?>
                <div class="col-lg-3 col-md-6 col-xs-12">
                  <div class="counter-box wow fadeInUp" data-wow-delay="<?php echo esc_attr($i); ?>s">
                    <div class="icon-o"><i class="<?php printf(esc_attr($counter['counter_icon'])); ?>"></i></div>
                    <div class="fact-count">
                      <h3><span class="counter"><?php printf(esc_html__('%s', 'stack'), $counter['counter_number']); ?></span></h3>
                      <p><?php printf(esc_html__('%s', 'stack'), $counter['counter_title']); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              <!-- End counter -->
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter Section End -->
<?php endif; ?>