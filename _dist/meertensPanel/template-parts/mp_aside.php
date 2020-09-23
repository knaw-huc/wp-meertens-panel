<div class="mpSidebar">
  <div class="mpBrand">
    <img src="<?php bloginfo('template_url'); ?>/images/logo-meertensPanel.png" alt="" class="mpLogo">
  </div>

  <nav class="mpNav">

    <?php
      $cleanMenu = wp_nav_menu( array(
        'menu_id'        => 'primary-menu',
        'echo' => false,
        'depth'=> 1,
      ) );
      echo strip_tags($cleanMenu, "<a>");
      //echo $cleanMenu;

    ?>


  </nav>



  <!-- if not logged in -->
  <div class="mpLogin">
    Wilt u uw gegevens aanpassen? Log dan hier in.<br>
    <button type="button" onclick="window.location.href='https://www.meertens.knaw.nl/mpgebruikers/'">Login</button>
  </div>
</div>
