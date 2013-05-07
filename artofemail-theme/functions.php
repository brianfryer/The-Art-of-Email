<?php

require('php/styles_scripts.php');
require('php/nav_menus.php');
require('php/widget_areas.php');

/* =========================================================================== *
 *  Miscellaneous  *
 * =============== */

// Allow shortcodes to be used in widgets
add_filter('widget_text', 'do_shortcode');
