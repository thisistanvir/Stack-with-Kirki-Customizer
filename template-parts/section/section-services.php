<?php

/**
 * This template displaying services section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$servicesSwitcher = get_theme_mod('services_switcher', true);
$servicesHeading = get_theme_mod('services_heading');
$servicesDescription = get_theme_mod('services_description');
$serviceItems = get_theme_mod('services_repeater');
?>

<?php if (true == $servicesSwitcher) : ?>
  <!-- Services Section Start -->
  <section id="services" class="section-padding bg-gray">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo $servicesHeading; ?></h2>
        <p><?php echo $servicesDescription; ?></p>
      </div>
      <?php if ($serviceItems) : ?>
        <div class="row">

          <?php
          $i = 0.1;
          foreach ($serviceItems as $serviceItem) :
            $i += 0.2;
          ?>
            <div class="col-md-6 col-lg-4 col-xs-12">
              <div class="services-item wow fadeInRight" data-wow-delay="<?php echo $i; ?>s">
                <div class="icon">
                  <i class="<?php echo $serviceItem['service_icon']; ?>"></i>
                </div>
                <div class="services-content">
                  <h3><a href="#"><?php echo $serviceItem['service_title']; ?></a></h3>
                  <p><?php echo $serviceItem['service_description']; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- Services Section End -->
<?php endif; ?>