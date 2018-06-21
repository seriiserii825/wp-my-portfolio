<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
    <!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
    <head>

    <!-- Basic Page Needs
      ================================================== -->
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="author" content="">

    <!-- Mobile Specific Metas
      ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font
      ================================================== -->
      <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>


  </head>
  <!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
  <body <?php body_class( 'royal_loader' ); ?> data-hijacking="off" data-animation="scaleDown"> 

    <!-- Primary Page Layout
        ================================================== -->

        
    <!-- Nav and Logo
        ================================================== -->

        <header class="cd-header">

            <div class="container">     
                <div class="twelve columns">    
                    <div class="logo-wrap">
                        <?php the_custom_logo(); ?>
                    </div>
                    <a class="cd-primary-nav-trigger" href="#0">
                        <span class="cd-menu-text"></span><span class="cd-menu-icon"></span>
                    </a>
                </div>  
            </div>      
            <?php wp_head(); ?>
        </header>

        <nav>
            <div class="cd-primary-nav">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
                    'container'       => '',
                    'menu_class'      => 'cd-scndr-nav',
                    'echo'            => true,
                    'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                ) ); ?>
                <!-- <ul class="cd-scndr-nav">
                    <li class="cd-label"><a href="#" class="curent-nav-color">home</a></li>
                    
                    <li class="cd-label"><a href="work.html">Portfolio</a></li>
                    
                    <li class="cd-label"><a href="about.html">About us</a></li>
                    
                    <li class="cd-label"><a href="blog.html">Blog</a></li>
                    
                    <li class="cd-label"><a href="contact.html">Contact</a></li>
                </ul>    -->
                
                <div class="social-nav">
                    <ul class="list-social-nav">
                        <li class="icon-soc-nav tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf099;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf09b;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf0d5;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="YouTube"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf16a;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="Vimeo"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf194;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="Tumblr"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf174;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf230;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="Skype"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf17e;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="soundcloud"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf1be;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="pinterest"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf231;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="linkedin"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf08c;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="lastfm"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf202;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="dropbox"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf16b;</a>
                        </li>
                        <li class="icon-soc-nav tipped" data-title="behance"  data-tipper-options='{"direction":"top","follow":"true"}'>
                            <a href="#">&#xf1b4;</a>
                        </li>
                    </ul>   
                </div>

            </div>
        </nav>