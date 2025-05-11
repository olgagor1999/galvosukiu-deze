<?php
/**
 * The template for displaying the footer
 *
 * @package Exit_Game_Theme
 */
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-columns">
            <!-- Left Column: Logo and Social Media -->
            <div class="footer-column footer-logo-social">
                <a href="<?php echo home_url(); ?>" class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paslapties-kodas-logo.png" alt="<?php bloginfo('name'); ?>">
                </a>
                <ul class="footer-social-icons">
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb_icon.png" alt="Facebook"></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/instagram_icon.png" alt="Instagram"></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/linkedin-icon.png" alt="LinkedIn"></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube_icon.png" alt="YouTube"></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/pinterest-icon.png" alt="Pinterest"></a></li>
                </ul>
            </div>

<!-- Middle Column: Menu -->
<div class="footer-column footer-menu">
    <div class="footer-title"><?php _e('Menu', 'exit-game-theme'); ?></div>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'menu_class'     => 'footer-menu-list',
        'container'      => false,
    ));
    ?>
</div>

<!-- Right Column: Contact -->
<div class="footer-column footer-contact">
    <div class="footer-title"><?php _e('Contact', 'exit-game-theme'); ?></div>
    <ul class="footer-contact-list">
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone_icon.png" alt="Phone Icon">
            <a href="tel:+370676222085">+370 6762 22085</a>
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/email.png" alt="Email Icon">
            <a href="mailto:info@galvosukiu-dezes.lt">info@galvosukiu-dezes.lt</a>
        </li>
        <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/location.png" alt="Location Icon">
            Lietuva, Vilnius
        </li>
    </ul>
</div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>