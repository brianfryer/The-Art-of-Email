<?php
get_header();
the_post(); ?>
    <article class="content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </article>
<?php get_footer();
