<?php
/**
 * Template for the Footer
 */

$menu_array = array(
  'menu'            => 'Footer Menu',
  'menu_class'      => '',
  'container'       => false,
  'theme_location'  => 'secondary',
)

?>

<footer class="footer">
  <div class="social-media footer-section">
    <a href="<?php echo esc_url( $facebook_link ); ?>" target="_blank">
      <svg aria-labelledby="icon-facebook" class="social-media__icon">
        <use xlink:href="#icon-facebook"></use>
      </svg>
    </a>
    <a href="<?php echo esc_url( $instagram_link ); ?>" target="_blank">
      <svg aria-labelledby="icon-instagram" class="social-media__icon">
        <use xlink:href="#icon-instagram"></use>
      </svg>
    </a>
  </div>

  <nav class="footer-section">
    <?php wp_nav_menu( $menu_array ); ?>
  </nav>

  <?php wp_footer(); ?>
</footer>

</body>
</html>
