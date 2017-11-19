<?php
/**
 * Default Content
 *
 * @package painters_bld;
 */

$hero = get_field( 'hero_image' )['sizes']['xl'];
?>

<main <?php post_class( 'entry' ); ?>>
	<div class="entry__hero" style="background-image:url('<?php echo esc_url( $hero ); ?>')"></div>
	<header class="entry__header gray-header">
		<h1 class="entry__title content-width gray-header__title">
			<?php the_title(); ?>
		</h1>
	</header>
	<div class="entry__content content-width">
		<?php the_content(); ?>
	</div>
</main>