<?php
/**
* Front Page Circles section
*/

$circles = get_field( 'circles' );
?>

<div class="circles-section content-width">
  <div class="circles-section__content">
    <?php foreach( $circles as $circle ) : 
      $text = $circle['text'];
      $link = $circle['link'];
      ?>
      <a href="<?php echo esc_url( $link ); ?>" class="home-circle">
        <div class="home-circle__inner">
          <span class="home-circle__text">
            <?php echo esc_html( $text ); ?>
          </span>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</div>