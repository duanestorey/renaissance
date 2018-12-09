<?php get_header(); ?>

<?php
	if ( have_posts() ) { 
		while ( have_posts() ) {
			the_post();

			if ( is_home() || is_archive() || is_category() || is_tag() || is_tax() ) {
				get_template_part( 'template-parts/content-header', 'archive' );
				get_template_part( 'template-parts/content-body', 'archive' );
			} else {
				get_template_part( 'template-parts/content-header', 'single' );
				get_template_part( 'template-parts/content-body', 'single' );	
			}

			get_template_part( 'template-parts/content-footer', 'single' );
		}
	} else {
		// page not found
		get_template_part( 'template-parts/404', 'index' );
	}
?>

<?php get_footer(); ?>