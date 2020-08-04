<?php
get_header();
?>

<main id="primary" class="site-main">
	<article>
		<header class="entry-content">
			<h1>Gezocht op #<?php single_tag_title(); ?></h1>
		</header>
	</article>

	<?php


  if ( have_posts() ) :

    ?>

    <div class="itemBlockWide postCards">
    <?php

    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/post-cards' );
    endwhile;
  endif;




	?>

</main><!-- #primary -->

<?php

get_footer();
