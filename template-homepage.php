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
            <div class="row">
                <div class="col">
                    pic
                </div>
                <div class="col">
                    text
                </div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>