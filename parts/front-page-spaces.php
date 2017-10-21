<?php
/**
* Front page spaces
*/
$title = get_field( 'featured_spaces_title' );
$spaces = get_field( 'featured_spaces' );
?>

<div class="home-spaces-section">
  <h2 class="home-spaces-section__title content-width">
    <?php echo esc_html( $title ); ?>
  </h2>
  <div class="home-spaces">
    <?php foreach ( $spaces as $space ) :
      $space_obj = $space['featured_space'];
      $post = $space_obj;
      setup_postdata($post);
      $title = get_the_title();
      $gallery = get_field( 'picture_gallery' );
      $pic = $gallery[0]['sizes']['medium_large'];
      ?>
      <!-- To Do: Change background pic on hover - probably making two background divs within container -->
      <div class="home-space" style="background-image:url('<?php echo esc_url( $pic ); ?>')">
        <h3 class="home-space__name"><?php echo esc_html( $title ); ?></h3>
        <a href="#" class="home-space__button button"><?php echo esc_html(); ?></a>
      </div>
    <?php 
    wp_reset_postdata();
    endforeach; ?>
  </div>
</div>