<?php get_header(); ?>

<div class="container">
    <h1><?php single_term_title(); ?>の店舗情報</h1>
    <div class="shop-grid">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="shop-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        // ACFで設定したサムネイル画像を取得
                        $thumbnail = get_field('store_image'); // 'store_image' はACFのフィールド名
                        if ($thumbnail): ?>
                            <div class="shop-image custom-thumbnail">
                                <img src="<?php echo esc_url($thumbnail['url']); ?>"
                                    alt="<?php echo esc_attr($thumbnail['alt']); ?>">
                            </div>
                        <?php else: ?>
                            <!-- デフォルト画像 -->
                            <div class="shop-image custom-thumbnail">
                                <img src="https://example.com/default-image.jpg" alt="デフォルト画像">
                            </div>
                        <?php endif; ?>
                        <p>
                            <h2><?php the_title(); ?></h2>
                            <?php
                            // ACFフィールド 'store_discription' を取得
                            $description = get_field('store_discription');

                            // フィールドが存在する場合にトリムして表示
                            if ($description): ?>
                                <div class="shop-discription">
                                    <p><?php echo wp_trim_words($description, 20, '...'); ?></p>
                                </div>
                            <?php else: ?>
                               <p>説明文はありません</p>
                            <?php endif; ?>
                            ?>
                        </p>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>このジャンルに該当する投稿がありません。</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>