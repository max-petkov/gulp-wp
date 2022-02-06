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
                        <img src="<?php the_field('insert_logo'); ?>" loading="lazy">
                        <img src="<?php the_field('insert_image'); ?>" loading="lazy">
                    </li>
                    <?php endwhile;?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container services__container">
        <div class="section__title">
            <p class="body-leading-regular">services</p>
            <h2>Full range of <span>Services</span></h2>
        </div>
        <div class="services__cards">
            <div class="card">
                <div class="card__icon">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/Icon _ Installation.png" alt="">
                </div>
                <p class="card__title body-leading">Installation</p>
                <p class="card__body">Installation services of air conditioning, heating, ventilation and refrigeration
                    equipment</p>
            </div>
            <div class="card">
                <div class="card__icon">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/maintenance.png" alt="">
                </div>
                <p class="card__title body-leading">Maintenance</p>
                <p class="card__body">Our maintenance contracts adapted to your needs and provide you with the peace of
                    mind and comfort you desire!
                </p>
            </div>
            <div class="card">
                <div class="card__icon">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/settings.png" alt="">
                </div>
                <p class="card__title body-leading">Repairs</p>
                <p class="card__body">Repairs of air conditioning and heating equipment: Heat pumps, Central Air
                    Conditioning</p>
            </div>
            <div class="card">
                <div class="card__icon">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/price-tag 1.png" alt="">
                </div>
                <p class="card__title body-leading">Sales</p>
                <p class="card__body">Variety of brands and models offered, everything to ensure you have made the best
                    climate choice!</p>
            </div>
            <div class="decorator-1">
                <svg width="128" height="176" viewBox="0 0 128 176" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4 8C6.20914 8 8 6.20914 8 4C8 1.79086 6.20914 0 4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8Z"
                        fill="#639BEF" />
                    <path
                        d="M4 32C6.20914 32 8 30.2091 8 28C8 25.7909 6.20914 24 4 24C1.79086 24 0 25.7909 0 28C0 30.2091 1.79086 32 4 32Z"
                        fill="#639BEF" />
                    <path
                        d="M8 52C8 54.2091 6.20914 56 4 56C1.79086 56 0 54.2091 0 52C0 49.7909 1.79086 48 4 48C6.20914 48 8 49.7909 8 52Z"
                        fill="#639BEF" />
                    <path
                        d="M4 80C6.20914 80 8 78.2091 8 76C8 73.7909 6.20914 72 4 72C1.79086 72 0 73.7909 0 76C0 78.2091 1.79086 80 4 80Z"
                        fill="#639BEF" />
                    <path
                        d="M8 100C8 102.209 6.20914 104 4 104C1.79086 104 0 102.209 0 100C0 97.7909 1.79086 96 4 96C6.20914 96 8 97.7909 8 100Z"
                        fill="#639BEF" />
                    <path
                        d="M4 128C6.20914 128 8 126.209 8 124C8 121.791 6.20914 120 4 120C1.79086 120 0 121.791 0 124C0 126.209 1.79086 128 4 128Z"
                        fill="#639BEF" />
                    <path
                        d="M8 148C8 150.209 6.20914 152 4 152C1.79086 152 0 150.209 0 148C0 145.791 1.79086 144 4 144C6.20914 144 8 145.791 8 148Z"
                        fill="#639BEF" />
                    <path
                        d="M4 176C6.20914 176 8 174.209 8 172C8 169.791 6.20914 168 4 168C1.79086 168 0 169.791 0 172C0 174.209 1.79086 176 4 176Z"
                        fill="#639BEF" />
                    <path
                        d="M56 4C56 6.20914 54.2091 8 52 8C49.7909 8 48 6.20914 48 4C48 1.79086 49.7909 0 52 0C54.2091 0 56 1.79086 56 4Z"
                        fill="#639BEF" />
                    <path
                        d="M52 32C54.2091 32 56 30.2091 56 28C56 25.7909 54.2091 24 52 24C49.7909 24 48 25.7909 48 28C48 30.2091 49.7909 32 52 32Z"
                        fill="#639BEF" />
                    <path
                        d="M56 52C56 54.2091 54.2091 56 52 56C49.7909 56 48 54.2091 48 52C48 49.7909 49.7909 48 52 48C54.2091 48 56 49.7909 56 52Z"
                        fill="#639BEF" />
                    <path
                        d="M52 80C54.2091 80 56 78.2091 56 76C56 73.7909 54.2091 72 52 72C49.7909 72 48 73.7909 48 76C48 78.2091 49.7909 80 52 80Z"
                        fill="#639BEF" />
                    <path
                        d="M56 100C56 102.209 54.2091 104 52 104C49.7909 104 48 102.209 48 100C48 97.7909 49.7909 96 52 96C54.2091 96 56 97.7909 56 100Z"
                        fill="#639BEF" />
                    <path
                        d="M52 128C54.2091 128 56 126.209 56 124C56 121.791 54.2091 120 52 120C49.7909 120 48 121.791 48 124C48 126.209 49.7909 128 52 128Z"
                        fill="#639BEF" />
                    <path
                        d="M56 148C56 150.209 54.2091 152 52 152C49.7909 152 48 150.209 48 148C48 145.791 49.7909 144 52 144C54.2091 144 56 145.791 56 148Z"
                        fill="#639BEF" />
                    <path
                        d="M52 176C54.2091 176 56 174.209 56 172C56 169.791 54.2091 168 52 168C49.7909 168 48 169.791 48 172C48 174.209 49.7909 176 52 176Z"
                        fill="#639BEF" />
                    <path
                        d="M104 4C104 6.20914 102.209 8 100 8C97.7909 8 96 6.20914 96 4C96 1.79086 97.7909 0 100 0C102.209 0 104 1.79086 104 4Z"
                        fill="#639BEF" />
                    <path
                        d="M100 32C102.209 32 104 30.2091 104 28C104 25.7909 102.209 24 100 24C97.7909 24 96 25.7909 96 28C96 30.2091 97.7909 32 100 32Z"
                        fill="#639BEF" />
                    <path
                        d="M104 52C104 54.2091 102.209 56 100 56C97.7909 56 96 54.2091 96 52C96 49.7909 97.7909 48 100 48C102.209 48 104 49.7909 104 52Z"
                        fill="#639BEF" />
                    <path
                        d="M100 80C102.209 80 104 78.2091 104 76C104 73.7909 102.209 72 100 72C97.7909 72 96 73.7909 96 76C96 78.2091 97.7909 80 100 80Z"
                        fill="#639BEF" />
                    <path
                        d="M104 100C104 102.209 102.209 104 100 104C97.7909 104 96 102.209 96 100C96 97.7909 97.7909 96 100 96C102.209 96 104 97.7909 104 100Z"
                        fill="#639BEF" />
                    <path
                        d="M100 128C102.209 128 104 126.209 104 124C104 121.791 102.209 120 100 120C97.7909 120 96 121.791 96 124C96 126.209 97.7909 128 100 128Z"
                        fill="#639BEF" />
                    <path
                        d="M104 148C104 150.209 102.209 152 100 152C97.7909 152 96 150.209 96 148C96 145.791 97.7909 144 100 144C102.209 144 104 145.791 104 148Z"
                        fill="#639BEF" />
                    <path
                        d="M100 176C102.209 176 104 174.209 104 172C104 169.791 102.209 168 100 168C97.7909 168 96 169.791 96 172C96 174.209 97.7909 176 100 176Z"
                        fill="#639BEF" />
                    <path
                        d="M32 4C32 6.20914 30.2091 8 28 8C25.7909 8 24 6.20914 24 4C24 1.79086 25.7909 0 28 0C30.2091 0 32 1.79086 32 4Z"
                        fill="#639BEF" />
                    <path
                        d="M28 32C30.2091 32 32 30.2091 32 28C32 25.7909 30.2091 24 28 24C25.7909 24 24 25.7909 24 28C24 30.2091 25.7909 32 28 32Z"
                        fill="#639BEF" />
                    <path
                        d="M32 52C32 54.2091 30.2091 56 28 56C25.7909 56 24 54.2091 24 52C24 49.7909 25.7909 48 28 48C30.2091 48 32 49.7909 32 52Z"
                        fill="#639BEF" />
                    <path
                        d="M28 80C30.2091 80 32 78.2091 32 76C32 73.7909 30.2091 72 28 72C25.7909 72 24 73.7909 24 76C24 78.2091 25.7909 80 28 80Z"
                        fill="#639BEF" />
                    <path
                        d="M32 100C32 102.209 30.2091 104 28 104C25.7909 104 24 102.209 24 100C24 97.7909 25.7909 96 28 96C30.2091 96 32 97.7909 32 100Z"
                        fill="#639BEF" />
                    <path
                        d="M28 128C30.2091 128 32 126.209 32 124C32 121.791 30.2091 120 28 120C25.7909 120 24 121.791 24 124C24 126.209 25.7909 128 28 128Z"
                        fill="#639BEF" />
                    <path
                        d="M32 148C32 150.209 30.2091 152 28 152C25.7909 152 24 150.209 24 148C24 145.791 25.7909 144 28 144C30.2091 144 32 145.791 32 148Z"
                        fill="#639BEF" />
                    <path
                        d="M28 176C30.2091 176 32 174.209 32 172C32 169.791 30.2091 168 28 168C25.7909 168 24 169.791 24 172C24 174.209 25.7909 176 28 176Z"
                        fill="#639BEF" />
                    <path
                        d="M80 4C80 6.20914 78.2091 8 76 8C73.7909 8 72 6.20914 72 4C72 1.79086 73.7909 0 76 0C78.2091 0 80 1.79086 80 4Z"
                        fill="#639BEF" />
                    <path
                        d="M76 32C78.2091 32 80 30.2091 80 28C80 25.7909 78.2091 24 76 24C73.7909 24 72 25.7909 72 28C72 30.2091 73.7909 32 76 32Z"
                        fill="#639BEF" />
                    <path
                        d="M80 52C80 54.2091 78.2091 56 76 56C73.7909 56 72 54.2091 72 52C72 49.7909 73.7909 48 76 48C78.2091 48 80 49.7909 80 52Z"
                        fill="#639BEF" />
                    <path
                        d="M76 80C78.2091 80 80 78.2091 80 76C80 73.7909 78.2091 72 76 72C73.7909 72 72 73.7909 72 76C72 78.2091 73.7909 80 76 80Z"
                        fill="#639BEF" />
                    <path
                        d="M80 100C80 102.209 78.2091 104 76 104C73.7909 104 72 102.209 72 100C72 97.7909 73.7909 96 76 96C78.2091 96 80 97.7909 80 100Z"
                        fill="#639BEF" />
                    <path
                        d="M76 128C78.2091 128 80 126.209 80 124C80 121.791 78.2091 120 76 120C73.7909 120 72 121.791 72 124C72 126.209 73.7909 128 76 128Z"
                        fill="#639BEF" />
                    <path
                        d="M80 148C80 150.209 78.2091 152 76 152C73.7909 152 72 150.209 72 148C72 145.791 73.7909 144 76 144C78.2091 144 80 145.791 80 148Z"
                        fill="#639BEF" />
                    <path
                        d="M76 176C78.2091 176 80 174.209 80 172C80 169.791 78.2091 168 76 168C73.7909 168 72 169.791 72 172C72 174.209 73.7909 176 76 176Z"
                        fill="#639BEF" />
                    <path
                        d="M128 4C128 6.20914 126.209 8 124 8C121.791 8 120 6.20914 120 4C120 1.79086 121.791 0 124 0C126.209 0 128 1.79086 128 4Z"
                        fill="#639BEF" />
                    <path
                        d="M124 32C126.209 32 128 30.2091 128 28C128 25.7909 126.209 24 124 24C121.791 24 120 25.7909 120 28C120 30.2091 121.791 32 124 32Z"
                        fill="#639BEF" />
                    <path
                        d="M128 52C128 54.2091 126.209 56 124 56C121.791 56 120 54.2091 120 52C120 49.7909 121.791 48 124 48C126.209 48 128 49.7909 128 52Z"
                        fill="#639BEF" />
                    <path
                        d="M124 80C126.209 80 128 78.2091 128 76C128 73.7909 126.209 72 124 72C121.791 72 120 73.7909 120 76C120 78.2091 121.791 80 124 80Z"
                        fill="#639BEF" />
                    <path
                        d="M128 100C128 102.209 126.209 104 124 104C121.791 104 120 102.209 120 100C120 97.7909 121.791 96 124 96C126.209 96 128 97.7909 128 100Z"
                        fill="#639BEF" />
                    <path
                        d="M124 128C126.209 128 128 126.209 128 124C128 121.791 126.209 120 124 120C121.791 120 120 121.791 120 124C120 126.209 121.791 128 124 128Z"
                        fill="#639BEF" />
                    <path
                        d="M128 148C128 150.209 126.209 152 124 152C121.791 152 120 150.209 120 148C120 145.791 121.791 144 124 144C126.209 144 128 145.791 128 148Z"
                        fill="#639BEF" />
                    <path
                        d="M124 176C126.209 176 128 174.209 128 172C128 169.791 126.209 168 124 168C121.791 168 120 169.791 120 172C120 174.209 121.791 176 124 176Z"
                        fill="#639BEF" />
                </svg>

            </div>
            <div class="decorator-2">
                <svg width="128" height="176" viewBox="0 0 128 176" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4 8C6.20914 8 8 6.20914 8 4C8 1.79086 6.20914 0 4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8Z"
                        fill="#639BEF" />
                    <path
                        d="M4 32C6.20914 32 8 30.2091 8 28C8 25.7909 6.20914 24 4 24C1.79086 24 0 25.7909 0 28C0 30.2091 1.79086 32 4 32Z"
                        fill="#639BEF" />
                    <path
                        d="M8 52C8 54.2091 6.20914 56 4 56C1.79086 56 0 54.2091 0 52C0 49.7909 1.79086 48 4 48C6.20914 48 8 49.7909 8 52Z"
                        fill="#639BEF" />
                    <path
                        d="M4 80C6.20914 80 8 78.2091 8 76C8 73.7909 6.20914 72 4 72C1.79086 72 0 73.7909 0 76C0 78.2091 1.79086 80 4 80Z"
                        fill="#639BEF" />
                    <path
                        d="M8 100C8 102.209 6.20914 104 4 104C1.79086 104 0 102.209 0 100C0 97.7909 1.79086 96 4 96C6.20914 96 8 97.7909 8 100Z"
                        fill="#639BEF" />
                    <path
                        d="M4 128C6.20914 128 8 126.209 8 124C8 121.791 6.20914 120 4 120C1.79086 120 0 121.791 0 124C0 126.209 1.79086 128 4 128Z"
                        fill="#639BEF" />
                    <path
                        d="M8 148C8 150.209 6.20914 152 4 152C1.79086 152 0 150.209 0 148C0 145.791 1.79086 144 4 144C6.20914 144 8 145.791 8 148Z"
                        fill="#639BEF" />
                    <path
                        d="M4 176C6.20914 176 8 174.209 8 172C8 169.791 6.20914 168 4 168C1.79086 168 0 169.791 0 172C0 174.209 1.79086 176 4 176Z"
                        fill="#639BEF" />
                    <path
                        d="M56 4C56 6.20914 54.2091 8 52 8C49.7909 8 48 6.20914 48 4C48 1.79086 49.7909 0 52 0C54.2091 0 56 1.79086 56 4Z"
                        fill="#639BEF" />
                    <path
                        d="M52 32C54.2091 32 56 30.2091 56 28C56 25.7909 54.2091 24 52 24C49.7909 24 48 25.7909 48 28C48 30.2091 49.7909 32 52 32Z"
                        fill="#639BEF" />
                    <path
                        d="M56 52C56 54.2091 54.2091 56 52 56C49.7909 56 48 54.2091 48 52C48 49.7909 49.7909 48 52 48C54.2091 48 56 49.7909 56 52Z"
                        fill="#639BEF" />
                    <path
                        d="M52 80C54.2091 80 56 78.2091 56 76C56 73.7909 54.2091 72 52 72C49.7909 72 48 73.7909 48 76C48 78.2091 49.7909 80 52 80Z"
                        fill="#639BEF" />
                    <path
                        d="M56 100C56 102.209 54.2091 104 52 104C49.7909 104 48 102.209 48 100C48 97.7909 49.7909 96 52 96C54.2091 96 56 97.7909 56 100Z"
                        fill="#639BEF" />
                    <path
                        d="M52 128C54.2091 128 56 126.209 56 124C56 121.791 54.2091 120 52 120C49.7909 120 48 121.791 48 124C48 126.209 49.7909 128 52 128Z"
                        fill="#639BEF" />
                    <path
                        d="M56 148C56 150.209 54.2091 152 52 152C49.7909 152 48 150.209 48 148C48 145.791 49.7909 144 52 144C54.2091 144 56 145.791 56 148Z"
                        fill="#639BEF" />
                    <path
                        d="M52 176C54.2091 176 56 174.209 56 172C56 169.791 54.2091 168 52 168C49.7909 168 48 169.791 48 172C48 174.209 49.7909 176 52 176Z"
                        fill="#639BEF" />
                    <path
                        d="M104 4C104 6.20914 102.209 8 100 8C97.7909 8 96 6.20914 96 4C96 1.79086 97.7909 0 100 0C102.209 0 104 1.79086 104 4Z"
                        fill="#639BEF" />
                    <path
                        d="M100 32C102.209 32 104 30.2091 104 28C104 25.7909 102.209 24 100 24C97.7909 24 96 25.7909 96 28C96 30.2091 97.7909 32 100 32Z"
                        fill="#639BEF" />
                    <path
                        d="M104 52C104 54.2091 102.209 56 100 56C97.7909 56 96 54.2091 96 52C96 49.7909 97.7909 48 100 48C102.209 48 104 49.7909 104 52Z"
                        fill="#639BEF" />
                    <path
                        d="M100 80C102.209 80 104 78.2091 104 76C104 73.7909 102.209 72 100 72C97.7909 72 96 73.7909 96 76C96 78.2091 97.7909 80 100 80Z"
                        fill="#639BEF" />
                    <path
                        d="M104 100C104 102.209 102.209 104 100 104C97.7909 104 96 102.209 96 100C96 97.7909 97.7909 96 100 96C102.209 96 104 97.7909 104 100Z"
                        fill="#639BEF" />
                    <path
                        d="M100 128C102.209 128 104 126.209 104 124C104 121.791 102.209 120 100 120C97.7909 120 96 121.791 96 124C96 126.209 97.7909 128 100 128Z"
                        fill="#639BEF" />
                    <path
                        d="M104 148C104 150.209 102.209 152 100 152C97.7909 152 96 150.209 96 148C96 145.791 97.7909 144 100 144C102.209 144 104 145.791 104 148Z"
                        fill="#639BEF" />
                    <path
                        d="M100 176C102.209 176 104 174.209 104 172C104 169.791 102.209 168 100 168C97.7909 168 96 169.791 96 172C96 174.209 97.7909 176 100 176Z"
                        fill="#639BEF" />
                    <path
                        d="M32 4C32 6.20914 30.2091 8 28 8C25.7909 8 24 6.20914 24 4C24 1.79086 25.7909 0 28 0C30.2091 0 32 1.79086 32 4Z"
                        fill="#639BEF" />
                    <path
                        d="M28 32C30.2091 32 32 30.2091 32 28C32 25.7909 30.2091 24 28 24C25.7909 24 24 25.7909 24 28C24 30.2091 25.7909 32 28 32Z"
                        fill="#639BEF" />
                    <path
                        d="M32 52C32 54.2091 30.2091 56 28 56C25.7909 56 24 54.2091 24 52C24 49.7909 25.7909 48 28 48C30.2091 48 32 49.7909 32 52Z"
                        fill="#639BEF" />
                    <path
                        d="M28 80C30.2091 80 32 78.2091 32 76C32 73.7909 30.2091 72 28 72C25.7909 72 24 73.7909 24 76C24 78.2091 25.7909 80 28 80Z"
                        fill="#639BEF" />
                    <path
                        d="M32 100C32 102.209 30.2091 104 28 104C25.7909 104 24 102.209 24 100C24 97.7909 25.7909 96 28 96C30.2091 96 32 97.7909 32 100Z"
                        fill="#639BEF" />
                    <path
                        d="M28 128C30.2091 128 32 126.209 32 124C32 121.791 30.2091 120 28 120C25.7909 120 24 121.791 24 124C24 126.209 25.7909 128 28 128Z"
                        fill="#639BEF" />
                    <path
                        d="M32 148C32 150.209 30.2091 152 28 152C25.7909 152 24 150.209 24 148C24 145.791 25.7909 144 28 144C30.2091 144 32 145.791 32 148Z"
                        fill="#639BEF" />
                    <path
                        d="M28 176C30.2091 176 32 174.209 32 172C32 169.791 30.2091 168 28 168C25.7909 168 24 169.791 24 172C24 174.209 25.7909 176 28 176Z"
                        fill="#639BEF" />
                    <path
                        d="M80 4C80 6.20914 78.2091 8 76 8C73.7909 8 72 6.20914 72 4C72 1.79086 73.7909 0 76 0C78.2091 0 80 1.79086 80 4Z"
                        fill="#639BEF" />
                    <path
                        d="M76 32C78.2091 32 80 30.2091 80 28C80 25.7909 78.2091 24 76 24C73.7909 24 72 25.7909 72 28C72 30.2091 73.7909 32 76 32Z"
                        fill="#639BEF" />
                    <path
                        d="M80 52C80 54.2091 78.2091 56 76 56C73.7909 56 72 54.2091 72 52C72 49.7909 73.7909 48 76 48C78.2091 48 80 49.7909 80 52Z"
                        fill="#639BEF" />
                    <path
                        d="M76 80C78.2091 80 80 78.2091 80 76C80 73.7909 78.2091 72 76 72C73.7909 72 72 73.7909 72 76C72 78.2091 73.7909 80 76 80Z"
                        fill="#639BEF" />
                    <path
                        d="M80 100C80 102.209 78.2091 104 76 104C73.7909 104 72 102.209 72 100C72 97.7909 73.7909 96 76 96C78.2091 96 80 97.7909 80 100Z"
                        fill="#639BEF" />
                    <path
                        d="M76 128C78.2091 128 80 126.209 80 124C80 121.791 78.2091 120 76 120C73.7909 120 72 121.791 72 124C72 126.209 73.7909 128 76 128Z"
                        fill="#639BEF" />
                    <path
                        d="M80 148C80 150.209 78.2091 152 76 152C73.7909 152 72 150.209 72 148C72 145.791 73.7909 144 76 144C78.2091 144 80 145.791 80 148Z"
                        fill="#639BEF" />
                    <path
                        d="M76 176C78.2091 176 80 174.209 80 172C80 169.791 78.2091 168 76 168C73.7909 168 72 169.791 72 172C72 174.209 73.7909 176 76 176Z"
                        fill="#639BEF" />
                    <path
                        d="M128 4C128 6.20914 126.209 8 124 8C121.791 8 120 6.20914 120 4C120 1.79086 121.791 0 124 0C126.209 0 128 1.79086 128 4Z"
                        fill="#639BEF" />
                    <path
                        d="M124 32C126.209 32 128 30.2091 128 28C128 25.7909 126.209 24 124 24C121.791 24 120 25.7909 120 28C120 30.2091 121.791 32 124 32Z"
                        fill="#639BEF" />
                    <path
                        d="M128 52C128 54.2091 126.209 56 124 56C121.791 56 120 54.2091 120 52C120 49.7909 121.791 48 124 48C126.209 48 128 49.7909 128 52Z"
                        fill="#639BEF" />
                    <path
                        d="M124 80C126.209 80 128 78.2091 128 76C128 73.7909 126.209 72 124 72C121.791 72 120 73.7909 120 76C120 78.2091 121.791 80 124 80Z"
                        fill="#639BEF" />
                    <path
                        d="M128 100C128 102.209 126.209 104 124 104C121.791 104 120 102.209 120 100C120 97.7909 121.791 96 124 96C126.209 96 128 97.7909 128 100Z"
                        fill="#639BEF" />
                    <path
                        d="M124 128C126.209 128 128 126.209 128 124C128 121.791 126.209 120 124 120C121.791 120 120 121.791 120 124C120 126.209 121.791 128 124 128Z"
                        fill="#639BEF" />
                    <path
                        d="M128 148C128 150.209 126.209 152 124 152C121.791 152 120 150.209 120 148C120 145.791 121.791 144 124 144C126.209 144 128 145.791 128 148Z"
                        fill="#639BEF" />
                    <path
                        d="M124 176C126.209 176 128 174.209 128 172C128 169.791 126.209 168 124 168C121.791 168 120 169.791 120 172C120 174.209 121.791 176 124 176Z"
                        fill="#639BEF" />
                </svg>

            </div>
        </div>
    </div>
