<?php get_header(); ?>

<main>
    <section>
        <h1>Welcome to My WordPress Theme</h1>
        <!-- 投稿やページを表示する部分 -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>