<?php get_header(); ?>

<div class="container">
    <main>
        <h1>404 - Page Not Found</h1>
        <p>Sorry, the page you are looking for does not exist.</p>
        <p>Perhaps you can return back to the <a href="<?php echo home_url(); ?>">homepage</a> and see if you can find what you are looking for.</p>
        <?php get_search_form(); ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>