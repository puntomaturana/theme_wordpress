<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<nav class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-initial',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav>