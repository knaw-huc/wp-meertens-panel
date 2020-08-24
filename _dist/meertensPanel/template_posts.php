<?php /* Template Name: List allPosts  */ ?>
<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	// page
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.



	// posts
	wp_reset_postdata();

  $blog = '';

  if (get_theme_mod('homeBuild_blog', false)) {
    $blog = 'blog';
  }

  $args = array(
      'order'     => 'DESC',
      'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => array( $blog ),
                'operator' => 'NOT IN'
                )
            )
  );
  query_posts( $args );

  if ( have_posts() ) :

    ?>
		<div class="itemBlock"> <div class="allTagsLinks">Tags:&nbsp;<?php
			$tags = get_tags(array('get'=>'all'));
	    $output .= '';
	        if($tags) {
	        foreach ($tags as $tag):
	        $output .= '<span><a href="'. get_term_link($tag).'">'. $tag->name .'</a></span>';
	        endforeach;
	        } else {
	        _e('No tags created.', 'text-domain');
	        }
	    echo $output;
			?>

		</div></div>

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
