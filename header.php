<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barcos_Barcelona
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'barcos_barcelona' ); ?></a>
	
	<header>
		<div class="header">
		<nav>
			<div class="header__menu-icon">
			<div class="header__menu__line"></div>
			<div class="header__menu__line"></div>
			<div class="header__menu__line"></div>
			</div>
			<div class="header__menu">
				<div class="header__menu__close">
					<div class="close"></div>
				</div>
				<!--<ul class="header__menu__list">-->
					<!--<li class="header__menu__item">CHARTER</li>
					<li class="header__menu__item">SALES</li>
					<li class="header__menu__item">ABOUT US</li>-->
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	   => 'header__menu__list',
						) );
					?>
				<!--</ul>-->
			</div>
		</nav>
		<div class="header__logo">
			<!--<img class="header__logo__img" src="<?php echo THEME_URI; ?>/imgs/logo.png" alt="">-->
			<?php the_custom_logo(); ?>
		</div>
		<div class="header__search">
			<img src="<?php echo THEME_URI; ?>/imgs/lupa.png" alt="" style="width: 20px;">
		</div>
		</div>
  	</header>
