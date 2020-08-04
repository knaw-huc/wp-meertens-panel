
<?php //hi
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
    <div class="itemBlock hcBasicSideMargin">
      <h2 class="hcMarginTop3">News</h2>
    </div>
    <div class="itemBlock">
    <?php

    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/post-news' );
    endwhile;
  endif;
  ?>
</div>
