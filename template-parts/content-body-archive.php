	<article class="post archive">
		<?php if ( has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail( 'renaissance-archive' ); ?>
		<?php } ?>	
		<?php the_excerpt(); ?>
	</article>