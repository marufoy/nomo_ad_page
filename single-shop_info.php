<?php get_header(); ?>

<div class="single-shop-info">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- 店舗名 -->
        <?php 
        $store_name = get_field('store_name');
        if ($store_name): ?>
            <h2 class="store-name"><?php echo esc_html($store_name); ?></h2>
        <?php endif; ?>

        <div class="shop-content">
            <!-- メディアエリア -->
            <div class="media-area">
                <div class="custom-thumbnail">
                    <?php
                    $store_image = get_field('store_image');
                    if ($store_image): ?>
                        <img src="<?php echo esc_url($store_image['url']); ?>" alt="<?php echo esc_attr($store_image['alt']); ?>">
                    <?php endif; ?>
                </div>

                <div class="detail-images">
                    <?php
                    $detail_images = array(
                        get_field('detail_image_1'),
                        get_field('detail_image_2'),
                        get_field('detail_image_3'),
                    );

                    foreach ($detail_images as $detail_image):
                        if ($detail_image): ?>
                            <div class="detail-thumbnail">
                                <img src="<?php echo esc_url($detail_image['url']); ?>" alt="<?php echo esc_attr($detail_image['alt']); ?>">
                            </div>
                        <?php endif;
                    endforeach; ?>
                </div>
            </div>

            <!-- 店舗説明 -->
            <div class="shop-description">
                <?php echo get_the_content(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>