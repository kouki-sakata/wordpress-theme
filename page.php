<?php get_header(); ?>

<div class="container">
    <main>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
                <?php
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>