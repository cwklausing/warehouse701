<?php
/**
* Front Page Circles section
*/

$circles = get_field( 'circles' );
?>

<div class="circles-section">
  <div class="circles-section__content">
    <?php foreach( $circles as $circle ) : 
      $text = $circle['text'];
      $link = $circle['link'];
      ?>
      <a href="<?php echo esc_url( $link ); ?>" class="wh-circle">
        <div class="wh-circle__inner">
          <span class="wh-circle__text">
            <?php echo esc_html( $text ); ?>
          </span>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</div>