<?php
function mcc_climatisation_styles_scripts() {
    wp_enqueue_style( "style", get_template_directory_uri() . "./assets/css/main.css", array(), "1.0", false);
}
add_action( "wp_enqueue_scripts", "mcc_climatisation_styles_scripts" );

function mcc_climatisation_navigations() {
    register_nav_menu("headerNavigation", "Header Navigation");
    register_nav_menu("footerNavigation", "Footer Navigation");
}

add_action("after_setup_theme", "mcc_climatisation_navigations");