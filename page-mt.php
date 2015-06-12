<?php
if (defined('MT_DIR')) {
	try {
		require_once(MT_DIR . '/public/view/Common.php');		
		$viewType = get_query_var('mtView');
		$id = intval(get_query_var('mtId'));
		switch ($viewType) {
			case 'bilder/galerie':
				require_once(MT_DIR.'/public/view/gallery/Gallery.php');
				require_once(MT_DIR.'/public/view/gallery/StaticGallery.php');		
				$view = new MT_View_StaticGallery($id, get_query_var('mtPage', 1), get_query_var('mtNum', 10), get_query_var('mtSort', 'date'));
				break;
			case 'bilder/tag':
				require_once(MT_DIR.'/public/view/gallery/Gallery.php');
				require_once(MT_DIR.'/public/view/gallery/TagGallery.php');		
				$view = new MT_View_TagGallery(get_query_var('mtTag'));
				break;				
			case 'bilder/kategorie':
				require_once(MT_DIR.'/public/view/Category.php');
				$view = new MT_View_Category($id);
				break;
			case 'fotograf':
				require_once(MT_DIR.'/public/view/Photographer.php');		
				$view = new MT_View_Photographer($id);
				break;
			default:
				header("HTTP/1.0 404 Not Found");
				throw new Exception(__('Unkown viewType', 'mtTheme'));
		}
	} catch (Exception $e) {
		require_once(MT_DIR . '/public/view/Error.php');
		$view = new MT_View_Error($e->getMessage());
	}
} else {
	echo 'Constant MT_DIR is undefined.';
}
?>

<?php get_header(); ?>
	<article>
		<?php $view->outputBreadcrumb(); ?>
		<h1><?php $view->outputTitle(); ?></h1>
		<?php $view->outputContent(); ?>
	</article>
<?php get_footer(); ?>