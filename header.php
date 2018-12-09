<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="header wrap">
				<section id="blog-information" class="float-left">
					<div class="name"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></div>
					<div class="desc"><?php bloginfo( 'description' ); ?></div>
				</section>
				<nav id="header-menu" class="float-right">
					<?php 
						wp_nav_menu( 
							array( 'menu' => 'header_menu' ) 
						); 
					?>
				</nav>
				<div class="clear"></div>
			</div>
		</header>

		<section id="main-content">
			<div class="main wrap">