</section>
<section class="solutions">
    <div class="container solutions__container">
        <div class="section__title">
            <p class="body-leading-regular">solutions</p>
            <h2>Commercial & Residential <span>Solutions</span></h2>
        </div>
        <div class="solution solution--residential">
            <div class="solution__banner">
                <h3>Residential Solutions</h3>
                <p class="body-leading-regular">We offer the full range of residential air conditioning, ventilation and
                    heating services – sale, installation, maintenance and repair of all brands and models of Air
                    Conditioners, Heat Pumps and Electric Furnaces, Gas Furnaces. </p>
                <a href="#">see more</a>
            </div>
            <div class="solution__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/mcc-solution-residential.jpg" alt="">
            </div>
        </div>
        <div class="solution solution--commercial">
            <div class="solution__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/mcc-solution-commercial.jpg" alt="">
            </div>
            <div class="solution__banner">
                <h3>Commercial Solutions</h3>
                <p class="body-leading-regular">Specialized in the services of small and medium-sized businesses, we
                    offer you the best solutions in air conditioning, ventilation heating and refrigeration. The skills
                    of our certified staff, our diverse offer of reputable brands and models and the concern for your
                    satisfaction - this is our commitment!</p>
                <a href="#">see more</a>
            </div>
        </div>
        <div class="decoration-1">
            <svg width="105" height="59" viewBox="0 0 105 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M69.0968 25H67.2635C64.7322 25 62.6802 27.0147 62.6802 29.5C62.6802 31.9853 64.7322 34 67.2635 34H69.0968C71.6281 34 73.6802 31.9853 73.6802 29.5C73.6802 27.0147 71.6281 25 69.0968 25Z"
                    fill="#EF6D63" />
                <path
                    d="M53.6061 25H4.39394C1.96723 25 0 27.0147 0 29.5C0 31.9853 1.96723 34 4.39394 34H53.6061C56.0328 34 58 31.9853 58 29.5C58 27.0147 56.0328 25 53.6061 25Z"
                    fill="#EF6D63" />
                <path
                    d="M100.097 50H98.2635C95.7322 50 93.6802 52.0147 93.6802 54.5C93.6802 56.9853 95.7322 59 98.2635 59H100.097C102.628 59 104.68 56.9853 104.68 54.5C104.68 52.0147 102.628 50 100.097 50Z"
                    fill="#FED4BD" />
                <path
                    d="M84.6061 50H35.3939C32.9672 50 31 52.0147 31 54.5C31 56.9853 32.9672 59 35.3939 59H84.6061C87.0328 59 89 56.9853 89 54.5C89 52.0147 87.0328 50 84.6061 50Z"
                    fill="#FED4BD" />
                <path
                    d="M89.0968 0H87.2635C84.7322 0 82.6802 2.01472 82.6802 4.5C82.6802 6.98528 84.7322 9 87.2635 9H89.0968C91.6281 9 93.6802 6.98528 93.6802 4.5C93.6802 2.01472 91.6281 0 89.0968 0Z"
                    fill="#FED4BD" />
                <path
                    d="M73.6061 0H24.3939C21.9672 0 20 2.01472 20 4.5C20 6.98528 21.9672 9 24.3939 9H73.6061C76.0328 9 78 6.98528 78 4.5C78 2.01472 76.0328 0 73.6061 0Z"
                    fill="#FED4BD" />
            </svg>

        </div>
        <div class="decoration-2">
            <svg width="105" height="59" viewBox="0 0 105 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M69.0968 25H67.2635C64.7322 25 62.6802 27.0147 62.6802 29.5C62.6802 31.9853 64.7322 34 67.2635 34H69.0968C71.6281 34 73.6802 31.9853 73.6802 29.5C73.6802 27.0147 71.6281 25 69.0968 25Z"
                    fill="#EF6D63" />
                <path
                    d="M53.6061 25H4.39394C1.96723 25 0 27.0147 0 29.5C0 31.9853 1.96723 34 4.39394 34H53.6061C56.0328 34 58 31.9853 58 29.5C58 27.0147 56.0328 25 53.6061 25Z"
                    fill="#EF6D63" />
                <path
                    d="M100.097 50H98.2635C95.7322 50 93.6802 52.0147 93.6802 54.5C93.6802 56.9853 95.7322 59 98.2635 59H100.097C102.628 59 104.68 56.9853 104.68 54.5C104.68 52.0147 102.628 50 100.097 50Z"
                    fill="#FED4BD" />
                <path
                    d="M84.6061 50H35.3939C32.9672 50 31 52.0147 31 54.5C31 56.9853 32.9672 59 35.3939 59H84.6061C87.0328 59 89 56.9853 89 54.5C89 52.0147 87.0328 50 84.6061 50Z"
                    fill="#FED4BD" />
                <path
                    d="M89.0968 0H87.2635C84.7322 0 82.6802 2.01472 82.6802 4.5C82.6802 6.98528 84.7322 9 87.2635 9H89.0968C91.6281 9 93.6802 6.98528 93.6802 4.5C93.6802 2.01472 91.6281 0 89.0968 0Z"
                    fill="#FED4BD" />
                <path
                    d="M73.6061 0H24.3939C21.9672 0 20 2.01472 20 4.5C20 6.98528 21.9672 9 24.3939 9H73.6061C76.0328 9 78 6.98528 78 4.5C78 2.01472 76.0328 0 73.6061 0Z"
                    fill="#FED4BD" />
            </svg>

        </div>
    </div>
