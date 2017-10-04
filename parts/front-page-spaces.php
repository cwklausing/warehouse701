<?php
/**
* Front page spaces
*/
$title = get_field( 'featured_spaces_title' );
$spaces = get_field( 'featured_spaces' );
?>

<div class="home-spaces-section">
  <h2 class="home-spaces-section__title">
    <?php echo esc_html( $title ); ?>
  </h2>
  <div class="home-spaces">
    <?php foreach ( $spaces as $space ) :
      $space_obj = $space['featured_space'];
      $custom_excerpt = $space['custom_excerpt'];
      $post = $space_obj;
      setup_postdata($post);
      $title = get_the_title();
      $pic = get_field( 'picture_gallery' ) ? get_field( 'picture_gallery' )[0]['sizes']['medium_large'] : '';
      ?>
      <div class="home-space" style="background-image:url('<?php echo esc_url( $pic ); ?>')">
        <h3 class="home-space__name"><?php echo esc_html( $title ); ?></h3>
        <?php if ( $custom_excerpt ) : ?>
          <div class="home-space__exceprt">
            <p>
              <?php echo esc_html( $custom_excerpt ); ?>
            </p>
          </div>
        <?php else : ?>
          <div class="home-space__exceprt"><?php the_excerpt(); ?></div>
        <?php endif; ?>
      </div>
    <?php 
    wp_reset_postdata();
    endforeach; ?>
  </div>
</div>