<?php
setlocale(LC_ALL, get_locale().'.'.get_bloginfo('charset'));
?><!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>

	<!-- Meta -->
	<meta charset="<?php bloginfo('charset'); ?>"
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="<?php echo get_option('author'); ?>">	
	<meta name="description" content="<?php echo get_option('description'); ?>">
	<meta name="keywords" content="<?php echo get_option('keywords'); ?>">	

	<!-- Title -->
	<title><?php global $view; ($view) ? $view->outputTitle() : the_title(); ?> | <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

	<!-- Link -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />

	<?php wp_head(); ?>	

	<?php if (method_exists($view, 'checkWidescreen') && $view->checkWidescreen()) { ?>
	<style type="text/css">
	header {
		margin: 0 0 0 0px;
	}
	#content_container {
		margin: 0 0 0 0px;
	}
	#navigation {
		margin-left: 0px;
	}
	#column_left {
		padding-left: 10px;
	}
	article {
		width: 750px;
	}
	</style>	
	<?php } ?>	

</head>

<body <?php body_class(); ?>>
	
	<!-- Begin Container -->
	<div id="container">
	
		<header>

			<div id="logo">
				<div id="social_media">
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmiros.truckstop.buessing&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=20" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				</div><!-- .social_media -->
			</div><!-- .logo -->
			<?php wp_nav_menu(array(
				'theme_location' => 'primary'
			)); ?>
			
		</header>
		
		<!-- Begin content_container -->
		<div id="content_container">