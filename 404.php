<?php get_header(); ?>

<main>
    <section>
        <h1>404 - Page Not Found</h1>
        <p>Sorry, the page you are looking for might have been moved, deleted, or may never have existed.</p>

        <p>Try one of the following:</p>
        <ul>
            <li><a href="<?php echo home_url(); ?>">Go to the homepage</a></li>
            <li><a href="<?php echo get_search_link(); ?>">Search the site</a></li>
            <li><a href="<?php echo get_bloginfo('url'); ?>/sitemap.xml">View the sitemap</a></li>
        </ul>
    </section>
</main>

<?php get_footer(); ?>