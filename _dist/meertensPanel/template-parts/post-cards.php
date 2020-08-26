<?php
$posttags = get_the_tags();
if ($posttags) {

  foreach($posttags as $tag) {
    $tageList = $tageList.'<span class="tag">'.$tag->name.'</span> ';
  }

}
?>

<div class="postCard" onclick="javascript:location.href='<?php the_permalink(); ?>'">
  <div class="postCardImage">

      <img src="<?php the_post_thumbnail_url('medium') ?>">

  </div>

  <div class="postCardText">

      <strong><?php the_title(); ?></strong><br>
      <span class="smallGrey"> <?php echo get_the_date(); ?></span><br>
      <?php the_content(); ?>
      <div class="smallGrey">
        <?php echo $tageList ?>
      </div>

  </div>





  <?php if ( has_post_thumbnail() ) {?>

  <?php } ?>
</div>
