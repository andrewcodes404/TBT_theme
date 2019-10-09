<div data-aos="fade-in"  class="nav-mobile-wrapper nav-stick-to-top" id="nav-mobile-wrapper">

  <a href="<?php echo get_home_url(); ?>">
    <div class="nav-movile-logo">
      <?php if (!is_front_page()) : ?>
        <img id="nav-logo-white" class="display-block" src="<?php echo get_template_directory_uri(); ?>/images/graphics/logo-white.png" alt="">
      <?php endif; ?>

      <img id="nav-logo-black" class="display-none" src="<?php echo get_template_directory_uri(); ?>/images/graphics/logo-black.png" alt="">
    </div>

  </a>
  <div class="menu-btn menu-mobile-open-btn burger-white" id="menu-mobile-open-btn">
    <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/burger.svg")); ?>


  </div>

  <div class="menu-mobile" id="menu-mobile">

    <div class="menu-btn menu-mobile-close-btn" id="menu-mobile-close-btn">
      <img src="<?php echo get_template_directory_uri(); ?>/images/graphics/menu-mobile-close-btn.png" alt="">
    </div>

    <?php wp_nav_menu(['theme_location' => 'mobile']); ?>
  </div>

</div>



<div data-aos="fade-in"  class="nav-desktop-wrapper nav-stick-to-top" id="nav-desktop-wrapper">
  <div class="nav-desktop" id="nav-desktop">
    <div class="nav-desktop-logo" id="nav-desktop-logo">
      <a href="<?php echo get_home_url(); ?>">

        <!-- white logo for NOT home page -->
        <?php if (!is_front_page()) {
          echo '<div id="nav-desktop-logo-img-white">' . file_get_contents(get_theme_file_uri("/images/graphics/svg/logo-white.svg")) . '</div>'; } ?>

        <!-- black logo for scroll down -->

        <div id="nav-desktop-logo-img-black" class="nav-desktop-logo-img-black">
          <?php echo file_get_contents(get_theme_file_uri("/images/graphics/svg/tbt-logo-black.svg")); ?>
        </div>



      </a>
    </div>


    <?php
    $menuParameters = array(
      'theme_location' => 'desktop',
    );
    wp_nav_menu($menuParameters);
    ?>
  </div>

</div>