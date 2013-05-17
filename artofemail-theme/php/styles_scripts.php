<?php

/* =========================================================================== *
 *  Enqueue styles & scripts  *
 * ================= */

if (!function_exists('artofemail_load_styles_scripts')) {
    function artofemail_load_styles_scripts() {
        if (!is_admin()) {
            // Main stylesheet
            wp_enqueue_style( 'artofemail_screen', get_template_directory_uri() . '/css/main.css', null, null, 'screen' );
            // jQuery
            wp_deregister_script('jquery');
            wp_register_script('jquery', get_template_directory_uri() . '/js/libs/jquery.js', null, null );
            wp_enqueue_script('jquery');
            // Main JS file
            wp_register_script('artofemail_mainjs', get_template_directory_uri() . '/js/main.js', array('jquery', 'artofemail_foundation'), null );
            wp_enqueue_script('artofemail_mainjs');
            // Main FoundationJS
            wp_register_script('artofemail_foundation', get_template_directory_uri() . '/js/libs/foundation/foundation.js', array('jquery'), null );
            wp_enqueue_script('artofemail_foundation');
            // Foundation Cookies
            wp_register_script('artofemail_foundationCookies', get_template_directory_uri() . '/js/libs/foundation/foundation.cookie.js', array('artofemail_foundation'), null );
            wp_enqueue_script('artofemail_foundationCookies');
            // Foundation Alerts
            wp_register_script('artofemail_foundationAlerts', get_template_directory_uri() . '/js/libs/foundation/foundation.alerts.js', array('artofemail_foundation'), null );
            wp_enqueue_script('artofemail_foundationAlerts');
            // TypeKit
            wp_register_script('artofemail_typekit', '//use.typekit.net/qdc1vtl.js', null, null );
            wp_enqueue_script('artofemail_typekit');
        }
    }
}
add_action( 'wp_enqueue_scripts', 'artofemail_load_styles_scripts' );

// TypeKit
if (!function_exists('typekit_inline')) {
    function artofemail_typekit_inline() {
        if ( wp_script_is( 'artofemail_typekit', 'done' ) ) { ?>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <?php }
    }
}
add_action( 'wp_head', 'artofemail_typekit_inline' );
