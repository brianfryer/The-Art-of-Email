<?php

/* =========================================================================== *
 *  Register widget ready areas  *
 * ============================= */

// Footer
if (!function_exists('register_sidebar')) {
    register_sidebar(array(
        'id'            => 'footer',
        'name'          => 'Footer',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}
