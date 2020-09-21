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

</footer>

<?php wp_footer(); ?>
<script>
  <?php echo get_theme_mod('analyticsCode') ?>
</script>

</body>
</html>
