<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bcowry
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	 <nav class="bg-gray-800 topnav">
    <div class="menubar">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo home">
        <img src="<?php echo get_template_directory_uri()?>/img/logo.svg" alt="">
      </a>
      <div class="icons">
        <i class="icon-menu"><span></span></i>
      </div>
	</div>
	<?php 
		wp_nav_menu(
			array(
				'theme_location'  => 'headernav',
				'container' => 'ul',
				'menu_class'      => 'menu',
				
			)
		);
	?>

</nav>

<div id="content" class="text-gray-800 hmintro site-content">
