<?php

/**
 * Template part for displaying the post single
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stack
 */

?>

<?php
if (have_posts()) :

?>

  <div class="col-lg-8 col-md-12 col-xs-12">
    <div <?php post_class('blog-post'); ?> id="post-<?php the_ID(); ?>">
      <div class="post-thumb">
        <img src="<?php echo esc_url(the_post_thumbnail_url()); ?>" alt="<?php echo esc_attr(the_title()); ?>">
      </div>
      <div class="post-content">
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
    </div>
    <div class="blog-comment">

      <div id="comment-form">
        <?php
        if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
          comments_template();
        }
        ?>
      </div>
    </div>
  </div>

<?php
else :
  printf(esc_html__('<h2>%s</h2>', 'stack'), 'Nothing Found');
endif;
?>


<!-- Post Pagination -->
<?php the_posts_pagination(
  [
    'screen_reader_text' => ' ',
    'prev_text' => '<span class="fa fa-angle-left"></span>',
    'next_text' => '<span class="fa fa-angle-right"></span>',
    'class' => 'pagination'
  ]
);
?>