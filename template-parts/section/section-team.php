<?php

/**
 * This template displaying team section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

$teamSwitcher = get_theme_mod('team_switcher', true);
$teamHeading = get_theme_mod('team_heading');
$teamDescription = get_theme_mod('team_description');
$teamMembers = get_theme_mod('team_repeater');
?>

<?php if (true == $teamSwitcher) : ?>
  <!-- Team Section Start -->
  <section id="team" class="section-padding text-center">
    <div class="container">
      <div class="section-header text-center">
        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo $teamHeading; ?></h2>
        <p><?php echo $teamDescription; ?></p>
      </div>

      <?php if ($teamMembers) : ?>
        <div class="row">
          <?php
          $i = 0.1;
          foreach ($teamMembers as $teamMember) :
            $i += 0.2;
          ?>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <!-- Team Item Starts -->
              <div class="team-item text-center wow fadeInRight" data-wow-delay="<?php echo $i; ?>s">
                <div class="team-img">
                  <img class="img-fluid" src="<?php echo $teamMember['member_image']; ?>" alt="<?php echo $teamMember['member_name']; ?>">
                  <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                      <ul class="social-icons">
                        <?php if ($teamMember['member_facebook']) : ?>
                          <li><a href="<?php echo $teamMember['member_facebook']; ?>"><i class="<?php echo esc_attr('lni-facebook-filled'); ?>" aria-hidden="true"></i></a></li>
                        <?php endif;
                        if ($teamMember['member_twitter']) :
                        ?>
                          <li><a href="<?php echo $teamMember['member_twitter']; ?>"><i class="<?php echo esc_attr('lni-twitter-filled'); ?>" aria-hidden="true"></i></a></li>
                        <?php endif;
                        if ($teamMember['member_instagram']) :
                        ?>
                          <li><a href="<?php echo $teamMember['member_instagram']; ?>"><i class="<?php echo esc_attr('lni-instagram-filled'); ?>" aria-hidden="true"></i></a></li>
                        <?php endif; ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="info-text">
                  <h3><?php echo $teamMember['member_name']; ?></h3>
                  <p><?php echo $teamMember['member_designation']; ?></p>
                </div>
              </div>
              <!-- Team Item Ends -->
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- Team Section End -->
<?php endif; ?>