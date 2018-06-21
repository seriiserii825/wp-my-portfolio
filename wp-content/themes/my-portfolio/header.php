<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<!--<link href="templatemo_style.css" rel="stylesheet" type="text/css" />-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="templatemo_body_wrapper">
	<div id="templatemo_wrapper">

		<div id="templatemo_header">

			<div id="site_title">
				<h1>
                    <?php the_custom_logo();?>
				</h1>
			</div>

			<div id="search_box">
				<form action="#" method="get">
					<input type="text" value="Search" name="s" size="10" id="searchfield" title="searchfield"
						   onfocus="clearText(this)" onblur="clearText(this)"/>
				</form>
			</div>

		</div> <!-- end of templatemo header -->

		<div id="templatemo_menu">
            <?php wp_nav_menu([
            	'theme_location' => 'main-menu',
				'container' => '',
				'menu_class' => ''
			]);?>
		</div> <!-- end of templatemo_menu -->
