<?php
/* Template Name: Videos Page */
get_header();
?>

        <div class="wrapper">
            <?php the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </div>

    <?php get_sidebar(); get_footer(); ?>
