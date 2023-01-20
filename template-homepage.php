<?php /* Template Name: Homepage Template */ 

get_header();
?>

<style>
    .hero-slider {
    position: relative;
    width: 100%;
    height: 500px; /* Set the desired height for your slider */
    }

    .hero-slide {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s;
    }

    .hero-slide.active {
    opacity: 1;
    }
</style>

<main id="primary" class="site-main">
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-img hero-slider">
                <img src='<?php echo get_template_directory_uri() . '/images/hero-takuyaki.jpg'; ?>' class="hero-slide active" alt="hero image takuyaki"/>
                <img src='<?php echo get_template_directory_uri() . '/images/hero-tako.jpg'; ?>' class="hero-slide" alt="hero image takuyaki"/>
                <img src='<?php echo get_template_directory_uri() . '/images/hero-foods.jpg'; ?>' class="hero-slide" alt="hero image takuyaki"/>
            </div>
        </div>
    </section>

    <section id="our-story" class="our-story">
        <div class="container">
            <div class="story-row">
                <div class="col featured">
                    <img src="<?php echo get_template_directory_uri() . '/images/taiko-baler.jpg'; ?>" alt="Taiko Baler">
                </div>
                <div class="col our-story-head">
                    <img src="<?php echo get_template_directory_uri() . '/images/our-story.png'; ?>" alt="Our Story">
                    <p>House of Taiko is a world-class food business that started at the height of the COVID-19 pandemic in 2020 to offer premium and authentic homemade takoyaki within the confines of CEO Lemuel Belaro's local community. Backed by his culinary expertise, Lemuel's innate love for Japanese cuisine and his family's chocolate business, Lala chocolates, allowed him to further pursue his very own commissary.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Slideshow container -->
    <section id="comments" class="comments slideshow-container">
        <div class="container relative">
            <!-- Full-width slides/quotes -->
            <div class="mySlides">
                <q>Super friendly staff and food is<br/> definitely worth for its price!<br/> Will surely come back for more.</q>
                <p class="author">- John Keats</p>
            </div>

            <div class="mySlides">
                <q>The food at this restaurant was absolutely delicious! I had the pleasure of trying the special of the day and it was cooked to perfection. The flavors were well balanced and the portion size was generous. Service was top notch, the waitstaff were attentive and friendly. The ambiance of the restaurant was cozy and inviting. I highly recommend this restaurant to anyone looking for a great dining experience.</q>
                <p class="author">- Ernest Hemingway</p>
            </div>

            <div class="mySlides">
                <q>This restaurant exceeded all my expectations. The food was delicious, the service was great and the atmosphere was perfect. Will definitely be back!</q>
                <p class="author">- Thomas A. Edison</p>
            </div>

            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </section>

    <section id="events" class="events" >
        <div class="container">
            <div class="section-header">
                <img src="<?php echo get_template_directory_uri() . '/images/events.png'; ?>" alt="events" />
            </div>
            <div class="section-content">
                <div class="events-row">
                    <div class="event">
                        <picture>
                            <source media="(orientation: portrait)" srcset="/wp-content/themes/improv/images/purple/hero-header-resize-mobile.webp" type="image/webp">
                            <source media="(orientation: portrait)" srcset="/wp-content/themes/improv/images/purple/hero-header-resize-mobile.png" type="image/png">
                            <source srcset="<?php echo get_template_directory_uri() . '/images/events/event-1.webp'; ?>" type="image/webp">
                            <img class="event-1" src="?php echo get_template_directory_uri() . '/images/events/event-1.png'; ?>" alt="purple main" >
                        </picture>
                        <div class="concertname">
                            <div class="c1">
                                <p>"MAGBALIK:</p>
                            </div>
                            <div class="c2">
                                <p>LILY CONCERT</p>
                            </div>
                            <div class="details">
                                <p>Music Museum<br/>December 2<br/>8:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <picture>
                            <source media="(orientation: portrait)" srcset="/wp-content/themes/improv/images/purple/hero-header-resize-mobile.webp" type="image/webp">
                            <source media="(orientation: portrait)" srcset="/wp-content/themes/improv/images/purple/hero-header-resize-mobile.png" type="image/png">
                            <source srcset="<?php echo get_template_directory_uri() . '/images/events/event-2.webp'; ?>" type="image/webp">
                            <img class="event-1" src="?php echo get_template_directory_uri() . '/images/events/event-2.png'; ?>" alt="purple main" >
                        </picture>
                        <div class="concertname">
                            <div class="c1">
                                <p>"TAKE OFF:</p>
                            </div>
                            <div class="c2">
                                <p>RACHEL & KIER CONCERT</p>
                            </div>
                            <div class="details">
                                <p>Music Museum<br/>December 2<br/>8:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <picture>
                            <source media="(orientation: portrait)" srcset="/wp-content/themes/improv/images/purple/hero-header-resize-mobile.webp" type="image/webp">
                            <source media="(orientation: portrait)" srcset="/wp-content/themes/improv/images/purple/hero-header-resize-mobile.png" type="image/png">
                            <source srcset="<?php echo get_template_directory_uri() . '/images/events/event-3.webp'; ?>" type="image/webp">
                            <img class="event-1" src="?php echo get_template_directory_uri() . '/images/events/event-3.png'; ?>" alt="purple main" >
                        </picture>
                        <div class="concertname">
                            <div class="c1">
                                <p>UNLIMITED PROMO</p>
                            </div>
                            <div class="c2">
                            </div>
                            <div class="details">
                                <ul>
                                    <li>UNLI RAMEN</li>
                                    <li>UNLI EGG DROP</li>
                                    <li>UNLI RICEBOWLS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="promo" class="promo">
        <div class="container">
            <picture>
                <source media="(orientation: portrait)" srcset="/wp-content/themes/improv/images/purple/hero-header-resize-mobile.webp" type="image/webp">
                <source media="(orientation: portrait)" srcset="/wp-content/themes/improv/images/purple/hero-header-resize-mobile.png" type="image/png">
                <source srcset="<?php echo get_template_directory_uri() . '/images/promo.webp'; ?>" type="image/webp">
                <img class="event-1" src="?php echo get_template_directory_uri() . '/images/promo.png'; ?>" alt="purple main" >
            </picture>
        </div>
    </section>

</main>

<?php get_footer(); ?>