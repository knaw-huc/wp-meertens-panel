<?php /* Template Name: MP Home  */ ?>
<?php

get_header();
?>

<div class="mpFrame">
	<?php get_template_part( 'template-parts/mp_aside', '' ); ?>

	<div class="mpContent">
		<?php
		if ( have_posts() ):
			while ( have_posts() ) : the_post();
		?>

		<div class="mpHero">
		  <div class="mpTextWrap">
		    <div class="mpSiteTilte">Meertens<br>Panel</div>
		    <p><?php
						$blocks = parse_blocks( get_the_content() );
						echo $blocks[0]['innerHTML'];
						?></p>
		  </div>
		</div>


		<div class="mpHomeCols">
		  <div class="mpHomeCol1"><h2><?php echo $blocks[2]['innerHTML']; ?></h2>
				<?php echo $blocks[4]['innerHTML']; ?>
		    <p><button type="button" name="button" onclick="window.location.href='https://www.meertens.knaw.nl/mpgebruikers/mp/aanmelden'">Aanmelden</button></p>

		  </div>
		  <div class="mpHomeCol2">
		    <?php echo $blocks[6]['innerHTML']; ?>
				<?php echo $blocks[8]['innerHTML']; ?>
		  </div>
		</div>


		<div class="mpTextWrap">
			<?php
			for ($i=10; $i < count($blocks); $i++) {
				//if ( $i !=0 ) {
					echo render_block($blocks[$i]);
			//}
		}
			?>
		<div>




		<?php
			endwhile;
		endif; ?>

	</div>
</div>
