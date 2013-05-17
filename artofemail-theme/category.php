<?php get_header(); ?>
<h1 class="content-title"><?php single_cat_title(); ?></h1>
<?php if ( category_description() ) { ?>
<p><?php echo category_description(); ?></p>
<?php } ?>
<?php if ( have_posts() ) {
    query_posts($query_string."&orderby=menu_order");
    while ( have_posts() ) : the_post(); ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <ul class="video-actions">
            <li>Download Video (MP4)</li>
            <li>Download Audio (MP3)</li>
            <li>Download Transcript (PDF)</li>
        </ul>
    <?php endwhile; } else { ?>

        <h2 class="post-title"><?php _e('Sorry, there are no posts to display here.'); ?></h2>

<?php } get_footer();