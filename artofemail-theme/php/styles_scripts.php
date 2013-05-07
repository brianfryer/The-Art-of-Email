<?php

/* =========================================================================== *
 *  Enqueue styles & scripts  *
 * ================= */

if (!function_exists('artofemail_load_styles_scripts')) {
    function artofemail_load_styles_scripts() {
        if (!is_admin()) {
            // Main stylesheet
            wp_enqueue_style( 'artofemail_screen', get_template_directory_uri() . '/css/main.css', null, null, 'screen' );
            // RequireJS
            wp_deregister_script( 'jquery' ); // deregistering jQuery since require.js will take care of that for us
            wp_deregister_script( 'require' );
            wp_register_script('require', '//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.5/require.min.js', null, null );
            wp_enqueue_script('require');
            // Main JS file
            wp_register_script('artofemail_mainjs', get_template_directory_uri() . '/js/main.js', null, null );
            wp_enqueue_script('artofemail_mainjs');
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
