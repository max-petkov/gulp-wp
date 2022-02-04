<?php
function styles_scripts_mcc() {
    wp_enqueue_style( "main-style", get_template_directory_uri() . "./assets/css/main.css", array(), "1.0", false);
    wp_enqueue_script( "main-script", get_template_directory_uri() . "./assets/js/main.js", array(), "1.0", true );
}
add_action( "wp_enqueue_scripts", "styles_scripts_mcc" );

function navigations_mcc() {
    register_nav_menu("headerNavigation", "Header Navigation");
    register_nav_menu("footerNavigation", "Footer Navigation");
}

add_action("after_setup_theme", "navigations_mcc");