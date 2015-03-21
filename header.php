<?php setlocale(LC_ALL, get_locale().'.'.get_bloginfo('charset')); ?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>

	<!-- Meta -->
	<meta charset="<?php bloginfo('charset'); ?>"
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Michael R.">	
	<meta name="description" content="In MiRo's Truckstop findest du Truck Bilder, speziell Büssing und MAN TGA und TGX / TGS Bilder.">
	<meta name="keywords" content="Miro's,Truckstop, MiRo, Rosensturm, Trucks,Truck Bilder,Truck Fotos,Lkw Bilder,Lkw Fotos,Büssing,MAN,Büssing BS 16,Büssing BS 22,Büssing 12000,Büssing 12000 U,Büssing Comodore,Commodore,Büssing LU11,Büssing 8000,Büssing Hauber,Büssing Busse,MAN TGA,MAN Büssing,Fotos von Büssing,Fotos von MAN TGA,MAN TGX, MAN TGX V8, MAN TGS, Herpa, Hamburg Süd, Büssing BS 16 und BS 22, Wiking Büssing, Roskopf Büssing, Container Hamburg Süd, Container, MAN-Büssing, Büssing Unterflur, Unterflur, Reederei Hamburg Süd, Büssing Modelle, 1:87 Modelle, 1:87, MAN Modelle, Roskopf, Roskopf Modelle, MAN F8, Roskopf/Herpa,Wiking, 6 und 8, 6 und 8 meter Hängerzüge, Angermayr, Büssing-Treffen 2009, Büssingtreffen, Büssing Treffen 2009, Buessing-Treffen 2009">	

	<!-- Title -->
	<title><?php wp_title(''); ?></title>

	<!-- Link -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="MiRo's Truckstop - News" href="/feed/">

	<?php wp_head(); ?>
	
	<?php if (get_query_var('mtView') === 'bilder/galerie') { ?>
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
				<div id="social_media"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmiros.truckstop.buessing&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=20" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
			</div>
			<?php wp_nav_menu(array(
				'theme_location' => 'main'
			)); ?>
			
		</header>
		
	<!-- Begin content_container -->
	<div id="content_container">