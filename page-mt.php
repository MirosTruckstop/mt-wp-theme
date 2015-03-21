<?php
get_header();
?>
	<article>
		<?php
		$viewType = get_query_var('mtView');
		$id = intval(get_query_var('mtId'));
		if (defined('MT_DIR') && !empty($id)) {
			switch ($viewType) {
				case 'bilder/galerie':
					require_once(MT_DIR . '/public/view/Gallery.php');		
					$view = new MT_View_Gallery($id);
					break;
				case 'bilder/kategorie':
					require_once(MT_DIR . '/public/view/Category.php');
					$view = new MT_View_Category($id);
					break;
				case 'fotograf':
					require_once(MT_DIR . '/public/view/Photographer.php');		
					$view = new MT_View_Photographer($id);
					break;
				default:
					break;
			}
			if (isset($view)) {
				$view->outputContent();				
			}
		} else {
			echo 'Constant MT_DIR is undefined.';
		}
		?>
	</article>
<?php
get_footer();
?>