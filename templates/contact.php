<?php
/**
 * Template Name: Contact
 */

$hero = get_field( 'hero_image' )['sizes']['xl'];
$card_title = get_field( 'header_card_title' );
/**
 * Other fields used: 
 *    'header_card_text'
 *    'contact_shortcode'
 */

get_header();
?>

<div class="primary contact">

	<?php if ( have_posts() ) :

		while ( have_posts() ) : the_post(); ?>

		<div class="contact__hero" style="background-image:url('<?php echo esc_url( $hero ); ?>')">
      <div class="contact__card">
        <h2 class="contact__title"><?php echo esc_html( $card_title ); ?></h2>
        <div class="card__text">
          <?php the_field( 'header_card_text'); ?>
        </div>
      </div>
    </div>
    <div class="contact__form">
      <?php the_field( 'contact_shortcode' ); ?>
    </div>

 	<?php endwhile;

	endif;
	?>

<h1>Contact</h1>

<?php get_footer(); ?>