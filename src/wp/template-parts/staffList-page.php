    <?php


    wp_reset_postdata();


    //persons_on_a_page
    $pageArr = array(
        'key' => 'persons_on_a_page',
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
