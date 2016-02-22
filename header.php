<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header class="prime-header">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" width="85" height="33" alt="Logo"/></a></h1>
				</div>
				<?php
				$menuArguments = array(
					'theme_location' => 'primary',
					'container'       => 'nav',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class' 	=> 'nav navbar-nav navbar-right',
				);
				wp_nav_menu($menuArguments); ?>
			</div>
		</header>