<?php


get_header();

while (have_posts()) : the_post(); ?>

	<article>
		<?php mtTheme_the_breadcrumb(); ?>
		<h1><?php !is_front_page() ? the_title() : ''; ?></h1>
		<?php the_content(); ?>
		<?php comments_template(); ?>
	</article>

<?php endwhile;

get_footer();