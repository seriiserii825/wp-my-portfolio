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

		<div class="header-main">

			<div class="site_title">
                <?php the_custom_logo(); ?>
			</div>

			<div class="search_box">
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
                'menu_class' => 'main-menu sm sm-blue'
            ]); ?>
		</div> <!-- end of templatemo_menu -->
