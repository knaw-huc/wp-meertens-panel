<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */



     $cleanMenu = wp_nav_menu( array(
       'menu_id'        => 'primary-menu',
       'echo' => false,
       'depth'=> 1,
     ) );
     //echo $cleanMenu;




?>

</div><!-- #page -->
<footer class="footer">
  <div class="hcBasicSideMargin xCols">

    <?php
    if ( get_theme_mod('footer_block1') != '' ) {
      echo '<div>'.get_theme_mod('footer_block1').'</div>';
    }

    if ( get_theme_mod('footer_block2') != '' ) {
      echo '<div>'.get_theme_mod('footer_block2').'</div>';
    }

    if ( get_theme_mod('footer_block3') != '' ) {
      echo '<div>'.get_theme_mod('footer_block3').'</div>';
    }

    //if ( get_theme_mod('footer_block4') != '' ) {
      echo '<div class="footernav"><a href="/">Home</a>'.strip_tags($cleanMenu,"<a>").'</div>';
    //}

    if ( get_theme_mod('footerTwitterId') != '' ) {
      echo '<div><a href="https://twitter.com/'.get_theme_mod('footerTwitterId').'"><img class="twitterIcon" src="'.get_bloginfo( 'template_url' ).'/images/icon-twitter.png">'.get_bloginfo( 'name' ).' on Twitter</a></div>';
    }

     ?>


  </div>
</footer>

<?php wp_footer(); ?>
<script>
  <?php echo get_theme_mod('analyticsCode') ?>
</script>

</body>
</html>
