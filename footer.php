<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package houseoftaiko
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'houseoftaiko' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'houseoftaiko' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'houseoftaiko' ), 'houseoftaiko', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	const heroSlider = document.querySelector('.hero-slider');
	const heroSlides = document.querySelectorAll('.hero-slide');
	let currentSlide = 0;

	function showNextSlide() {
	heroSlides[currentSlide].classList.remove('active');
	currentSlide = (currentSlide + 1) % heroSlides.length;
	heroSlides[currentSlide].classList.add('active');
	}

	setInterval(showNextSlide, 5000); /* This will change the slide every 5 seconds */
</script>

</body>
</html>
