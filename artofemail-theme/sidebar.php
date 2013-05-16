<?php
if ( isset($category) ) { $categoryPlaceHolder = $category; }
$category = get_the_category();
?>
<section class="sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("main-sidebar") ) : endif ?>
    <hr />
    <h1 class="page-title"><?php
        // display category name for posts
        if ( is_single() ) {
            echo $category->name;
        }
        // display parent name for pages
        if ( is_page() ) {
            echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
        }
        ?></h1>
    <hr />
    <nav class="sidebar-nav">
        <ul><?php
            //
            if ( is_home() ) {
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("dashboard-widgets") ) : endif;
            }
            // display list of posts in same category (siblings)
            if ( is_single() || is_category() ) {
                $siblingArgs = array(
                    'cat'     => $category[0]->cat_ID,
                    'orderby' => 'ID',
                    'order'   => 'ASC'
                );
                $siblings = null;
                $siblings = new WP_Query( $siblingArgs );
                while ( $siblings->have_posts() ) : $siblings->the_post(); ?>

                    <li>
                        <a href="<?php the_permalink(); ?>" class="sibling-page <?php if ( is_single( $post->ID ) ) { echo 'icon-arrow-left';} ?>"><?php the_title(); ?></a>
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
