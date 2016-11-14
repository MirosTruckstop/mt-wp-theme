<?php
if (defined('MT_DIR')) {
	require_once(MT_DIR . '/src/front-end/view/Common.php');
	$viewType = get_query_var('mtView');
	$id = intval(get_query_var('mtId'));
	switch ($viewType) {
		case 'bilder/galerie':
			require_once(MT_DIR.'/src/front-end/view/gallery/Gallery.php');
			require_once(MT_DIR.'/src/front-end/view/gallery/StaticGallery.php');
			$view = new MT_View_StaticGallery($id, get_query_var('mtPage', 1), get_query_var('mtNum', 10), get_query_var('mtSort', 'date'));
			break;
		case 'bilder/tag':
			require_once(MT_DIR.'/src/front-end/view/gallery/Gallery.php');
			require_once(MT_DIR.'/src/front-end/view/gallery/TagGallery.php');
			$view = new MT_View_TagGallery(get_query_var('mtTag'));
			break;
		case 'bilder/kategorie':
			require_once(MT_DIR.'/src/front-end/view/Category.php');
			$view = new MT_View_Category($id);
			break;
		case 'fotograf':
			require_once(MT_DIR.'/src/front-end/view/Photographer.php');
			$view = new MT_View_Photographer($id);
			break;
		default:
			header('HTTP/1.0 404 Not Found');
	}
} else {
	echo 'Constant MT_DIR is undefined.';
}

get_header();

while (have_posts()) : the_post(); ?>

	<article>
		<?php mtTheme_the_breadcrumb(); ?>
		<h1><?php !is_front_page() ? the_title() : ''; ?></h1>
		<?php the_content(); ?>
	</article>

<?php endwhile;

get_footer();