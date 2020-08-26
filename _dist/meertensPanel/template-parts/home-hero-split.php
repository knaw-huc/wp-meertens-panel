<?php
wp_reset_postdata();

if ( have_posts() ):
	while ( have_posts() ) : the_post();
?>

<div class="splitScreen">
	<div class="splitScreenLeft" style="background-color: <?php echo get_theme_mod('blockLeftBGcolor', '#fff') ?>;
																			background-image: url(<?php echo get_theme_mod('blockLeftImg') ?>);
																			background-blend-mode: <?php echo get_theme_mod('blockLeftBlend') ?>"> </div>
	<div class="splitScreenRight" style="background-color: <?php echo get_theme_mod('blockRightBGcolor', '#fff') ?>;
																			background-image: url(<?php echo get_theme_mod('blockRightImg') ?>);
																			background-blend-mode: <?php echo get_theme_mod('blockRightBlend') ?>;
																				color: <?php echo get_theme_mod('blockRightTXTcolor', '#111') ?>">
		<div class="splitScreenContent hcBasicSideMargin">
			<h1><?php echo the_title(); ?></h1>
					<?php the_content(); ?>
		</div>
	</div>
</div>
<?php
	endwhile;
endif; ?>
