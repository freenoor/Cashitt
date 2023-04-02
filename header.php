<?php
/**
 * @package Standard
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" content="My luxury site">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<?php if (is_front_page() ): ?>
		<div class="headerbar" id="headerbar">
		<div class="container">
			<div class="menu-here frontpage-header"> 
				<nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

					<?php if(is_active_sidebar('widget-1') ) { ?>
					<a class="logo_header" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Logo Header">
						<ul>
						<?php dynamic_sidebar('widget-1');?>
						</ul>
					</a> 
					<?php } ?>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<div class="menu-m">
						<span class="menu-global menu-top"></span>
						<span class="menu-global menu-middle"></span>
						<span class="menu-global menu-bottom"></span>
					</div>
					</button>
					
					<?php wp_nav_menu(
						array(
						'theme_location'    => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'navbar-nav',
						'container_class'  => 'collapse navbar-collapse main-nav-toggle',
						'container_id'    => 'navbarNav',
						)
						); 
					?>	
					<div class="new"></div>
				</nav>
			</div>
		</div>
		</div>
		<?php else: ?>
		<!-- other pages - different header -->
		<div class="headerbar different-header" id="headerbar">
		<div class="container">
			<div class="menu-here frontpage-header"> 
				<nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

					<?php if(is_active_sidebar('widget-1') ) { ?>
					<a class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
						<?php dynamic_sidebar('widget-1');?>
					</a> 
					<?php } ?>
						
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<div class="menu-m">
						<span class="menu-global menu-top"></span>
						<span class="menu-global menu-middle"></span>
						<span class="menu-global menu-bottom"></span>
					</div>
					</button>
					
					<?php wp_nav_menu(
						array(
						'theme_location'    => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'navbar-nav',
						'container_class'  => 'collapse navbar-collapse main-nav-toggle',
						'container_id'    => 'navbarNav',
						)
						); 
					?>	
				</nav>
			</div>
		</div>
		</div>
		<?php endif;?>
	</header><!-- #masthead -->
