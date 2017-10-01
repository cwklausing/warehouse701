<?php
/**
* Front page about
*/
$about_header = get_field( 'about_header' );
$about_text   = get_field( 'about_text' );
?>

<section class="home-about">
  <h2 class="home-about__title"><?php echo esc_html($about_header); ?></h2>
  <p class="home-about__text"><?php echo esc_html($about_text); ?></p>
</section>
