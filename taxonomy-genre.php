<?php get_header(); ?>


<div class="container">
    <h1><?php single_term_title(); ?>の店舗情報</h1>
    <div class="shop-grid">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="shop-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="shop-image">
                            <?php the_post_thumbnail('small-thumbnail'); ?>
                            </div>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>このジャンルに該当する投稿がありません。</p>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>