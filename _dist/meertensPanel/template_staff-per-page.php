<?php /* Template Name: Selection of staff  */ ?>
<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.

	//get_template_part( 'template-parts/outputList' );
	include( locate_template( 'template-parts/staffList-page.php', false, false ) );
	?>

</main><!-- #primary -->

<?php

get_footer();
