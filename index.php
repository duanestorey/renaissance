<?php get_header(); ?>

<?php
	if ( have_posts() ) { 
		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', 'header' );

			get_template_part( 'template-parts/content', 'body' );

			get_template_part( 'template-parts/content', 'footer' );
		}
	} else {
		// page not found
		get_template_part( 'template-parts/404', 'index' );
	}
?>

<?php get_footer(); ?>