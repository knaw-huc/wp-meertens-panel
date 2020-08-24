<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );
		$type = get_post_meta($post->ID, 'show_list_of', true);
		$idd = $post->ID;


	endwhile; // End of the loop.

	?>

</main><!-- #primary -->

<?php

get_footer();
