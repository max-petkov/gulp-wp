<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php the_title();?></title>
</head>
<body>
    <nav class="nav">
        <div class="container">
        <div class="nav__logo">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="mcc-climatisation-logo">
        </div>
        <?php wp_nav_menu(array(
            "theme_location" => "headerNavigation",
            "container" => "ul",
            "menu_class" => "nav__list",
            "add_li_class" => "nav__items"
            )); ?>
        <a class="nav__cta" href="tel:514 574-5181">
            <span>have any questions?</span>
            <span>514 574-5181</span>
        </a>
        </div>
    </nav>
   