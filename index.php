<?php get_header(); ?>

<main id="site-content" role="main">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>