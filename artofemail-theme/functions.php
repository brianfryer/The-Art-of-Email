<?php

require('php/styles_scripts.php');
require('php/nav_menus.php');
require('php/widget_areas.php');

/* =========================================================================== *
 *  Miscellaneous  *
 * =============== */

// Allow shortcodes to be used in widgets
add_filter('widget_text', 'do_shortcode');

// Check for
function artofemail_is_tree( $pid ) {
    global $post;
    if ( is_page($pid) ) {
        return true;
    }
    $anc = get_post_ancestors( $post->ID );
    foreach ( $anc as $ancestor ) {
        if( is_page() && $ancestor == $pid ) {
            return true;
        }
    }
    return false;
}

// Check to see if a page has any ancestors
function artofemail_get_ancestor() {
    global $post;
    if ($post->post_parent) {
        $ancestors=get_post_ancestors($post->ID);
        $root=count($ancestors)-1;
        $parent = $ancestors[$root];
    } else {
        $parent = $post->ID;
    }
    return $parent;
}
