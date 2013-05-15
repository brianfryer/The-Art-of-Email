<?php

/* =========================================================================== *
 *  Register widget ready areas  *
 * ============================= */

// Announcements (on /videos/ above the main-content)
register_sidebar(array(
    'id'            => 'announcements',
    'name'          => 'Announcements',
    'class'         => 'announcements',
    'before_widget' => '<div class="announcement-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="announcement-title">',
    'after_title'   => '</h3>'
));

// Breadcrumbs
register_sidebar(array(
    'id'            => 'breadcrumbs',
    'name'          => 'Breadcrumbs',
    'before_widget' => '<div class="breadcrumbs-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<span style="display: none;">',
    'after_title'   => '</span>'
));

// Main Sidebar (on all members-only pages/posts)
register_sidebar(array(
    'id'            => 'main-sidebar',
    'name'          => 'Main Sidebar',
    'before_widget' => '<div class="sidebar-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
));

// Dashboard Sidebar
register_sidebar(array(
    'id'            => 'dashboard-widgets',
    'name'          => 'Dashboard Widgets',
    'before_widget' => '<div class="sidebar-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
));
