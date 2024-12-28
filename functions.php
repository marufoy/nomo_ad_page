<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


function create_custom_post_type() {
    register_post_type('shop_info', array(
        'labels' => array(
            'name' => '店舗情報',
            'singlar_name' => '店舗情報',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'shops'),
    ));
}
add_action('init', 'create_custom_post_type');


function create_genre_taxonomy() {
    register_taxonomy('genre', 'shop_info', array(
        'labels' => array(
            'name' => 'ジャンル',
            'singular_name' => 'ジャンル',
        ),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'genre'),
    ));
}
add_action('init', 'create_genre_taxonomy');


function mytheme_setup() {
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');

    // 投稿タイプごとにアイキャッチサイズを設定（任意）
    add_image_size('shop-thumbnail', 300, 200, true); // 幅300px、高さ200px、切り抜き
}
add_action('after_setup_theme', 'mytheme_setup');

?>



