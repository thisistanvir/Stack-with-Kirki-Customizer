<?php

/**
 * This template displaying Contact section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$contactSwitcher = get_theme_mod('contact_switcher', true);
$contactForm = get_theme_mod('contact_form');
$contactHeading = get_theme_mod('contact_heading');
$contactDescription = get_theme_mod('contact_description');
$contactTitle = get_theme_mod('contact_title');
$contactInfos = get_theme_mod('contact_repeater');
?>

<!-- Contact Section Start -->
<?php if (true == $contactSwitcher) : ?>
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row contact-form-area">
        <div class="col-md-6 col-lg-6 col-sm-12">
          <div class="contact-block wow fadeInUp" id="contactForm" data-wow-delay="0.3s">
            <?php echo do_shortcode($contactForm); ?>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
          <div class="contact-right-area wow fadeInUp" data-wow-delay="0.5s">
            <div class="contact-title">
              <h1><?php printf(esc_html__('%s', 'stack'), $contactHeading); ?></h1>
              <p><?php printf(esc_html__('%s', 'stack'), $contactDescription); ?></p>
            </div>
            <h2><?php printf(esc_html__('%s', 'stack'), $contactTitle); ?></h2>
            <?php if ($contactInfos) : ?>
              <div class="contact-right">
                <?php foreach ($contactInfos as $info) : ?>
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="<?php echo esc_attr($info['info_icon']); ?>"></i>
                    </div>
                    <?php if ($info['info_link']) : ?>
                      <p><a href="<?php echo esc_attr($info['info_link']); ?>"><?php echo $info['info_title']; ?></a></p>
                    <?php else : ?>
                      <p><?php echo $info['info_title']; ?></p>
                    <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- Contact Section End -->