</section>
<section class="promotions">
    <div class="container promotions-container">
        <div class="section__title">
            <p class="body-leading-regular">promotions</p>
            <h2>HVAC <span>Promotions</span></h2>
        </div>
        <div>
            <div class="promotion">
                <p><span>-</span><span>45</span><span>%</span><span>off</span></p>
                <p>clearance</p>
            </div>
            <div class="promotion">
                <p><span>-</span><span>35</span><span>%</span><span>off</span></p>
                <p>HEAT PUMPS</p>
            </div>
            <div class="promotion">
                <p><span>-</span><span>30</span><span>%</span><span>off</span></p>
                <p>FURNACES</p>
            </div>
            <div class="promotion">
                <p><span>-</span><span>25</span><span>%</span><span>off</span></p>
                <p>AIR CONDITIONERS</p>
            </div>
        </div>
    </div>
</section>
<section class="brands">
    <div class="section__title">
        <p class="body-leading-regular">brands</p>
        <h2>Brands we <span>Trust</span></h2>
    </div>
    <div class="container brands-container">
        <div class="brand">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/gree-logo.png" alt="" height="32px">
        </div>
        <div class="brand">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/york-logo.png" alt="" height="51px">
        </div>
        <div class="brand">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/lg-logo.png" alt="" height="49px">
        </div>
        <div class="brand">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/rheem-logo.png" alt="" height="64px">
        </div>
        <div class="brand">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/goodman-logo.png" alt=""
                height="48px">
        </div>
        <div class="brand">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/comfortmaker-logo.png" alt=""
                height="32px">
        </div>
        <div class="brand">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/coleman-logo.png" alt=""
                height="40px">
        </div>
        <div class="brand">
            <img src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/elios-logo.png" alt="" height="32px">
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="section__title">
        <p class="body-leading-regular">testimonials</p>
        <h2>A few words from our <span>Customers</span></h2>
    </div>
    <div class="container testimonials-container">
        <div class="testimonial-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php  
                    $testimonialSlider = new WP_Query(array("post_type" => "testimonial"));
                    while($testimonialSlider->have_posts()): $testimonialSlider->the_post();?>
                    <li class="splide__slide testimonial__slide">
                        <p class="testimonial__slide-feedback"><?php the_field("person_feedback"); ?></p>
                        <div>
                            <p class="testimonial__slide-author subtitle"><?php the_field("person_name"); ?></p>
                            <p class="testimonial__slide-job text-small"><?php the_field("person_job"); ?></p>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <div class="decorator-1">
            <svg width="128" height="176" viewBox="0 0 128 176" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 8C6.20914 8 8 6.20914 8 4C8 1.79086 6.20914 0 4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8Z"
                    fill="#639BEF" />
                <path
                    d="M4 32C6.20914 32 8 30.2091 8 28C8 25.7909 6.20914 24 4 24C1.79086 24 0 25.7909 0 28C0 30.2091 1.79086 32 4 32Z"
                    fill="#639BEF" />
                <path
                    d="M8 52C8 54.2091 6.20914 56 4 56C1.79086 56 0 54.2091 0 52C0 49.7909 1.79086 48 4 48C6.20914 48 8 49.7909 8 52Z"
                    fill="#639BEF" />
                <path
                    d="M4 80C6.20914 80 8 78.2091 8 76C8 73.7909 6.20914 72 4 72C1.79086 72 0 73.7909 0 76C0 78.2091 1.79086 80 4 80Z"
                    fill="#639BEF" />
                <path
                    d="M8 100C8 102.209 6.20914 104 4 104C1.79086 104 0 102.209 0 100C0 97.7909 1.79086 96 4 96C6.20914 96 8 97.7909 8 100Z"
                    fill="#639BEF" />
                <path
                    d="M4 128C6.20914 128 8 126.209 8 124C8 121.791 6.20914 120 4 120C1.79086 120 0 121.791 0 124C0 126.209 1.79086 128 4 128Z"
                    fill="#639BEF" />
                <path
                    d="M8 148C8 150.209 6.20914 152 4 152C1.79086 152 0 150.209 0 148C0 145.791 1.79086 144 4 144C6.20914 144 8 145.791 8 148Z"
                    fill="#639BEF" />
                <path
                    d="M4 176C6.20914 176 8 174.209 8 172C8 169.791 6.20914 168 4 168C1.79086 168 0 169.791 0 172C0 174.209 1.79086 176 4 176Z"
                    fill="#639BEF" />
                <path
                    d="M56 4C56 6.20914 54.2091 8 52 8C49.7909 8 48 6.20914 48 4C48 1.79086 49.7909 0 52 0C54.2091 0 56 1.79086 56 4Z"
                    fill="#639BEF" />
                <path
                    d="M52 32C54.2091 32 56 30.2091 56 28C56 25.7909 54.2091 24 52 24C49.7909 24 48 25.7909 48 28C48 30.2091 49.7909 32 52 32Z"
                    fill="#639BEF" />
                <path
                    d="M56 52C56 54.2091 54.2091 56 52 56C49.7909 56 48 54.2091 48 52C48 49.7909 49.7909 48 52 48C54.2091 48 56 49.7909 56 52Z"
                    fill="#639BEF" />
                <path
                    d="M52 80C54.2091 80 56 78.2091 56 76C56 73.7909 54.2091 72 52 72C49.7909 72 48 73.7909 48 76C48 78.2091 49.7909 80 52 80Z"
                    fill="#639BEF" />
                <path
                    d="M56 100C56 102.209 54.2091 104 52 104C49.7909 104 48 102.209 48 100C48 97.7909 49.7909 96 52 96C54.2091 96 56 97.7909 56 100Z"
                    fill="#639BEF" />
                <path
                    d="M52 128C54.2091 128 56 126.209 56 124C56 121.791 54.2091 120 52 120C49.7909 120 48 121.791 48 124C48 126.209 49.7909 128 52 128Z"
                    fill="#639BEF" />
                <path
                    d="M56 148C56 150.209 54.2091 152 52 152C49.7909 152 48 150.209 48 148C48 145.791 49.7909 144 52 144C54.2091 144 56 145.791 56 148Z"
                    fill="#639BEF" />
                <path
                    d="M52 176C54.2091 176 56 174.209 56 172C56 169.791 54.2091 168 52 168C49.7909 168 48 169.791 48 172C48 174.209 49.7909 176 52 176Z"
                    fill="#639BEF" />
                <path
                    d="M104 4C104 6.20914 102.209 8 100 8C97.7909 8 96 6.20914 96 4C96 1.79086 97.7909 0 100 0C102.209 0 104 1.79086 104 4Z"
                    fill="#639BEF" />
                <path
                    d="M100 32C102.209 32 104 30.2091 104 28C104 25.7909 102.209 24 100 24C97.7909 24 96 25.7909 96 28C96 30.2091 97.7909 32 100 32Z"
                    fill="#639BEF" />
                <path
                    d="M104 52C104 54.2091 102.209 56 100 56C97.7909 56 96 54.2091 96 52C96 49.7909 97.7909 48 100 48C102.209 48 104 49.7909 104 52Z"
                    fill="#639BEF" />
                <path
                    d="M100 80C102.209 80 104 78.2091 104 76C104 73.7909 102.209 72 100 72C97.7909 72 96 73.7909 96 76C96 78.2091 97.7909 80 100 80Z"
                    fill="#639BEF" />
                <path
                    d="M104 100C104 102.209 102.209 104 100 104C97.7909 104 96 102.209 96 100C96 97.7909 97.7909 96 100 96C102.209 96 104 97.7909 104 100Z"
                    fill="#639BEF" />
                <path
                    d="M100 128C102.209 128 104 126.209 104 124C104 121.791 102.209 120 100 120C97.7909 120 96 121.791 96 124C96 126.209 97.7909 128 100 128Z"
                    fill="#639BEF" />
                <path
                    d="M104 148C104 150.209 102.209 152 100 152C97.7909 152 96 150.209 96 148C96 145.791 97.7909 144 100 144C102.209 144 104 145.791 104 148Z"
                    fill="#639BEF" />
                <path
                    d="M100 176C102.209 176 104 174.209 104 172C104 169.791 102.209 168 100 168C97.7909 168 96 169.791 96 172C96 174.209 97.7909 176 100 176Z"
                    fill="#639BEF" />
                <path
                    d="M32 4C32 6.20914 30.2091 8 28 8C25.7909 8 24 6.20914 24 4C24 1.79086 25.7909 0 28 0C30.2091 0 32 1.79086 32 4Z"
                    fill="#639BEF" />
                <path
                    d="M28 32C30.2091 32 32 30.2091 32 28C32 25.7909 30.2091 24 28 24C25.7909 24 24 25.7909 24 28C24 30.2091 25.7909 32 28 32Z"
                    fill="#639BEF" />
                <path
                    d="M32 52C32 54.2091 30.2091 56 28 56C25.7909 56 24 54.2091 24 52C24 49.7909 25.7909 48 28 48C30.2091 48 32 49.7909 32 52Z"
                    fill="#639BEF" />
                <path
                    d="M28 80C30.2091 80 32 78.2091 32 76C32 73.7909 30.2091 72 28 72C25.7909 72 24 73.7909 24 76C24 78.2091 25.7909 80 28 80Z"
                    fill="#639BEF" />
                <path
                    d="M32 100C32 102.209 30.2091 104 28 104C25.7909 104 24 102.209 24 100C24 97.7909 25.7909 96 28 96C30.2091 96 32 97.7909 32 100Z"
                    fill="#639BEF" />
                <path
                    d="M28 128C30.2091 128 32 126.209 32 124C32 121.791 30.2091 120 28 120C25.7909 120 24 121.791 24 124C24 126.209 25.7909 128 28 128Z"
                    fill="#639BEF" />
                <path
                    d="M32 148C32 150.209 30.2091 152 28 152C25.7909 152 24 150.209 24 148C24 145.791 25.7909 144 28 144C30.2091 144 32 145.791 32 148Z"
                    fill="#639BEF" />
                <path
                    d="M28 176C30.2091 176 32 174.209 32 172C32 169.791 30.2091 168 28 168C25.7909 168 24 169.791 24 172C24 174.209 25.7909 176 28 176Z"
                    fill="#639BEF" />
                <path
                    d="M80 4C80 6.20914 78.2091 8 76 8C73.7909 8 72 6.20914 72 4C72 1.79086 73.7909 0 76 0C78.2091 0 80 1.79086 80 4Z"
                    fill="#639BEF" />
                <path
                    d="M76 32C78.2091 32 80 30.2091 80 28C80 25.7909 78.2091 24 76 24C73.7909 24 72 25.7909 72 28C72 30.2091 73.7909 32 76 32Z"
                    fill="#639BEF" />
                <path
                    d="M80 52C80 54.2091 78.2091 56 76 56C73.7909 56 72 54.2091 72 52C72 49.7909 73.7909 48 76 48C78.2091 48 80 49.7909 80 52Z"
                    fill="#639BEF" />
                <path
                    d="M76 80C78.2091 80 80 78.2091 80 76C80 73.7909 78.2091 72 76 72C73.7909 72 72 73.7909 72 76C72 78.2091 73.7909 80 76 80Z"
                    fill="#639BEF" />
                <path
                    d="M80 100C80 102.209 78.2091 104 76 104C73.7909 104 72 102.209 72 100C72 97.7909 73.7909 96 76 96C78.2091 96 80 97.7909 80 100Z"
                    fill="#639BEF" />
                <path
                    d="M76 128C78.2091 128 80 126.209 80 124C80 121.791 78.2091 120 76 120C73.7909 120 72 121.791 72 124C72 126.209 73.7909 128 76 128Z"
                    fill="#639BEF" />
                <path
                    d="M80 148C80 150.209 78.2091 152 76 152C73.7909 152 72 150.209 72 148C72 145.791 73.7909 144 76 144C78.2091 144 80 145.791 80 148Z"
                    fill="#639BEF" />
                <path
                    d="M76 176C78.2091 176 80 174.209 80 172C80 169.791 78.2091 168 76 168C73.7909 168 72 169.791 72 172C72 174.209 73.7909 176 76 176Z"
                    fill="#639BEF" />
                <path
                    d="M128 4C128 6.20914 126.209 8 124 8C121.791 8 120 6.20914 120 4C120 1.79086 121.791 0 124 0C126.209 0 128 1.79086 128 4Z"
                    fill="#639BEF" />
                <path
                    d="M124 32C126.209 32 128 30.2091 128 28C128 25.7909 126.209 24 124 24C121.791 24 120 25.7909 120 28C120 30.2091 121.791 32 124 32Z"
                    fill="#639BEF" />
                <path
                    d="M128 52C128 54.2091 126.209 56 124 56C121.791 56 120 54.2091 120 52C120 49.7909 121.791 48 124 48C126.209 48 128 49.7909 128 52Z"
                    fill="#639BEF" />
                <path
                    d="M124 80C126.209 80 128 78.2091 128 76C128 73.7909 126.209 72 124 72C121.791 72 120 73.7909 120 76C120 78.2091 121.791 80 124 80Z"
                    fill="#639BEF" />
                <path
                    d="M128 100C128 102.209 126.209 104 124 104C121.791 104 120 102.209 120 100C120 97.7909 121.791 96 124 96C126.209 96 128 97.7909 128 100Z"
                    fill="#639BEF" />
                <path
                    d="M124 128C126.209 128 128 126.209 128 124C128 121.791 126.209 120 124 120C121.791 120 120 121.791 120 124C120 126.209 121.791 128 124 128Z"
                    fill="#639BEF" />
                <path
                    d="M128 148C128 150.209 126.209 152 124 152C121.791 152 120 150.209 120 148C120 145.791 121.791 144 124 144C126.209 144 128 145.791 128 148Z"
                    fill="#639BEF" />
                <path
                    d="M124 176C126.209 176 128 174.209 128 172C128 169.791 126.209 168 124 168C121.791 168 120 169.791 120 172C120 174.209 121.791 176 124 176Z"
                    fill="#639BEF" />
            </svg>

        </div>
        <div class="decorator-2">
            <svg width="128" height="176" viewBox="0 0 128 176" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4 8C6.20914 8 8 6.20914 8 4C8 1.79086 6.20914 0 4 0C1.79086 0 0 1.79086 0 4C0 6.20914 1.79086 8 4 8Z"
                    fill="#639BEF" />
                <path
                    d="M4 32C6.20914 32 8 30.2091 8 28C8 25.7909 6.20914 24 4 24C1.79086 24 0 25.7909 0 28C0 30.2091 1.79086 32 4 32Z"
                    fill="#639BEF" />
                <path
                    d="M8 52C8 54.2091 6.20914 56 4 56C1.79086 56 0 54.2091 0 52C0 49.7909 1.79086 48 4 48C6.20914 48 8 49.7909 8 52Z"
                    fill="#639BEF" />
                <path
                    d="M4 80C6.20914 80 8 78.2091 8 76C8 73.7909 6.20914 72 4 72C1.79086 72 0 73.7909 0 76C0 78.2091 1.79086 80 4 80Z"
                    fill="#639BEF" />
                <path
                    d="M8 100C8 102.209 6.20914 104 4 104C1.79086 104 0 102.209 0 100C0 97.7909 1.79086 96 4 96C6.20914 96 8 97.7909 8 100Z"
                    fill="#639BEF" />
                <path
                    d="M4 128C6.20914 128 8 126.209 8 124C8 121.791 6.20914 120 4 120C1.79086 120 0 121.791 0 124C0 126.209 1.79086 128 4 128Z"
                    fill="#639BEF" />
                <path
                    d="M8 148C8 150.209 6.20914 152 4 152C1.79086 152 0 150.209 0 148C0 145.791 1.79086 144 4 144C6.20914 144 8 145.791 8 148Z"
                    fill="#639BEF" />
                <path
                    d="M4 176C6.20914 176 8 174.209 8 172C8 169.791 6.20914 168 4 168C1.79086 168 0 169.791 0 172C0 174.209 1.79086 176 4 176Z"
                    fill="#639BEF" />
                <path
                    d="M56 4C56 6.20914 54.2091 8 52 8C49.7909 8 48 6.20914 48 4C48 1.79086 49.7909 0 52 0C54.2091 0 56 1.79086 56 4Z"
                    fill="#639BEF" />
                <path
                    d="M52 32C54.2091 32 56 30.2091 56 28C56 25.7909 54.2091 24 52 24C49.7909 24 48 25.7909 48 28C48 30.2091 49.7909 32 52 32Z"
                    fill="#639BEF" />
                <path
                    d="M56 52C56 54.2091 54.2091 56 52 56C49.7909 56 48 54.2091 48 52C48 49.7909 49.7909 48 52 48C54.2091 48 56 49.7909 56 52Z"
                    fill="#639BEF" />
                <path
                    d="M52 80C54.2091 80 56 78.2091 56 76C56 73.7909 54.2091 72 52 72C49.7909 72 48 73.7909 48 76C48 78.2091 49.7909 80 52 80Z"
                    fill="#639BEF" />
                <path
                    d="M56 100C56 102.209 54.2091 104 52 104C49.7909 104 48 102.209 48 100C48 97.7909 49.7909 96 52 96C54.2091 96 56 97.7909 56 100Z"
                    fill="#639BEF" />
                <path
                    d="M52 128C54.2091 128 56 126.209 56 124C56 121.791 54.2091 120 52 120C49.7909 120 48 121.791 48 124C48 126.209 49.7909 128 52 128Z"
                    fill="#639BEF" />
                <path
                    d="M56 148C56 150.209 54.2091 152 52 152C49.7909 152 48 150.209 48 148C48 145.791 49.7909 144 52 144C54.2091 144 56 145.791 56 148Z"
                    fill="#639BEF" />
                <path
                    d="M52 176C54.2091 176 56 174.209 56 172C56 169.791 54.2091 168 52 168C49.7909 168 48 169.791 48 172C48 174.209 49.7909 176 52 176Z"
                    fill="#639BEF" />
                <path
                    d="M104 4C104 6.20914 102.209 8 100 8C97.7909 8 96 6.20914 96 4C96 1.79086 97.7909 0 100 0C102.209 0 104 1.79086 104 4Z"
                    fill="#639BEF" />
                <path
                    d="M100 32C102.209 32 104 30.2091 104 28C104 25.7909 102.209 24 100 24C97.7909 24 96 25.7909 96 28C96 30.2091 97.7909 32 100 32Z"
                    fill="#639BEF" />
                <path
                    d="M104 52C104 54.2091 102.209 56 100 56C97.7909 56 96 54.2091 96 52C96 49.7909 97.7909 48 100 48C102.209 48 104 49.7909 104 52Z"
                    fill="#639BEF" />
                <path
                    d="M100 80C102.209 80 104 78.2091 104 76C104 73.7909 102.209 72 100 72C97.7909 72 96 73.7909 96 76C96 78.2091 97.7909 80 100 80Z"
                    fill="#639BEF" />
                <path
                    d="M104 100C104 102.209 102.209 104 100 104C97.7909 104 96 102.209 96 100C96 97.7909 97.7909 96 100 96C102.209 96 104 97.7909 104 100Z"
                    fill="#639BEF" />
                <path
                    d="M100 128C102.209 128 104 126.209 104 124C104 121.791 102.209 120 100 120C97.7909 120 96 121.791 96 124C96 126.209 97.7909 128 100 128Z"
                    fill="#639BEF" />
                <path
                    d="M104 148C104 150.209 102.209 152 100 152C97.7909 152 96 150.209 96 148C96 145.791 97.7909 144 100 144C102.209 144 104 145.791 104 148Z"
                    fill="#639BEF" />
                <path
                    d="M100 176C102.209 176 104 174.209 104 172C104 169.791 102.209 168 100 168C97.7909 168 96 169.791 96 172C96 174.209 97.7909 176 100 176Z"
                    fill="#639BEF" />
                <path
                    d="M32 4C32 6.20914 30.2091 8 28 8C25.7909 8 24 6.20914 24 4C24 1.79086 25.7909 0 28 0C30.2091 0 32 1.79086 32 4Z"
                    fill="#639BEF" />
                <path
                    d="M28 32C30.2091 32 32 30.2091 32 28C32 25.7909 30.2091 24 28 24C25.7909 24 24 25.7909 24 28C24 30.2091 25.7909 32 28 32Z"
                    fill="#639BEF" />
                <path
                    d="M32 52C32 54.2091 30.2091 56 28 56C25.7909 56 24 54.2091 24 52C24 49.7909 25.7909 48 28 48C30.2091 48 32 49.7909 32 52Z"
                    fill="#639BEF" />
                <path
                    d="M28 80C30.2091 80 32 78.2091 32 76C32 73.7909 30.2091 72 28 72C25.7909 72 24 73.7909 24 76C24 78.2091 25.7909 80 28 80Z"
                    fill="#639BEF" />
                <path
                    d="M32 100C32 102.209 30.2091 104 28 104C25.7909 104 24 102.209 24 100C24 97.7909 25.7909 96 28 96C30.2091 96 32 97.7909 32 100Z"
                    fill="#639BEF" />
                <path
                    d="M28 128C30.2091 128 32 126.209 32 124C32 121.791 30.2091 120 28 120C25.7909 120 24 121.791 24 124C24 126.209 25.7909 128 28 128Z"
                    fill="#639BEF" />
                <path
                    d="M32 148C32 150.209 30.2091 152 28 152C25.7909 152 24 150.209 24 148C24 145.791 25.7909 144 28 144C30.2091 144 32 145.791 32 148Z"
                    fill="#639BEF" />
                <path
                    d="M28 176C30.2091 176 32 174.209 32 172C32 169.791 30.2091 168 28 168C25.7909 168 24 169.791 24 172C24 174.209 25.7909 176 28 176Z"
                    fill="#639BEF" />
                <path
                    d="M80 4C80 6.20914 78.2091 8 76 8C73.7909 8 72 6.20914 72 4C72 1.79086 73.7909 0 76 0C78.2091 0 80 1.79086 80 4Z"
                    fill="#639BEF" />
                <path
                    d="M76 32C78.2091 32 80 30.2091 80 28C80 25.7909 78.2091 24 76 24C73.7909 24 72 25.7909 72 28C72 30.2091 73.7909 32 76 32Z"
                    fill="#639BEF" />
                <path
                    d="M80 52C80 54.2091 78.2091 56 76 56C73.7909 56 72 54.2091 72 52C72 49.7909 73.7909 48 76 48C78.2091 48 80 49.7909 80 52Z"
                    fill="#639BEF" />
                <path
                    d="M76 80C78.2091 80 80 78.2091 80 76C80 73.7909 78.2091 72 76 72C73.7909 72 72 73.7909 72 76C72 78.2091 73.7909 80 76 80Z"
                    fill="#639BEF" />
                <path
                    d="M80 100C80 102.209 78.2091 104 76 104C73.7909 104 72 102.209 72 100C72 97.7909 73.7909 96 76 96C78.2091 96 80 97.7909 80 100Z"
                    fill="#639BEF" />
                <path
                    d="M76 128C78.2091 128 80 126.209 80 124C80 121.791 78.2091 120 76 120C73.7909 120 72 121.791 72 124C72 126.209 73.7909 128 76 128Z"
                    fill="#639BEF" />
                <path
                    d="M80 148C80 150.209 78.2091 152 76 152C73.7909 152 72 150.209 72 148C72 145.791 73.7909 144 76 144C78.2091 144 80 145.791 80 148Z"
                    fill="#639BEF" />
                <path
                    d="M76 176C78.2091 176 80 174.209 80 172C80 169.791 78.2091 168 76 168C73.7909 168 72 169.791 72 172C72 174.209 73.7909 176 76 176Z"
                    fill="#639BEF" />
                <path
                    d="M128 4C128 6.20914 126.209 8 124 8C121.791 8 120 6.20914 120 4C120 1.79086 121.791 0 124 0C126.209 0 128 1.79086 128 4Z"
                    fill="#639BEF" />
                <path
                    d="M124 32C126.209 32 128 30.2091 128 28C128 25.7909 126.209 24 124 24C121.791 24 120 25.7909 120 28C120 30.2091 121.791 32 124 32Z"
                    fill="#639BEF" />
                <path
                    d="M128 52C128 54.2091 126.209 56 124 56C121.791 56 120 54.2091 120 52C120 49.7909 121.791 48 124 48C126.209 48 128 49.7909 128 52Z"
                    fill="#639BEF" />
                <path
                    d="M124 80C126.209 80 128 78.2091 128 76C128 73.7909 126.209 72 124 72C121.791 72 120 73.7909 120 76C120 78.2091 121.791 80 124 80Z"
                    fill="#639BEF" />
                <path
                    d="M128 100C128 102.209 126.209 104 124 104C121.791 104 120 102.209 120 100C120 97.7909 121.791 96 124 96C126.209 96 128 97.7909 128 100Z"
                    fill="#639BEF" />
                <path
                    d="M124 128C126.209 128 128 126.209 128 124C128 121.791 126.209 120 124 120C121.791 120 120 121.791 120 124C120 126.209 121.791 128 124 128Z"
                    fill="#639BEF" />
                <path
                    d="M128 148C128 150.209 126.209 152 124 152C121.791 152 120 150.209 120 148C120 145.791 121.791 144 124 144C126.209 144 128 145.791 128 148Z"
                    fill="#639BEF" />
                <path
                    d="M124 176C126.209 176 128 174.209 128 172C128 169.791 126.209 168 124 168C121.791 168 120 169.791 120 172C120 174.209 121.791 176 124 176Z"
                    fill="#639BEF" />
            </svg>
        </div>
    </div>
