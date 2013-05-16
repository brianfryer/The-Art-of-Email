<?php /* Template Name: Dashboard */
get_header();
the_post();
the_content();
$categoriesArgs = array(
    'orderby'      => 'id',
    'order'        => 'ASC',
    'parent'       => 0 // only main categories; no sub-categories
);
$categories = get_categories($categoriesArgs);
foreach ($categories as $cat) { ?>

    <div class="category">
        <img src="<?php echo bloginfo('template_url').'/'.$cat->category_nicename.'.png'; ?>" />
        <h2><a class="tiny button" href="<?php echo bloginfo('wpurl').'/'.$cat->slug; ?>"><?php echo $cat->name ?></a></h2>
        <ul class="meta-data">
            <li><?php echo $cat->count; ?> videos</li>
            <li><a class="tiny button" href="<?php echo bloginfo('wpurl').'/'.$cat->slug; ?>">Watch Now</a></li>
        </ul>
        <hr />
        <p><?php echo $cat->category_description; ?></p>
    </div>

<?php } get_footer();
