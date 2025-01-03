<?php get_header(); ?>

<div class="latest-info">
    <h2>最新情報</h2>
    <div class="latest-info-container">  <!-- Slickが適用されるコンテナ -->
        <?php
        $args = array(
            'post_type' => 'shop_info', // カスタム投稿タイプの指定
            'posts_per_page' => 5, // 表示する投稿数
        );
        $latest_shops = new WP_Query($args);
        if ($latest_shops->have_posts()):  // 投稿があるかの確認
            while ($latest_shops->have_posts()):  // ループ開始
                $latest_shops->the_post();  // 現在の投稿データをセット
                $thumbnail = get_field('store_image');  // カスタムフィールドから画像データを取得
        ?>
                <div class="latest-info-item">  <!-- 各スライドとなるアイテム -->
                    <a href="<?php the_permalink(); ?>">  <!-- 投稿のパーマリンクをリンク先に設定 -->
                        <?php if ($thumbnail): ?>
                            <div class="latest-info-thumbnail">
                                <img src="<?php echo esc_url($thumbnail['url']); ?>" alt="<?php echo esc_attr($thumbnail['alt']); ?>">
                            </div>
                        <?php else: ?>
                            <div class="latest-info-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像">
                            </div>
                        <?php endif; ?>
                    </a>
                    <h3><?php the_title(); ?></h3>  <!-- 投稿タイトルを表示 -->
                </div>
        <?php
            endwhile;
            wp_reset_postdata();  // ループ後のクリーンアップ
        endif;
        ?>
    </div>
</div>


<div class="genre-container">
    <h2>掲載ジャンル</h2>
    <div class="genre-grid">
        <?php
        $genres = get_terms(array(
            'taxonomy' => 'genre',
            'hide_empty' => false,
        ));


        foreach ($genres as $genre):
            // ACFで設定したカスタムフィールドから画像URLを取得
            $genre_image = get_field('genre_image', $genre);

            if (!$genre_image) {
                $genre_image = get_template_directory_uri() . "/assets/images/no-image.png";
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