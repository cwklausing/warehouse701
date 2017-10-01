<?php
/**
 * Front Page Content
 *
 * @package wh701;
 */

$home_gallery = get_field( 'home_page_image' )['sizes']['large'];
?>

<main class="home">
	<div class="home-hero" style="background-image: url('<?php echo esc_url( $home_gallery ); ?>');"></div>
	<div class="home-content">
		<?php get_template_part( 'parts/front-page', 'about' ); ?>
		<?php get_template_part( 'parts/front-page', 'spaces' ); ?>
	</div>
</main>