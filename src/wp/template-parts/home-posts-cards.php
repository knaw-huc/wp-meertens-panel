
<?php //hi
  wp_reset_postdata();

  $blog = '';

  if (get_theme_mod('homeBuild_blog', false)) {
    $blog = 'blog';
  }

  $args = array(
      'order'     => 'DESC',
      'showposts'     => 6,
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

    <div class="itemBlockWide postCards hcBasicSideMargin">
    <?php

    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/post-cards' );
    endwhile;
  endif;
  ?>
</div>
