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
					<?php
					$blocks = parse_blocks( get_the_content() );
					echo $blocks[0]['innerHTML'];
					?>
		</div>
	</div>
</div>

<div class="entry-content">
	<?php
	for ($i=0; $i < count($blocks); $i++) {
		if ( $i !=0 ) { 
			echo render_block($blocks[$i]);
	}
}
	?>

</div>
<?php
	endwhile;
endif; ?>
