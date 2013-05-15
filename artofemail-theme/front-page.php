<?php get_header(); ?>

    <section class="main-content">
        <div class="skinny wrapper">
            <?php the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </div>
    </section><!-- .content-container -->

<?php get_footer(); ?>
