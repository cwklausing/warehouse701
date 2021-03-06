<?php
/**
 * Template for the Header
 */

$menu_array = array(
  'menu_class'      => 'main-nav__menu',
  'container'       => false,
  'theme_location'  => 'primary',
);
$bubble_text = get_field( 'bubble_text', 'option' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta <?php bloginfo( 'charset' ); ?> >
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
<?php include('assets/images/icons.svg'); ?>
</head>

<body <?php body_class(); ?> >
  <header class="site-header">
    <div class="logo-circle">
      <a href="<?php echo home_url(); ?>" class="logo-circle__inner">
        <span class="logo-circle__text"><?php echo esc_html($bubble_text); ?></span>
      </a>
    </div>
    <a href="<?php bloginfo( 'url' ); ?>" class="site-header__link">
      <h1 class="site-header__title"><?php bloginfo( 'name' ); ?></h1>
    </a>
    <div class="mobile-menu-button">
      <div class="top"></div>
      <div class="middle"></div>
      <div class="bottom"></div>
    </div>
    <nav class="main-nav">
      <?php wp_nav_menu( $menu_array ); ?>
    </nav>
  </header>
