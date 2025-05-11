<?php


function register_posts_sidebar() {
    register_sidebar(array(
        'name' => 'Recent Posts',
        'id' => 'posts-sidebar',
        'description' => 'A sidebar block for recent posts from the blog.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'register_posts_sidebar');


function enqueue_audio_page_styles() {
    if ( is_page_template( 'page-audio.php' ) ) {
        wp_enqueue_style( 'audio-page-style', get_template_directory_uri() . '/assets/css/audio-page.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_audio_page_styles' );

function enqueue_audio_player_scripts() {
    if ( is_page_template( 'page-audio.php' ) ) {
        wp_enqueue_script( 'audio-player-script', get_template_directory_uri() . '/assets/js/audio-player.js', array(), '1.0.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_audio_player_scripts' );

function enqueue_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );

// Register a new widget area for the header
function register_header_widget_area() {
    register_sidebar(array(
      'name' => 'Header Widget Area',
      'id' => 'header-widget-area',
      'description' => 'Widget area for the header',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    ));
  }
  add_action('widgets_init', 'register_header_widget_area');


// filepath: [functions.php](http://_vscodecontentref_/4)
function enqueue_front_page_styles() {
    if (is_front_page()) {
        wp_enqueue_style('front-page-styles', get_template_directory_uri() . '/assets/css/front-page.css', array(), '1.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_front_page_styles');

function enqueue_single_post_css() {
    if ( is_single() ) {
        wp_enqueue_style( 'single-post', get_template_directory_uri() . '/assets/css/single-post.css', array(), '1.0.0', 'all' );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_single_post_css' );

// Enqueue styles and scripts
function exit_game_theme_scripts() {
    // Enqueue styles
    wp_enqueue_style('exit-game-theme-style', get_stylesheet_uri());
    wp_enqueue_style('exit-game-theme-main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('blog-template', get_template_directory_uri() . '/assets/css/blog-template.css', array(), '1.0.0', 'all');

    // Enqueue scripts
    wp_enqueue_script('exit-game-theme-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    wp_enqueue_script('blog-template', get_template_directory_uri() . '/assets/js/blog-template.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'exit_game_theme_scripts');


// Register widget areas
function exit_game_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'exit-game-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'exit-game-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'exit_game_theme_widgets_init');

//Register the Form Submission Handler
function handle_contact_form_submission() {
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'submit_contact_form') {
        // Sanitize and validate form inputs
        $name = sanitize_text_field($_POST['name'] ?? '');
        $phone = sanitize_text_field($_POST['phone'] ?? '');
        $email = sanitize_email($_POST['email'] ?? '');
        $delivery_date = sanitize_text_field($_POST['delivery-date'] ?? '');
        $delivery_time = sanitize_text_field($_POST['delivery-time'] ?? '');
        $gift_placement = sanitize_text_field($_POST['gift-placement'] ?? '');
        $delivery_option = sanitize_text_field($_POST['delivery-option'] ?? '');
        $delivery_address = sanitize_text_field($_POST['delivery-address'] ?? '');
        $payment_option = sanitize_text_field($_POST['payment-option'] ?? '');
        $privacy_policy = isset($_POST['privacy-policy']) ? 'Yes' : 'No';
        $reservation_notice = isset($_POST['reservation-notice']) ? 'Yes' : 'No';

        // Prepare the email content
        $message = "New contact form submission:\n\n";
        $message .= "Name: $name\n";
        $message .= "Phone: $phone\n";
        $message .= "Email: $email\n";
        $message .= "Delivery Date: $delivery_date\n";
        $message .= "Delivery Time: $delivery_time\n";
        $message .= "Gift Placement: $gift_placement\n";
        $message .= "Delivery Option: $delivery_option\n";
        $message .= "Delivery Address: $delivery_address\n";
        $message .= "Payment Option: $payment_option\n";
        $message .= "Privacy Policy Accepted: $privacy_policy\n";
        $message .= "Reservation Notice Accepted: $reservation_notice\n";

        // Send the email
        $to = 'your-email@example.com'; // Replace with your email address
        $subject = 'New Contact Form Submission';
        $headers = ['Content-Type: text/plain; charset=UTF-8'];

        wp_mail($to, $subject, $message, $headers);

        // Redirect back to the form page with a success message
        wp_redirect(add_query_arg('form_submitted', 'true', wp_get_referer()));
        exit;
    }
}
add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');



// Add custom image sizes
function exit_game_theme_image_sizes() {
    add_image_size('custom-size', 800, 600, true); // Example custom size
}
add_action('after_setup_theme', 'exit_game_theme_image_sizes');

// Include customizer and template functions
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-functions.php';

// Disable WordPress version in head for security
remove_action('wp_head', 'wp_generator');

// Add custom excerpt length
function exit_game_theme_excerpt_length($length) {
    return 20; // Set excerpt length to 20 words
}
add_filter('excerpt_length', 'exit_game_theme_excerpt_length');

// Add custom excerpt "read more" text
function exit_game_theme_excerpt_more($more) {
    return '... <a href="' . get_permalink() . '">' . __('Read More', 'exit-game-theme') . '</a>';
}
add_filter('excerpt_more', 'exit_game_theme_excerpt_more');
?>