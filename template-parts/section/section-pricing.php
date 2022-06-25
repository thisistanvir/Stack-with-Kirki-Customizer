<?php

/**
 * This template displaying pricing section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$pricingSwitcher = get_theme_mod('pricing_switcher', true);
$pricingHeading = get_theme_mod('pricing_heading');
$pricingDescription = get_theme_mod('pricing_description');
$pricingTables = get_theme_mod('pricing_repeater');
?>

<?php if (true == $pricingSwitcher) : ?>
  <!-- Pricing section Start -->
  <section id="pricing" class="section-padding bg-gray">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo $pricingHeading; ?></h2>
        <p><?php echo $pricingDescription; ?></p>
      </div>
      <?php if ($pricingTables) : ?>
        <div class="row">
          <?php
          $i = 0.1;
          foreach ($pricingTables as $pricingTable) :
            $i += 0.2;
          ?>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div id="<?php if (true == $pricingTable['pricing_featured']) : echo esc_attr('active-tb');
                        endif; ?>" class="table wow fadeInUp" data-wow-delay="<?php echo esc_attr($i); ?>s">
                <div class="title">
                  <h3><?php echo $pricingTable['pricing_title']; ?></h3>
                </div>
                <div class="pricing-header">
                  <p class="price-value">$<?php echo $pricingTable['pricing_value']; ?><span>/ <?php echo $pricingTable['payment']; ?></span></p>
                </div>
                <ul class="description">
                  <?php if ($pricingTable['pricing_feature_1']) : ?>
                    <li><?php echo $pricingTable['pricing_feature_1']; ?></li>
                  <?php endif;
                  if ($pricingTable['pricing_feature_2']) : ?>
                    <li><?php echo $pricingTable['pricing_feature_2']; ?></li>
                  <?php endif;
                  if ($pricingTable['pricing_feature_3']) : ?>
                    <li><?php echo $pricingTable['pricing_feature_3']; ?></li>
                  <?php endif;
                  if ($pricingTable['pricing_feature_4']) : ?>
                    <li><?php echo $pricingTable['pricing_feature_4']; ?></li>
                  <?php endif;
                  if ($pricingTable['pricing_feature_5']) : ?>
                    <li><?php echo $pricingTable['pricing_feature_5']; ?></li>
                  <?php endif;
                  if ($pricingTable['pricing_feature_6']) : ?>
                    <li><?php echo $pricingTable['pricing_feature_6']; ?></li>
                  <?php endif; ?>
                </ul>
                <a class="btn btn-common" href="<?php echo esc_url($pricingTable['pricing_button_link']); ?>"><?php echo $pricingTable['pricing_button_text']; ?></a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- Pricing Table Section End -->
<?php endif; ?>