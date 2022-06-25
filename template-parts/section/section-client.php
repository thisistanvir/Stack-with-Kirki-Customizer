<?php

/**
 * This template displaying clients section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$clientSwitcher = get_theme_mod('client_switcher', true);
$clientHeading = get_theme_mod('client_heading');
$clientDescription = get_theme_mod('client_description');
$clients = get_theme_mod('client_repeater');
?>

<!-- Clients Section Start -->
<?php if (true == $clientSwitcher) : ?>
  <div id="clients" class="section-padding bg-gray">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo $clientHeading; ?></h2>
        <p><?php echo $clientDescription; ?></p>
      </div>
      <?php if ($clients) : ?>
        <div class="row text-align-">

          <?php
          $i = 0.1;
          foreach ($clients as $client) :
            $i += 0.2;
          ?>
            <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
              <div class="client-item-wrapper">
                <img class="img-fluid" src="<?php echo esc_url($client['client_image']); ?>" alt="<?php echo esc_attr($client['client_title']); ?>">
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
<!-- Clients Section End -->