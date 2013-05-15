<?php get_header(); ?>

    <section class="main-content">
        <div class="wrapper">
            <?php the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </div>
    </section>

    <?php get_sidebar(); get_footer(); ?>
