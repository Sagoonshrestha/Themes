<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title>Sagun Shrestha</title>
	<meta name="description" content="Portfolio of an experienced web developer who can build exquisite websites with excellent ui/ux and accessibility.">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="header-container">
	<div class="site-branding">
			<?php if ( has_custom_logo()) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php endif; ?>
		</div>
	<?php if ( has_nav_menu( 'primary' ) ) : ?>	
		<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'custom_theme' ); ?>">
			<div class="menu-button-container">
				<button id="primary-mobile-menu-toggle" class="primary-mobile-menu-toggle" aria-controls="primary-menu-list" aria-expanded="false">
					<span class="hamburger"></span>
				</button>
			</div>
			<?php if(!is_singular()){
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_class'      => 'menu-wrapper',
						'container_class' => 'primary-menu-container',
						'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
				);
			}else{
				wp_nav_menu(
					array(
						'theme_location'  => 'secondary',
						'menu_class'      => 'menu-wrapper',
						'container_class' => 'secondary-menu-container',
						'items_wrap'      => '<ul id="secondary-menu-list" class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
				);
			}
			
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
</div>
	
