<?php get_header(); ?>

<section class="hero">
    <div class="hero-container container">
        <div class="hero-banner">
            <h2 class="hero-banner__title">MCC Climatisation Inc.</h2>
            <p class="hero-banner__body-text">
                Offers you the full range of Air Conditioning and Heating services. Operating under license from the RBQ
                and with personnel certified according to CCQ standards.
                <br>
                <br>
                Located in Laval, we serve the Greater Montreal
                area - Laval, North Shore, Longueuil, South Shore.
            </p>
            <button class="btn btn-primary-outline">hvac solutions</button>
        </div>
        <div class="hero-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php  
                    $heroSlider = new WP_Query(array(
                        "post_type" => "hero-slider",
                        "orderby" => "menu_order",
                        "order" => "ASC"
                    ));
                    while($heroSlider->have_posts()): $heroSlider->the_post();?>
                    <li class="splide__slide hero__slide" data-splide-interval="4000">
                        <img src="<?php the_field('insert_logo') ?>">
                        <img src="<?php the_field('insert_image') ?>">
                    </li>
                    <?php endwhile;?>
                </ul>
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>