<?php 
/**
* Content part for spaces archive
*/

$args = array(
  'post_type' => 'warehouse-spaces'
);
$spaces_query = new WP_Query( $args );
$hero_image = get_field( 'hero_image' )['sizes']['xxl'];
?>

<div class="spaces">
  <div class="spaces__hero" style="background-image:url('<?php echo esc_url( $hero_image ); ?>')">
  </div>
  <h1 class="spaces__title"><?php the_title(); ?></h1>
  
  <?php if( $spaces_query->have_posts() ) : ?>

    <div class="spaces__gallery">
  
      <?php while( $spaces_query->have_posts() ) : $spaces_query->the_post(); 
      $space_image = get_field( 'picture_gallery' )[0]['sizes']['medium'];
      ?>
        <a href="<?php the_permalink(); ?>" class="space">
          <div class="wh-circle">
            <div class="wh-circle__inner" style="background-image:url('<?php echo esc_url( $space_image ); ?>')"></div>
          </div>
          <h2 class="space__name"><?php the_title(); ?></h2>
        </a>

      <?php endwhile; ?>
    
    </div>
    
    <?php else: ?>

      <p class="spaces__title">Sorry, no spaces available right now</p>
    
    <?php endif ?>
  </div>
</div>