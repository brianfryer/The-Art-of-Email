<?php
if ( isset($category) ) { $categoryPlaceHolder = $category; }
$category = get_the_category();
?>
<section class="sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("main-sidebar") ) : endif ?>
    <?php if ( !is_404() ) {?>
    <h1 class="page-title"><?php
        if ( is_single() ) {
            // display category name for posts
            echo $category[0]->name;
        } else if ( is_category() ) {
            // display category name for category pages
            single_cat_title();
        } else if ( is_page() ) {
            // display parent name for pages
            echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
        } else {
            // fallback
            the_title();
        }
        ?></h1>
    <hr />
    <?php } ?>
    <nav class="sidebar-nav">
        <ul class="menu"><?php
            // display dashboard widgets
            if ( is_home() ) {
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("dashboard-widgets") ) : endif;
            }
            //
            if ( is_page('videos') ) {
                $categoriesArgs = array(
                    'orderby'      => 'id',
                    'order'        => 'ASC',
                    'hierarchical' => false,
                    'parent'       => 0 // only main categories; no sub-categories
                );
                $categories = get_categories($categoriesArgs);
                foreach ($categories as $cat) {
                    //print_r($cat);
                    query_posts($query_string."&cat=".$cat->cat_ID."&orderby=menu_order&posts_per_page=1");
                    while ( have_posts() ) : the_post(); ?>
                        <li class="category-page menu-item">
                            <a class="floatleft" href="<?php the_permalink(); ?>"><?php echo $cat->cat_name; ?></a>
                            <!--<span class="floatleft tag"><?php echo $cat->category_count; ?> videos</span>-->
                            <a class="floatright tiny button" href="<?php echo the_permalink(); ?>">Watch Now <i class="icon-play-sign"></i></span></a>
                        </li><?php
                    endwhile;
                    wp_reset_query();
                }
            }
            // display list of posts in same category (siblings)
            if ( is_single() || is_category() ) {
                $siblingArgs = array(
                    'cat'     => $category[0]->cat_ID,
                    'orderby' => 'menu_order',
                    'order'   => 'ASC'
                );
                $siblings = null;
                $siblings = new WP_Query( $siblingArgs );
                while ( $siblings->have_posts() ) : $siblings->the_post(); ?>

                    <li class="sibling-page menu-item<?php if ( is_single( $post->ID ) ) { ?> active<?php } ?>">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?> <?php if ( is_single( $post->ID ) ) { ?><i class="floatright icon-arrow-right"></i> <?php } else { ?> <span class="floatright tiny button">Watch Now <i class="icon-play-sign"></i></span><?php } ?></a>
                    </li>

                    <?php endwhile;
                wp_reset_postdata();
            }
            // display list of pages belonging to same parent (children)
            if ( is_page() ) {
                $childArgs = array(
                    'post_parent' => artofemail_get_ancestor(),
                    'post_type' => 'page',
                    'posts_per_page' => '-1',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $child = null;
                $child = new WP_Query($childArgs);
                if ($child->have_posts()) : while ($child->have_posts()) : $child->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="sibling-page <?php if ( is_page( $post->ID ) ) { echo 'icon-arrow-left';} ?>"><?php the_title(); ?></a>
                    </li>
                    <?php endwhile; endif;
                wp_reset_query();
            } ?>
        </ul>
    </nav>
</section>
<?php if ( isset($categoryPlaceHolder) ) { $category = $categoryPlaceHolder; }; ?>
