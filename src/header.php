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
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
                        class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                        </path>
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