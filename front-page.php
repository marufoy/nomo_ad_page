<?php get_header(); ?>

<div class="latest-info">
    <h2>最新情報</h2>
    <?php

    $args = array(
        'post_type' => 'shop_info',
        'posts_per_page' => 5, // 最新5件を取得
    );
    $latest_shops = new WP_Query($args);

    if ($latest_shops->have_posts()) :
        while ($latest_shops->have_posts()) : $latest_shops->the_post();
            // 各店舗のタイトルとサムネイルを表示
            the_title('<h3>', '</h3>');
            if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail');
            }
            the_excerpt(); // 簡単な説明を表示
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

<div class="genre-container">
    <h2>掲載ジャンル</h2>
    <div class="genre-grid">
        <?php
        $genres = get_terms(array(
            'taxonomy' => 'genre',
            'hide_empty' => false,
        ));

        foreach ($genres as $genre) :
         // ACFで設定したカスタムフィールドから画像URLを取得
         $genre_image = get_field('genre_image', $genre);

         if(!$genre_image) {
            $genre_image = "http://adpagedev.local/wp-content/uploads/2024/12/keyboard-6753584_1280.jpg";
         }

        ?>
            <a href="<?php echo get_term_link($genre); ?>" class="genre-item">
                <div class="genre-image" style="background-image: url('<?php echo $genre_image ?>');">
                    <p><?php echo esc_html($genre->name); ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>


</div>

<?php get_footer(); ?>