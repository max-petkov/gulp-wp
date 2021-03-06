    <footer class="footer">
        <div class="container">
            <div class="footer__logo">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"
                        alt="mcc-climatisation-logo">
                </a>
                <div class="footer__icons">
                    <a href="mailto:monchoixclimat@gmail.com">
                        <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/email.png"
                            alt="mcc-phone-call">
                    </a>
                    <a href="tel:514 574-5181">
                        <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/phone-message.png"
                            alt="mcc-phone-call">
                    </a>
                </div>
            </div>
            <?php wp_nav_menu(array(
                "theme_location" => "footerNavigation",
                "container" => "ul",
                "menu_class" => "footer__nav-list"
            ));?>
        </div>
    </footer>
    </div>
    <?php wp_footer();?>
    </body>

    </html>