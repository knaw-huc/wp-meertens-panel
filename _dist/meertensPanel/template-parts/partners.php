<div class="bgLightGrey">

    <?php
    wp_reset_postdata();

    $args = array(
        'post_type' => 'partners',
        'order'     => 'ASC'
    );
    query_posts( $args );

    if ( have_posts() ) :

      ?>
      <div class="itemBlock hcBasicSideMargin"><br>
        <h2 class="hcMarginTop3">Partners</h2>
      </div>
      <div class="partners">
      <?php

      while ( have_posts() ) : the_post();
      if ( has_post_thumbnail() ) {?>
        <div class="partnerItem">
          <a href="<?php echo get_post_meta($post->ID, 'partner_url', true); ?>">
            <img src="<?php the_post_thumbnail_url('medium') ?>">
          </a>
        </div>


      <?php }
      endwhile;
    endif;
    ?>
  </div>
</div>
