<?php
$posttags = get_the_tags();
if ($posttags) {

  foreach($posttags as $tag) {
    $tageList = $tageList.'<span class="tag">'.$tag->name.'</span> ';
  }

}
?>

<div class="post hcBasicSideMargin">
  <a href="<?php the_permalink(); ?>">
    <strong><?php the_title(); ?></strong><br>
    <?php echo $tageList ?> <?php echo get_the_date(); ?> 

  </a>

  <?php if ( has_post_thumbnail() ) {?>
    <a href="<?php the_permalink(); ?>">
      <img src="<?php the_post_thumbnail_url('thumbnail') ?>" class="thumbnail">
    </a>
  <?php } ?>
</div>
