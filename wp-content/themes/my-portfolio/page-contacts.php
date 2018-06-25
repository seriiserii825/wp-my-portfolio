<?php
/**
 * Template Name: Контакты
 */
    get_header();
?>

        <div class="container contacts">

            <div class="contacts-content">
                <h4>Мои данные</h4>

                <ul>
                    <li>Телефон: <a href="phone: +37360562168">+37360562168</a></li>
                    <li>Skype: seriiserii825</li>
                    <li>Telegram: Burduja Serghei</li>
                    <li>Почта: <a href="mailto: seriiburduja@gmail.com">seriiburduja@gmail.com</a></li>
                </ul>
            </div>

            <div class="contacts-form">
                <div id="contact_form">

                    <h4>Quick Contact Form</h4>

                    <div class="contacts__form">
                        <?php the_post(); the_content();?>
					</div>

                </div>
            </div>

            <div class="cleaner"></div>
        </div> <!-- end of main -->
        <div id="templatemo_main_bottom"></div>
        <div class="cleaner"></div>
    </div> <!-- end of templatemo wrapper -->
</div> <!-- end of templatemo body wrapper -->

<?php get_footer();?>


