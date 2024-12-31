<?php
function mytheme_enqueue_styles()
{
    wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


function create_custom_post_type()
{
    register_post_type('shop_info', array(
        'labels' => array(
            'name' => '店舗情報',
            'singular_name' => '店舗情報',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'shops'),
    ));
}
add_action('init', 'create_custom_post_type');


function create_genre_taxonomy()
{
    register_taxonomy('genre', 'shop_info', array(
        'labels' => array(
            'name' => 'ジャンル',
            'singular_name' => 'ジャンル',
        ),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'genre'),
        'public' => true, // 公開設定
        'show_ui' => true, // 管理画面で操作可能
        'show_admin_column' => true, // 投稿一覧に表示
        'show_in_rest' => true, // REST API対応（ブロックエディター含む）
    ));
}
add_action('init', 'create_genre_taxonomy');


function enqueue_slick() {
    // Slick CSS
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/slick/slick-theme.css', array('slick-css'), '1.8.1'); // slick.css に依存

    // Slick JavaScript
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick/slick.js', array('jquery'), '1.8.1', true);

    // カスタムスクリプト（slickを初期化するため）
    wp_enqueue_script('custom-slick-init', get_template_directory_uri() . '/assets/slick/custom-slick-init.js', array('slick-js'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_slick');


