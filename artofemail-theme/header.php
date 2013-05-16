<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">

    <title><?php if ( !is_404() ) { the_title_attribute(); } else { echo '404: Page not found'; }  ?> | <?php bloginfo('name'); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_url'); ?>/img/favicon.png" />

    <!-- BEGIN wp_head() output -->
    <?php wp_head(); ?>
    <!-- END wp_head() output -->

</head>
<body <?php body_class($class); ?>>
<!--[if lt IE 8]>
<div class="chromeframe">
    <p class="text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
</div>
<![endif]-->

    <header class="masthead">
        <div class="wrapper<?php if ( is_front_page() ) { ?> skinny<?php } ?>">
            <h1 id="logo"><a href="<?php bloginfo('wpurl'); if ( is_user_logged_in() ) { echo '/videos/'; } ?>"><?php bloginfo('name'); ?></a></h1>
            <?php if ( is_user_logged_in() ) {
            wp_nav_menu(array(
                'theme_location' => 'members-nav',
                'container'      => 'nav',
                'container_id'   => 'primary-nav',
                'menu_class'     => 'menu',
                'menu_id'        => FALSE,
            )); } else {
            wp_nav_menu(array(
                'theme_location' => 'public-nav',
                'container'      => 'nav',
                'container_id'   => 'primary-nav',
                'menu_class'     => 'menu',
                'menu_id'        => FALSE,
            )); } ?>
        </div>
    </header>

    <div class="wrapper<?php if ( is_front_page() ) { ?> skinny<?php } ?>">
        <section class="main-content">
            <?php if ( !is_front_page() ) { if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("announcements") ) : endif; } ?>
