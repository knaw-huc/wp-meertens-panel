<?php
/*
Template Name: Only navigation
*/
?>
<?php
  $cleanMenu = wp_nav_menu( array(
    'menu_id'        => 'menu-1',
    'echo' => false,
    'depth'=> 1,
  ) );
  echo $cleanMenu;
?>
