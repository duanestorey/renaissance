<?php if ( has_post_thumbnail() ) { ?>
	<div class="featured"><?php the_post_thumbnail(); ?></div>
<?php } ?>	

<article class="single">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>