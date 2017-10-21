<?php
/**
* Front page about
*/
$about_header = get_field( 'about_header' );
$about_button_text = get_field( 'about_button_text' );
$about_button_url = get_field( 'about_button_url' );
$about_text   = get_field( 'about_text' );
?>

<section class="home-about content-width">
  <div class="home-about__left">
    <h2 class="home-about__title"><?php echo esc_html($about_header); ?></h2>
    <a href="<?php echo esc_url( $about_button_url ); ?>" class="button">
      <?php echo esc_html( $about_button_text ); ?>
    </a>
  </div>
  <div class="home-about__right">
    <p class="home-about__text"><?php echo esc_html($about_text); ?></p>
  </div>
</section>
