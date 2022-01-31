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
        <div class="nav__logo">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/01/logo.png" alt="mcc-climatisation-logo">
        </div>
        <?php wp_nav_menu(array("theme_location" => "headerNavigation")); ?>
        <a class="nav__cta" href="tel:514 574-5181">
            <span>have any questions?</span>
            <span>514 574-5181</span>
        </a>
    </nav>
   