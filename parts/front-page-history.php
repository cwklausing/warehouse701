<?php
/**
* Front Page History section
*/

$history_image = 'http://warehouse701.dev/wp-content/uploads/2017/09/warehouse-img2-768x512.jpg';
$history_text = '<p>Test text tet auohao u u ecuho rur . uro.ce cecceb o o etusha ose ur,bkts r,rthanhu otte u uthe anoses usus to her ato ner, tue cona ocrlo </p>';
$cta_link = "https://google.com";
$cta_text = "Learn more";
?>

<div class="home-history">
  <h2 class="home-history__title content-width">Our History</h2>
  <div class="home-history__image" style="background-image:url('<?php echo esc_url( $history_image ); ?>')"></div>
  <div class="home-history__text content-width">
    <?php echo $history_text; ?>
  </div>
  <a href="<?php echo esc_url( $cta_link ); ?>" class="button"><?php echo esc_html( $cta_text ); ?></a>
</div>