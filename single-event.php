<?php
/*
Template Name: Single Event
*/

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

<?php endwhile; endif; ?>
