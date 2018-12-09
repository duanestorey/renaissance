<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="header wrap">
				<section id="blog-information">
					<div class="name"><a href="<?php home_url(); ?>"><?php bloginfo( 'name' ); ?></a></div>
					<div class="desc"><?php bloginfo( 'description' ); ?></div>
				</section>
			</div>
		</header>

		<section id="main-content">
			<div class="main wrap">