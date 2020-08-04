
<?php //hi
  wp_reset_postdata();

  $args = array(
      'order'     => 'DESC',
      'category_name' => 'blog'
  );
  query_posts( $args );

  if ( have_posts() ) :

    ?>
    <div class="itemBlock hcBasicSideMargin">
      <h2 class="hcMarginTop3">Blog</h2>
    </div>
    <div class="itemBlock hcMarginBottom3">
    <?php

    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/post-news' );
    endwhile;
  endif;
  ?>
</div>
