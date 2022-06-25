<?php

/**
 * Template part for displaying the post excerpt
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stack
 */

?>

<?php
if (have_posts()) :

  $args = [
    'posts_per_page' => 3,
    'post_type' => 'post',
    'order' => 'DESC'
  ];
  $blog = new WP_Query($args);

  $i = 0.1;
  while ($blog->have_posts()) : $blog->the_post();
    $i += 0.2;
?>


    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
      <!-- Blog Item Starts -->
      <div <?php post_class('blog-item-wrapper wow fadeInLeft'); ?> id="post-<?php the_ID(); ?>" data-wow-delay="<?php echo $i; ?>s">
        <div class="blog-item-img">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full', ['class' => 'alignleft post_thumb']); ?>
          </a>
        </div>
        <div class="blog-item-text">
          <h3>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="btn btn-common btn-rm"><?php echo esc_html__('Read More', 'stack'); ?></a>
        </div>
      </div>
      <!-- Blog Item Wrapper Ends-->
    </div>

<?php endwhile;
  wp_reset_postdata();
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