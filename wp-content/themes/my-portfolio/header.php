<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="templatemo_body_wrapper">
	<div class="container">

		<div id="templatemo_header" class="container">

			<div id="site_title">

                <?php the_custom_logo(); ?>

			</div>

			<div class="search_box">
				<form action="#" method="get">
					<input type="text" value="Поиск" name="s" size="10" id="searchfield" title="searchfield"
						   onfocus="clearText(this)" onblur="clearText(this)"/>
				</form>
			</div>

		</div> <!-- end of templatemo header -->

		<div id="templatemo_menu" class="container">
			<div class="navbar">
				<span class="menu">menu</span>
				<div class="close-menu" id="js-close-menu">
					<span></span><span></span><span></span>
				</div>
			</div>

            <?php wp_nav_menu([
                'theme_location' => 'main-menu',
                'container' => '',
                'menu_class' => 'main-menu'
            ]); ?>
		</div> <!-- end of templatemo_menu -->
