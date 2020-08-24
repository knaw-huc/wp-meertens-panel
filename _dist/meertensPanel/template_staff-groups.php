<?php /* Template Name: List all staff in groups with order */ ?>
<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

	endwhile; // End of the loop.

	//$titleHeads = 'Project Leader/P.I.', 'Scientific Board', 'Steering Committee', 'Domain Expert/Advisor', 'Deputy Project Leader/Domain Expert', 'Project Coordinator/Financial Controller', 'Chair Steering Committee';


	wp_reset_postdata();


	//persons_on_a_page
	$pageArr = array(
			'key' => 'order',
			'value' => get_the_ID(),
			'compare' => '='
	);

	$args = array(
			'post_type' => 'person',
			'order'     => 'ASC',
			'orderby' => 'name',
			'showposts' => 100,
			'meta_query' => array(
							$pageArr
							)

			//'meta_value' => 'presentation'
	);
	query_posts( $args );
	if ( have_posts() ) :

		?>
		<div class="itemBlock cards">
		<?php
		while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/staffCard' );
		endwhile;
	endif;
	?>
	</div>

</main><!-- #primary -->

<?php

get_footer();
