<?php
/**
 * Template for the Footer
 */

$phone = get_field( 'phone_number', 'option' );
$email = get_field( 'email_address', 'option' );
$bubble_text = get_field( 'bubble_text', 'option' );
?>

<footer class="footer">
    <div class="logo-circle logo-circle__footer">
      <a href="<?php echo home_url(); ?>" class="logo-circle__inner">
        <span class="logo-circle__text"><?php echo esc_html($bubble_text); ?></span>
      </a>
    </div>
    <div class="footer__contact">
      <span class="footer__phone"><?php echo esc_html($phone); ?></span>
      <a href="#" class="footer__email"><?php echo esc_html($email); ?></a>
    </div>
  <?php wp_footer(); ?>
</footer>

</body>
</html>
