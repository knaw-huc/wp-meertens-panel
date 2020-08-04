<div class="">

  <div>
    <strong><em><?php the_title(); ?></em></strong> <span class="pub_add"><?php echo get_post_meta($post->ID, 'additional_notes', true); ?></span>
  </div>
  <div class="hcTxtColorGreyMid">
      <?php if (get_post_meta($post->ID, 'filelink', true) !='' ) {
              $linkId = get_post_meta($post->ID, 'filelink', false);
              $link_url = wp_get_attachment_url($linkId[0][ID]);

              echo '<a href="'.$link_url.'">Download</a>';
              //echo 'Download: '.$link_url.'';
      }
       ?>
       </div>
       <div class="hcTxtColorGreyMid">
       <?php if (get_post_meta($post->ID, 'linktosite', true) !='' ) {
               $link_url = get_post_meta($post->ID, 'linktosite', true);

               echo '<a href="'.$link_url.'" target="_blank" >See more...</a>';
               //echo 'More info:'.$link_url.'';
       }
        ?>
    </div>
    <span class="hcSmallTxt">
      <?php
        if (date("d-m-Y", strtotime(get_post_meta($post->ID, 'publication_date', true))) != '01-01-1970') {
          echo 'Published on '.date("d-m-Y", strtotime(get_post_meta($post->ID, 'publication_date', true)));
        }

       ?>
      by
      <?php

      $creators = get_post_meta( $post->ID, 'creators', false );
      $creatorsOut ='';
      for ($i=0; $i < count($creators); $i++) {
        $creatorsOut = $creatorsOut.', <a href="'.$creators[$i]['guid'].'">'.$creators[$i]['post_title'].'</a>';
      }
      $creatorsOut2 = substr_replace($creatorsOut, "", 0,2);
      echo $creatorsOut2;




        $creat2 = get_post_meta($post->ID, 'creator_2', true);
        $creat2Name = '<a href="'.$creat2['guid'].'">'.$creat2['post_title'].'</a>';
        if ($creat2 != '') {
          echo ', '.$creat2Name;
        }

        $creat3 = get_post_meta($post->ID, 'creator_3', true);
        $creat3Name =  '<a href="'.$creat3['guid'].'">'.$creat3['post_title'].'</a>';
        if ($creat3 != '') {
          echo ', '.$creat3Name;
        }

        $creat4 = get_post_meta($post->ID, 'creator_4', true);
        $creat4Name =  '<a href="'.$creat4['guid'].'">'.$creat4['post_title'].'</a>';
        if ($creat4 != '') {
          echo ', '.$creat4Name;
        }

        $creat5 = get_post_meta($post->ID, 'creator_5', true);
        //print_r ($creat5);
        $creat5Name =  '<a href="'.$creat5['guid'].'">'.$creat5['post_title'].'</a>';
        if ($creat5 != '') {
          echo ', '.$creat5Name;
        }

       ?>
      </span>
</div>
