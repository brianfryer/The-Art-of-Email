<section class="sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("main-sidebar") ) : endif ?>
    <hr />
    <h1 class="page-title"><?php
        $category = get_the_category();
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
            if ( is_single() ) {
                $args = array(
                    'cat'     => $category[0]->cat_ID,
                    'orderby' => 'ID',
                    'order'   => 'ASC'
                );
                $siblings = null;
                $siblings = new WP_Query( $args );
                while ( $siblings->have_posts() ) :
                    $siblings->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile;
                wp_reset_postdata();
            } else if ( is_page() ) {
                $childArgs = array(
                    'post_parent' => $post->ID,
                    'post_type' => 'page',
                    'posts_per_page' => '-1',
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );
                $child = null;
                $child = new WP_Query($childArgs);
                if ($child->have_posts()) : while ($child->have_posts()) : $child->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>" class="sibling-page <?php if ( aoe_is_tree( $post->ID ) ) { echo 'icon-arrow-left';} ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                    <?php endwhile; endif;
                wp_reset_query();
            } ?>
        </ul>
    </nav>
</section>

