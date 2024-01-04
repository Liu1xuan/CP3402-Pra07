<?php
function my_theme_enqueue_styles_scripts() {
    // Enqueue a CSS style file
    wp_enqueue_style('my-css-style', get_stylesheet_uri()); // This assumes you have a style.css file in your theme directory

    // Enqueue a JavaScript file
    wp_enqueue_script('my-js-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true); // Adjust the path and dependencies as needed
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles_scripts');
?>
