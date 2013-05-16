<?php
get_header();
if ( have_posts() ) {
    // reverse default sort (chronological order instead of reverse chron. order)
    query_posts($query_string."&orderby=date&order=ASC");
    while ( have_posts() ) : the_post(); ?>

    <article class="content">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </article>

    <?php endwhile; } else { ?>

    <article class="content">
        <h2 class="post-title"><?php _e('Sorry, there are no posts to display here.'); ?></h2>
    </article>

<?php } get_footer();
