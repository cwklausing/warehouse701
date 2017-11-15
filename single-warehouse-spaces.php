<?php

/**
 * Single warehouse space
 */

get_header();
?>

<?php if ( have_posts() ) :
  while ( have_posts() ) : the_post(); 
  $images = get_field( 'picture_gallery' );
  ?>

    <div class="single-space">
      <?php if ( have_rows('picture_gallery') ) : ?>

        <div class="single-space__gallery">

          <?php foreach ( $images as $image ) : 
            $hero = $image['sizes']['xl'];
            ?>

            <div class="single-space__image" style="background-image:url('<?php echo esc_url( $hero ); ?>')"></div>

          <?php endforeach;?>
        </div>
      <?php endif; ?>

      <div class="single-space__bottom">
        <div class="single-space__card">
          <h1 class="single-space__name"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>
    </div>

  <?php endwhile; ?>
  <?php else : ?>
    <div class="single-space__empty">
      <h1>Sorry, we can't find this space at the moment. Try again soon!</h1>
    </div>
  <?php endif; ?>

<?php get_footer(); ?>