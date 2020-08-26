<div class="">
  <?php the_title(); ?>
</div>
<div class="">
  <?php

  $pod = pods( 'output', get_the_id() );
  $related = $pod->field( 'outputpartners' );

  // relations partners
  if ( ! empty( $related ) ) {
    foreach ( $related as $rel ) {
      $id = $rel[ 'ID' ];
      $imgId = get_post_thumbnail_id( $id );
      $thumb_url = wp_get_attachment_image_src($imgId,'medium', true);
      echo '<img src="'.$thumb_url[0].'" class="partnerLogoSmall">';
    }
  }  ?>
</div>
