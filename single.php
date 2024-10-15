<?php get_header(); ?>

<div class="container">
    <main>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="meta">
                        <span class="date"><?php the_date(); ?></span>
                        <span class="author"><?php the_author(); ?></span>
                    </div>
                    <?php the_content(); ?>
                    <?php comments_template(); ?>
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