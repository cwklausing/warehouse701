<?php
/**
* Front Page Circles section
*/

$circles = get_field( 'circles' );
?>

<div class="circles-section content-width">
  <?php foreach( $circles as $circle ) : 
    $text = $circle['text'];
    $link = $circle['link'];
    ?>
    <a href="<?php echo esc_url( $link ); ?>" class="home-circle">
      <?php echo esc_html( $text ); ?>
    </a>
  <?php endforeach; ?>
</div>