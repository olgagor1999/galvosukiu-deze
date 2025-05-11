<!-- filepath: c:\laragon\www\galvosukiu-dezes\wp-content\themes\exit-game-theme\header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>../assets/images/favicon.ico" sizes="16x16">



    <?php wp_head(); ?>
</head>
<body>
<!-- filepath: c:\laragon\www\galvosukiu-dezes\wp-content\themes\exit-game-theme\template-parts\header.php -->
<header class="site-header">
    <div class="container">
        <!-- Logo -->
        <div class="site-header__logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paslapties-kodas-logo.png" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="site-header__nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
            ));
            ?>
        </nav>

        <!-- Contact Information -->
        <div class="header-contact">
            <a href="tel:+37067622085" class="phone-number">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.png" alt="Phone Icon" class="phone-icon"> 
                +370 6762 2085
            </a>

             <!-- Mobile Navigation Toggle -->
            <button class="mobile-nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <a href="#" class="book-now-btn">Išsinuomoti</a>
        </div>

       
    </div>
    
    <!-- Mobile Menu Popup -->
    <div class="mobile-menu-popup">
  <div class="mobile-menu-popup-logo">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paslapties-kodas-logo.png" alt="<?php bloginfo('name'); ?>">
    </a>
  </div>
  <div class="mobile-menu-popup-close">
    <span class="close-icon"></span>
  </div>
  <div class="mobile-menu-popup-nav">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'menu_class'     => 'mobile-nav-menu',
      'container'      => false,
    ));
    ?>
  </div>
  <div class="mobile-menu-popup-search">
    <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="search-form">
        <button type="submit" class="search-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.svg" alt="Search Icon">
        </button>
        <input type="search" class="search-field" placeholder="Ieškoti..." value="<?php echo get_search_query(); ?>" name="s" />
    </form>
</div>
</div>
</div>
<?php
// Display the header widget area
if (is_active_sidebar('header-widget-area')) {
  echo '<div class="header-widget-area">';
  dynamic_sidebar('header-widget-area');
  echo '</div>';
}
?>
</header>
