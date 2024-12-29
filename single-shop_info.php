<?php get_header(); ?>

<div class="single-shop-info">

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            
            // 店舗名を表示
            $store_name = get_field('store_name'); 
            if ($store_name) {
                echo '<h2 class="store-name">' . esc_html($store_name) . '</h2>';
            }
            ?>
            
            <div class="shop-content">
                <?php
                // 店舗画像を表示
                $store_image = get_field('store_image'); 
                if ($store_image) {
                    echo '<div class="custom-thumbnail">';
                    echo '<img src="' . esc_url($store_image['url']) . '" alt="' . esc_attr($store_image['alt']) . '">';
                    echo '</div>';
                }
                ?>
                
                <!-- 投稿本文を表示 -->
                <div class="shop-description">
                    <?php echo get_the_content(); ?>
                </div>
            </div>

        <?php endwhile;
    endif;
    ?>

</div>

<?php get_footer(); ?>