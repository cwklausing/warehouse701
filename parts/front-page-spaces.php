<?php
/**
* Front page spaces
*/
$spaces = get_field( 'featured_spaces' );
$button_text = get_field( 'spaces_button_text' );
?>
<div class="home-spaces">
  <?php foreach ( $spaces as $space ) :
    $space_obj = $space['featured_space'];
    $description = $space['custom_excerpt'];
    $post = $space_obj;
    setup_postdata($post);
    $title = get_the_title();
    $gallery = get_field( 'picture_gallery' );
    $pic = $gallery[0]['sizes']['medium_large'];
    ?>
    <div class="home-space__wrap">
      <div class="home-space">
        <div class="home-space__image" style="background-image:url('<?php echo esc_url( $pic ); ?>')">
          <div class="home-space__overlay"></div>
          <h3 class="home-space__title"><?php echo esc_html( $title ); ?></h3>
        </div>
        <div class="home-space__text">
          <h4 class="home-space__title-two"><?php echo esc_html( $title ); ?></h4>
          <p class="home-space__description"><?php echo esc_html( $description ); ?></p>
          <a href="#" class="home-space__button button"><?php echo esc_html( $button_text ); ?></a>
        </div>
      </div>
    </div>
  <?php 
  wp_reset_postdata();
  endforeach; ?>
</div>