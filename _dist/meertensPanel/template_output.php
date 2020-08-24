<?php /* Template Name: Output list page  */ ?>
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

	//get_template_part( 'template-parts/outputList' );
	include( locate_template( 'template-parts/outputList.php', false, false ) );
	?>

	<?php if ($type != 'archive') { ?>
	<div class="itemBlock ">
		<a href="/about/archive/">See the archive</a>
	</div>
	<?php } ?>

</main><!-- #primary -->

<?php

get_footer();
