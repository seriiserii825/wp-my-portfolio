<?php 
/**
 * Template Name: Главная
 */
?>

<?php get_header(); ?>
    <main class="cd-main-content">

        <?php

            $home_background_image_1_id = carbon_get_post_meta(get_the_ID(), 'home_background_image_1');
            $home_background_image_1_url = wp_get_attachment_image_url( $home_background_image_1_id, 'full' );

            $home_background_image_2_id = carbon_get_post_meta(get_the_ID(), 'home_background_image_2');
            $home_background_image_2_url = wp_get_attachment_image_url( $home_background_image_2_id, 'full' );

            $home_background_image_3_id = carbon_get_post_meta(get_the_ID(), 'home_background_image_3');
            $home_background_image_3_url = wp_get_attachment_image_url( $home_background_image_3_id, 'full' );

            $home_background_image_4_id = carbon_get_post_meta(get_the_ID(), 'home_background_image_4');
            $home_background_image_4_url = wp_get_attachment_image_url( $home_background_image_4_id, 'full' );

            $home_background_image_5_id = carbon_get_post_meta(get_the_ID(), 'home_background_image_5');
            $home_background_image_5_url = wp_get_attachment_image_url( $home_background_image_5_id, 'full' );

        ?>

        <section class="cd-section visible">
            <div style="background-image: url('<?php echo $home_background_image_1_url; ?>')">        
                <div class="hero-top">                          
                    <div class="container"> 
                        <div class="twelve columns">

                            <div id="owl-text-home" class="owl-carousel owl-theme">
                                <div class="item"><h2><?php echo carbon_get_post_meta(get_the_ID(), 'home_slider_text_1'); ?></h2></div>
                                <div class="item"><h2><?php echo carbon_get_post_meta(get_the_ID(), 'home_slider_text_2'); ?></h2></div>
                                <div class="item"><h2><?php echo carbon_get_post_meta(get_the_ID(), 'home_slider_text_3'); ?></h2></div>

                            </div>

                            <p>build great brands</p>
                            <div class="social-top">
                                <ul class="list-social">
                                    <li class="icon-soc tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                        <a href="#">&#xf099;</a>
                                    </li>
                                    <li class="icon-soc tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                        <a href="#">&#xf09a;</a>
                                    </li>
                                    <li class="icon-soc tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                        <a href="#">&#xf09b;</a>
                                    </li>
                                    <li class="icon-soc tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'>
                                        <a href="#">&#xf0d5;</a>
                                    </li>
                                </ul>   
                            </div>  
                        </div>  
                    </div>      
                </div>
            </div>
        </section>

        <section class="cd-section">
            <div style="background-image: url('<?php echo $home_background_image_2_url; ?>')">       
                <div class="hero-top">                          
                    <div class="container"> 
                        <div class="twelve columns">
                            <h2>Portfolio</h2>  
                            <p><span>Digital solutions inspire</span></p>
                            <a href="work.html"><div class="button button--moema button--text-thick button--text-upper button--size-s">discover</div></a>
                        </div>  
                    </div>      
                </div>
            </div>
        </section>

        <section class="cd-section">
            <div style="background-image: url('<?php echo $home_background_image_3_url; ?>')">   
                <div class="hero-top">                          
                    <div class="container"> 
                        <div class="twelve columns">
                            <h2>About Us</h2>   
                            <p><span>INSPIRED BY PURPOSE</span></p>
                            <a href="about.html"><div class="button button--moema button--text-thick button--text-upper button--size-s">find out more</div></a>
                        </div>  
                    </div>      
                </div>
            </div>
        </section>

        <section class="cd-section">
            <div style="background-image: url('<?php echo $home_background_image_4_url; ?>')">
                <div class="hero-top">                          
                    <div class="container"> 
                        <div class="twelve columns">
                            <h2>blog</h2>   
                            <p><span>latest news</span></p>
                            <a href="blog.html"><div class="button button--moema button--text-thick button--text-upper button--size-s">read articles</div></a>
                        </div>  
                    </div>      
                </div>
            </div>
        </section>

        <section class="cd-section">
            <div style="background-image: url('<?php echo $home_background_image_5_url; ?>')">
                <div class="hero-top">                          
                    <div class="container"> 
                        <div class="twelve columns">
                            <h2>contact</h2>    
                            <p><span>get in touch</span></p>
                            <a href="contact.html"><div class="button button--moema button--text-thick button--text-upper button--size-s">find us</div></a>
                        </div>  
                    </div>      
                </div>
            </div>
        </section>

        <nav>
            <ul class="cd-vertical-nav">
                <li><a href="#0" class="cd-prev inactive">Next</a></li>
                <li><a href="#0" class="cd-next">Prev</a></li>
            </ul>
        </nav> <!-- .cd-vertical-nav -->
    </main>
<?php get_footer(); ?>