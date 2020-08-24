    <?php


    wp_reset_postdata();

    $args = array(
        'post_type' => 'person',
        'order'     => 'ASC',
        'orderby' => 'name',
        'showposts' => 100,

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
