<?php

/**
 * This template displaying skill section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */


$skillSwitcher = get_theme_mod('skill_switcher', true);
$skillHeading = get_theme_mod('skill_heading');
$skillDescription = get_theme_mod('skill_description');
$skillImage = get_theme_mod('skill_image');
$skills = get_theme_mod('skill_repeater');
?>

<?php if (true == $skillSwitcher) : ?>
  <div id="skill" class="skill-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
          <img class="img-fluid" src="<?php echo esc_url($skillImage); ?>" alt="<?php echo $skillHeading; ?>">
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
          <div class="site-heading">
            <h2 class="section-title"><?php echo $skillHeading; ?></span></h2>
            <p><?php echo $skillDescription; ?></p>
          </div>
          <?php if ($skills) : ?>
            <div class="skills-section">

              <?php foreach ($skills as $skill) : ?>
                <div class="progress-box">
                  <h5><?php echo $skill['skill_title']; ?> <span class="pull-right"><?php echo $skill['skill_progress']; ?>%</span></h5>
                  <div class="progress" style="opacity: 1; left: 0px;">
                    <div class="progress-bar" role="progressbar" data-width="<?php echo esc_attr($skill['skill_progress']); ?>" style="width: <?php echo esc_attr($skill['skill_progress']); ?>%;"></div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>