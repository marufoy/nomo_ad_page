<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
?>