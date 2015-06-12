<?php
get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
	<?php endwhile;
	
else:
	?>
	<article>
		<h1><?php _e('Error', MT_THEME_NAME); ?></h1>
		<p><?php _e('Page does not exists', MT_THEME_NAME); ?></p>
	</article>
	<?php

endif;

get_footer();
?>