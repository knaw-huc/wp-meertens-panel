<?php

get_header(); ?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) : the_post();
		$personId =  get_the_ID();

			get_template_part( 'template-parts/content', 'person' );

		endwhile; // End of the loop.
		?>

		<div class="entry-content">
			<h2>Publications and presentations</h2>
			<?php
			//get_template_part( 'template-parts/outputList-perPerson' );
			include( locate_template( 'template-parts/outputList-perPerson.php', false, false ) );

			?>
		</div><!-- .entry-content -->

	</main><!-- #primary -->

<?php
get_footer();
