<?php get_header(); ?>

<div class="single-shop-info">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            // 投稿のタイトルを表示
            echo '<h1>' . get_the_title() . '</h1>';

            // 投稿の内容（本文）を表示
            echo '<div class="shop-description">' . get_the_content() . '</div>';

            // アイキャッチ画像を表示
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('full'); // 'full'サイズで表示
            endif;

            // ACFのカスタムフィールドを表示（例えば店舗の住所や電話番号など）
            $custom_field_value = get_field('your_custom_field'); // ここでフィールド名を指定

            $store_name = get_field('store_name'); // 'store_name' は設定したフィールド名
            if ($store_name) {
                echo '<h2>' . esc_html($store_name) . '</h2>';
            }

            
            // 店舗説明を表示
            $store_description = get_field('store_description'); // 'store_description' は設定したフィールド名
            if ($store_description) {
                echo '<p>' . esc_html($store_description) . '</p>';
            }

            // 店舗画像を表示
            $store_image = get_field('store_image'); // 'store_image' は設定したフィールド名
            if ($store_image) {
                echo '<img src="' . esc_url($store_image['url']) . '" alt="' . esc_attr($store_image['alt']) . '">';
            }
            
            if ( $custom_field_value ) :
                echo '<p>' . $custom_field_value . '</p>';
            endif;

        endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>