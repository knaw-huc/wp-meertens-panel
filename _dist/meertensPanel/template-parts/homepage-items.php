<div class="homepageItems">
  <?php
  wp_reset_postdata();

  $args = array(
      'post_type' => 'home_item',
      'orderby'   => 'meta_value_num',
	    'meta_key'  => 'order',
      'order'     => 'ASC'
  );
  query_posts( $args );

  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/homepage-item' );
    endwhile;
  endif;
  ?>
</div>
