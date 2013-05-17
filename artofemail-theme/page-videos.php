<?php /* Template Name: Dashboard */
get_header();
the_post();
the_content();
$categoriesArgs = array(
    'orderby'      => 'id',
    'order'        => 'ASC',
    'hierarchical' => false,
    'parent'       => 0 // only main categories; no sub-categories
);
$categories = get_categories($categoriesArgs);
foreach ($categories as $cat) {
    // <?php echo bloginfo('template_url').'/img/'.$cat->category_nicename.'.png'; ?>
    <h1 class="content-title"><?php echo $cat->name ?></h1>
    <p><?php echo $cat->category_description; //print_r($cat) ?></p>
    <nav class="video-list">
        <ul class="menu"><?php
        $videoArgs = array( 'cat' => $cat->cat_ID );
        $videos = new WP_Query( $videoArgs );
        while ( $videos->have_posts() ) : $videos->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; wp_reset_query(); ?>
        </ul>
    </nav>
    <hr />

<?php } get_footer();
