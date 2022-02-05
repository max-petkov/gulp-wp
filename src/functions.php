<?php
function styles_scripts_mcc() {
    wp_enqueue_style( "main-style", get_template_directory_uri() . "./assets/css/main.bundle.css", array(), "1.0", false);
    wp_enqueue_script( "main-script", get_template_directory_uri() . "./assets/js/main.bundle.js", array(), "1.0", true );
}
add_action( "wp_enqueue_scripts", "styles_scripts_mcc" );

function navigations_mcc() {
    register_nav_menu("headerNavigation", "Header Navigation");
    register_nav_menu("footerNavigation", "Footer Navigation");
}

add_action("after_setup_theme", "navigations_mcc");

function post_types_mcc() {
    register_post_type( "hero-slider", array(
        "public" => true, 
        "labels" => array(
            "name" => "Hero Slider",
            "add_new_item" => "New Slide",
            "edit_item" => "Edit Slide"
        ),
        "menu_icon" => "dashicons-cover-image",
        "supports" => array("title", "page-attributes"),
    ));
    register_post_type("testimonial", array(
        "public" => true,
        "labels" => array(
            "name" => "Testimonials",
            "add_new_item" => "New Testimonial",
            "edit_item" => "Edit Testimonial"
        ),
        "menu_icon" => "dashicons-testimonial",
        "supports" => array("title")
    ));
}

add_action("init", "post_types_mcc");