</section>
<section class="why-choose-us">
    <div class="section__title">
        <h2><span>Why choose us?</span></h2>
    </div>
    <div class="container why-choose-us-container">
        <div class="why-choose-us-card">
            <img class="why-choose-us-icon"
                src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/quick-response.png" alt="">
            <div>
                <p class="body-leading">Fast Response</p>
                <p class="body-leading-regular">We are here for you need us - we are committed and meet your deadlines
                </p>
            </div>
        </div>
        <div class="why-choose-us-card">
            <img class="why-choose-us-icon"
                src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/brand-identity.png" alt="">
            <div>
                <p class="body-leading">Variety of Products</p>
                <p class="body-leading-regular">We offer wide variety of products to meet the specific need of our
                    customers
                </p>
            </div>
        </div>
        <div class="why-choose-us-card">
            <img class="why-choose-us-icon"
                src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/quality-assurance.png" alt="">
            <div>
                <p class="body-leading">Quality Services</p>
                <p class="body-leading-regular">Customers satisfaction is at the heart of everything we do - we strive
                    to provide the highest quality of service to our customers
                </p>
            </div>
        </div>
        <div class="why-choose-us-card">
            <img class="why-choose-us-icon"
                src="http://localhost/custom_wordpress/wp-content/uploads/2022/02/3d-model.png" alt="">
            <div>
                <p class="body-leading">Attention to Details</p>
                <p class="body-leading-regular">We adapt out solutions melticously to meet every detail of our customers
                    requests
                </p>
            </div>
        </div>
        <div class="decoration-1">
            <svg width="105" height="59" viewBox="0 0 105 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M69.0968 25H67.2635C64.7322 25 62.6802 27.0147 62.6802 29.5C62.6802 31.9853 64.7322 34 67.2635 34H69.0968C71.6281 34 73.6802 31.9853 73.6802 29.5C73.6802 27.0147 71.6281 25 69.0968 25Z"
                    fill="#EF6D63" />
                <path
                    d="M53.6061 25H4.39394C1.96723 25 0 27.0147 0 29.5C0 31.9853 1.96723 34 4.39394 34H53.6061C56.0328 34 58 31.9853 58 29.5C58 27.0147 56.0328 25 53.6061 25Z"
                    fill="#EF6D63" />
                <path
                    d="M100.097 50H98.2635C95.7322 50 93.6802 52.0147 93.6802 54.5C93.6802 56.9853 95.7322 59 98.2635 59H100.097C102.628 59 104.68 56.9853 104.68 54.5C104.68 52.0147 102.628 50 100.097 50Z"
                    fill="#FED4BD" />
                <path
                    d="M84.6061 50H35.3939C32.9672 50 31 52.0147 31 54.5C31 56.9853 32.9672 59 35.3939 59H84.6061C87.0328 59 89 56.9853 89 54.5C89 52.0147 87.0328 50 84.6061 50Z"
                    fill="#FED4BD" />
                <path
                    d="M89.0968 0H87.2635C84.7322 0 82.6802 2.01472 82.6802 4.5C82.6802 6.98528 84.7322 9 87.2635 9H89.0968C91.6281 9 93.6802 6.98528 93.6802 4.5C93.6802 2.01472 91.6281 0 89.0968 0Z"
                    fill="#FED4BD" />
                <path
                    d="M73.6061 0H24.3939C21.9672 0 20 2.01472 20 4.5C20 6.98528 21.9672 9 24.3939 9H73.6061C76.0328 9 78 6.98528 78 4.5C78 2.01472 76.0328 0 73.6061 0Z"
                    fill="#FED4BD" />
            </svg>

        </div>
        <div class="decoration-2">
            <svg width="105" height="59" viewBox="0 0 105 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M69.0968 25H67.2635C64.7322 25 62.6802 27.0147 62.6802 29.5C62.6802 31.9853 64.7322 34 67.2635 34H69.0968C71.6281 34 73.6802 31.9853 73.6802 29.5C73.6802 27.0147 71.6281 25 69.0968 25Z"
                    fill="#EF6D63" />
                <path
                    d="M53.6061 25H4.39394C1.96723 25 0 27.0147 0 29.5C0 31.9853 1.96723 34 4.39394 34H53.6061C56.0328 34 58 31.9853 58 29.5C58 27.0147 56.0328 25 53.6061 25Z"
                    fill="#EF6D63" />
                <path
                    d="M100.097 50H98.2635C95.7322 50 93.6802 52.0147 93.6802 54.5C93.6802 56.9853 95.7322 59 98.2635 59H100.097C102.628 59 104.68 56.9853 104.68 54.5C104.68 52.0147 102.628 50 100.097 50Z"
                    fill="#FED4BD" />
                <path
                    d="M84.6061 50H35.3939C32.9672 50 31 52.0147 31 54.5C31 56.9853 32.9672 59 35.3939 59H84.6061C87.0328 59 89 56.9853 89 54.5C89 52.0147 87.0328 50 84.6061 50Z"
                    fill="#FED4BD" />
                <path
                    d="M89.0968 0H87.2635C84.7322 0 82.6802 2.01472 82.6802 4.5C82.6802 6.98528 84.7322 9 87.2635 9H89.0968C91.6281 9 93.6802 6.98528 93.6802 4.5C93.6802 2.01472 91.6281 0 89.0968 0Z"
                    fill="#FED4BD" />
                <path
                    d="M73.6061 0H24.3939C21.9672 0 20 2.01472 20 4.5C20 6.98528 21.9672 9 24.3939 9H73.6061C76.0328 9 78 6.98528 78 4.5C78 2.01472 76.0328 0 73.6061 0Z"
                    fill="#FED4BD" />
            </svg>

        </div>
    </div>
</section>
<?php get_footer(); ?>