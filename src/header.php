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
        <nav class="nav">
            <div class="container">
                <div class="nav__logo">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"
                        alt="mcc-climatisation-logo">
                </div>
                <div class="nav__icon-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
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