<?php    
  $upload_dir = wp_upload_dir();
?>
<!-- nav -->
<nav class="nav" aria-label="site-menu">
  <!-- logo -->
  <div class="logo">
    <img src="<?=$upload_dir['baseurl'];?>/2021/04/jumpfx-logo.png" alt="jumppx logo">      
  </div>
  <!-- burger -->
  <button class="nav__hamburger">
    <i class="fas fa-bars"></i>
  </button>
  <!-- menu -->
  <div class="menu">
    <?php
      wp_nav_menu (
          array(
          'theme_location' => 'top-menu',
          )
      );
    ?>
    <button class="btn-primary">Schedule A Free Call</button>
  </div>
</nav>