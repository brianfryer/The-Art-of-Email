<?php

/* =========================================================================== *
 *  Register navigation menus  *
 * =========================== */

if (!function_exists('wartofemail_register_menus')) {
    function artofemail_register_menus() {
        register_nav_menus(
            array(
                'members-nav' => __( 'Members Navigation' ),
                'public-nav'  => __( 'Public Navigation' ),
                'bottom-nav'  => __( 'Bottom Navigation' )
            )
        );
    }
}
add_action( 'init', 'artofemail_register_menus' );
