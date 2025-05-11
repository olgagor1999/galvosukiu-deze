<?php
function exit_game_customize_register($wp_customize) {
    // Add a section for the theme settings
    $wp_customize->add_section('exit_game_settings', array(
        'title'    => __('Theme Settings', 'exit-game'),
        'priority' => 30,
    ));

    // Add a setting for the site logo
    $wp_customize->add_setting('exit_game_logo', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    // Add a control for the site logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'exit_game_logo_control', array(
        'label'    => __('Upload Logo', 'exit-game'),
        'section'  => 'exit_game_settings',
        'settings' => 'exit_game_logo',
    )));

    // Add a setting for the footer text
    $wp_customize->add_setting('exit_game_footer_text', array(
        'default'   => __('© 2023 Exit Game. All rights reserved.', 'exit-game'),
        'transport' => 'refresh',
    ));

    // Add a control for the footer text
    $wp_customize->add_control('exit_game_footer_text_control', array(
        'label'    => __('Footer Text', 'exit-game'),
        'section'  => 'exit_game_settings',
        'settings' => 'exit_game_footer_text',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'exit_game_customize_register');
?>