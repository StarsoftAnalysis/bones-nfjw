<!doctype html>
<?php $theme_uri = get_template_directory_uri(); ?>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="utf-8">
        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(''); ?></title>
        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo $theme_uri; ?>/library/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo $theme_uri; ?>/library/images/sax-clipart.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo $theme_uri; ?>/library/images/favicon.ico">
        <![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo $theme_uri; ?>/library/images/win8-tile-icon.png">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php
            $fontlist = array_map('basename', glob(get_template_directory() . '/library/fonts/*.woff'));
            foreach ($fontlist as $fontfile) {
                //echo "<!-- font: '$fontfile' -->\n";
                echo "      <link rel='preload' href='$theme_uri/library/fonts/$fontfile' as='font' type='font/woff' crossorigin>\n";
            }
        ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="container">
            <header class="header" role="banner">
                <div id="inner-header" class="wrap cf">
                    <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
                    <div id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></div>
                    <div id="description"><?php echo get_bloginfo('description'); ?></div>
                    <nav role="navigation">
                        <?php wp_nav_menu(array(
                            'container' => false,                           // remove nav container
                            'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                            'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
                            'menu_class' => 'nav top-nav cf',               // adding custom nav class
                            'theme_location' => 'main-nav',                 // where it's located in the theme
                            'before' => '',                                 // before the menu
                            'after' => '',                                  // after the menu
                            'link_before' => '',                            // before each link
                            'link_after' => '',                             // after each link
                            'depth' => 0,                                   // limit the depth of the nav
                            'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>
                    </nav>
                </div>
            </header>
