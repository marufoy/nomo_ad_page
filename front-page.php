// front-page.php

<?php get_header(); ?>

<!-- 最新情報 -->
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
</div>

<!-- ジャンル別画像 -->
<div class="genre-images">
    <a href="<?php echo get_term_link('飲食', 'genre'); ?>">
        <img src="飲食の画像URL" alt="飲食">
        <p>飲食</p>
    </a>
    <a href="<?php echo get_term_link('小売店', 'genre'); ?>">
        <img src="小売店の画像URL" alt="小売店">
        <p>小売店</p>
    </a>
    <!-- 他のジャンルも同様に -->
</div>

<?php get_footer(); ?>