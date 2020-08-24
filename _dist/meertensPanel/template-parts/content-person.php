<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-content">
		<div class="">
			<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'thumbnail' );
						} else {
							echo '<img src="'.get_bloginfo( 'template_url' ).'/images/avatar.png" >';
						}
						?>
		</div>
		<div class="">
			<?php echo get_the_title(); ?>
			<div class="smallGrey">
			<?php
			echo infNoteEmpty(get_post_meta($post->ID, 'function_role', true), '', '');

			if (get_post_meta($post->ID, 'link_to_bio_or_linkedin', true) != '') {
				echo '<br><a href="'.get_post_meta($post->ID, 'link_to_bio_or_linkedin', true).'" target="_blanc">Personal page</a>';
			}
			?>


			</div>

		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->




	<div class="entry-content">
		<div class="itemBlock">
		<?php

		?>
		</div>
	</div>



</article><!-- #post-<?php the_ID(); ?> -->
