<div class="">
  <div class="staffAvatar">
    <a href="<?php echo get_permalink() ?>"><?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'thumbnail' );
          } else {
            echo '<img src="'.get_bloginfo( 'template_url' ).'/images/avatar.png" >';
          }
          ?></a>
  </div>
  <div class="">
    <a href="<?php echo get_permalink() ?>"><?php
    echo get_the_title();
    ?></a>
    <div class="smallGrey">
    <?php
    echo infNoteEmpty(get_post_meta($post->ID, 'function_role', true), '', '');



    // if (get_post_meta($post->ID, 'link_to_bio_or_linkedin', true) != '') {
    //   echo '<a href="'.get_post_meta($post->ID, 'link_to_bio_or_linkedin', true).'" target="_blanc"> (Personal page)</a>';
    // }
    //echo '<br><a href="'.get_permalink().'" >Info and output</a>';
    ?>



    </div>

  </div>
</div>
