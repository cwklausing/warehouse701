<?php
/**
* Front page spaces
*/
$spaces = get_field( 'featured_spaces' );
$number_spaces = count($spaces);
$mobile_text = get_field( 'mobile_swipe_text' );
$button_text = get_field( 'spaces_button_text' );
$count = 0;
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
    $count++;
    ?>
    <div class="home-space__wrap">
      <div class="home-space">
        <div class="home-space__image" style="background-image:url('<?php echo esc_url( $pic ); ?>')">
            <div class="home-space__overlay"></div>
          </div>
          <div class="home-space__text">
            <h4 class="home-space__title-two"><?php echo esc_html( $title ); ?></h4>
            <p class="home-space__description"><?php echo esc_html( $description ); ?></p>
            <a href="#" class="home-space__button button"><?php echo esc_html( $button_text ); ?></a>
            <h3 class="home-space__title">
              <span class="home-space__title__text"><?php echo esc_html( $title ); ?></span>
              <span class="home-space__title__underline"></span>
            </h3>
            <?php if($count === 1 && $number_spaces > 1 ) : ?>
              <p class="home-space__swipe-text">
                <?php echo esc_html( $mobile_text ); ?>
                <span class="icon icon-chovron-right">
                  <svg aria-labelledby="icon-chevron-right">
                    <use xlink:href="#icon-chevron-right"></use>
                  </svg>
                </span>
              </p>
            <?php endif; ?>
        </div>
      </div>
    </div>
  <?php 
  wp_reset_postdata();
  endforeach; ?>
</div>