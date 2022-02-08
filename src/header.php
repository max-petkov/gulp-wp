<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <title><?php the_title();?></title>
</head>

<body>
    <div>
        <nav class="nav nav--absolute">
            <div class="container">
                <div class="nav__logo">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"
                        alt="mcc-climatisation-logo">
                </div>
                <div class="nav__icon-menu">
                    <div class="bar bar--1"></div>
                    <div class="bar bar--2"></div>
                </div>
                <?php wp_nav_menu(array(
                "theme_location" => "headerNavigation",
                "container" => "ul",
                "menu_class" => "nav__list",
                )); ?>
                <a class="nav__cta" href="tel:514 574-5181">
                    <span>have any questions?</span>
                    <span>514 574-5181</span>
                </a>
            </div>
        </nav>