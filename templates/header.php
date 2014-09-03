<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- ICONS -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <!-- FIRST FOUR ARE FOR IOS7 -->
    <!--<link href="<?php /*echo get_template_directory_uri(); */?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="<?php /*echo get_template_directory_uri(); */?>/images/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="<?php /*echo get_template_directory_uri(); */?>/images/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="<?php /*echo get_template_directory_uri(); */?>/images/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />-->

    <!-- STARTUP IMAGES -->
    <!-- iPhone 3GS, pre-2011 iPod Touch -->
    <!-- <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-320x460.png" media="screen and (max-device-width:320px)"> -->
    <!-- iPhone 4, 4S and 2011 iPod Touch-->
    <!-- <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-640x920.png" media="(max-device-width:480px) and (-webkit-min-device-pixel-ratio:2)"> -->
    <!-- iPhone 5 and 2012 iPod Touch -->
    <!-- <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-640x1096.png" media="(max-device-width:548px) and (-webkit-min-device-pixel-ratio:2)"> -->
    <!-- iPad landscape -->
    <!-- <link rel="apple-touch-startup-image" sizes="1024x748" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-1024x748.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:landscape)"> -->
    <!-- iPad Portrait -->
    <!-- <link rel="apple-touch-startup-image" sizes="768x1004" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-768x1004.png" media="screen and (min-device-width:481px) and (max-device-width:1024px) and (orientation:portrait)"> -->
    <!-- iPad landscape -->
    <!-- <link rel="apple-touch-startup-image" sizes="2048x1496" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-2048x1496.png" media="screen&#32;and&#32;(min-device-width:481px)&#32;and&#32;(max-device-width:1024px)&#32;and&#32;(orientation:landscape)&#32;and&#32;(-webkit-min-device-pixel-ratio:2)" /> -->
    <!-- iPad Portrait -->
    <!-- <link rel="apple-touch-startup-image" sizes="1536x2008" href="<?php echo get_template_directory_uri(); ?>/images/startup/startup-1536x2008.png" media="screen&#32;and&#32;(min-device-width:481px)&#32;and&#32;(max-device-width:1024px)&#32;and&#32;(orientation:portrait)&#32;and&#32;(-webkit-min-device-pixel-ratio:2)" /> -->


    <!-- MICROSOFT/WIN8/WIN8.1 SPECIFIC -->
    <!-- 8.1: Caption of pinned tile -->
    <!-- <meta name="application-name" content="Squeaky Clean WordPress Boilerplate"> -->
    <!-- 8/8.1: Background color of the tile. If excluded, will take the prominent color from the icon -->
    <!-- <meta name="msapplication-TileColor" content="#FFFFFF"/> -->
    <!-- 8.1: 70x70 1x logo for "tiny" tile -->
    <!-- <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/images/ms/tiny.png"> -->
    <!-- 8.1: 150x150 1x logo for "small" or "square" tile -->
    <!-- <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/images/ms/square.png"> -->
    <!-- 8.1: 310x150 1x logo for "wide" tile -->
    <!-- <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/images/ms/wide.png"> -->
    <!-- 8.1: 310x310 1x logo for "large" tile -->
    <!-- <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/images/ms/large.png"> -->
    <!-- 8.1: Frequency in minutes. URL of RSS feed to fetch content from. The second meta is for pulling from multiple RSS feeds. Only use ONE. -->
    <!-- <meta name="msapplication-notification" content="frequency=60;polling-uri=http://url.to.rss"> -->
    <!-- <meta name="msapplication-notification" content="frequency=60;polling-uri=http://url.to.rss; polling-uri2=http://url.to.second.rss; polling-uri3=http://url.to.third.rss"> -->
    <!-- 8: 144x144 icon if pinned to the start screen -->
    <!-- <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/ms/legacy-metro-tile.png"/> -->

    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
<body <?php body_class(); ?>>
<div class="wrapper" role="document" id="skrollr-body">
    <header class="header-main"
        data-top-top="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% 200px;">
        <section class="sponsors--menu-button_wrapper">
            <a href="http://gravityforms.com">
                        <span data-picture data-alt="Gravity Forms">
                            <span data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/gravity-forms-logo_header.png"></span>
                            <span data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/gravity-forms-logo_header_2x.png"  data-media="(-webkit-min-device-pixel-ratio: 2), (min--moz-device-pixel-ratio: 2), (min-device-pixel-ratio: 2)"></span>
                            <noscript>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/gravity-forms-logo_header.png" alt="Gravity Forms">
                            </noscript>
                        </span>
            </a>
            <a href="http://press75.com">
                        <span data-picture data-alt="Press75">
                            <span data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/press75-logo_header.png"></span>
                            <span data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/press75-logo_header_2x.png"  data-media="(-webkit-min-device-pixel-ratio: 2), (min--moz-device-pixel-ratio: 2), (min-device-pixel-ratio: 2)"></span>
                            <noscript>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/press75-logo_header.png" alt="Press75">
                            </noscript>
                        </span>
            </a>
            <a href="http://wpengine.com">
                        <span data-picture data-alt="WP Engine">
                            <span data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/wpengine-logo_header.png"></span>
                            <span data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/wpengine-logo_header_2x.png"  data-media="(-webkit-min-device-pixel-ratio: 2), (min--moz-device-pixel-ratio: 2), (min-device-pixel-ratio: 2)"></span>
                            <noscript>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/wpengine-logo_header.png" alt="WP Engine">
                            </noscript>
                        </span>
            </a>
            <span class="sponsors--presents">
                Present:
            </span>
            <button id="openMainMenu" class="open-main-menu open-button"><span>Open Main Menu</span></button>
        </section>
        <div class="header--inner">
            <h1 class="header--blog-name">
                <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                    <div class="blog-name">
                        <?php bloginfo('name'); ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prestige-logo.png" alt="<?php bloginfo('name'); ?>" />
                </a>
                <div class="header--subtitle">
                    <span class="subtitle--tagline">A Premium Interactive Business and <span>Career Development Conference</span></span>
                    October 3-4, 2014
                </div>

            </h1>
            <a href="/tickets/" class="button button_tickets">Register Now</a>
            <section class="header--hosted-in">
                St. Thomas University in Downtown <strong>Minneapolis, Minnesota</strong> and <strong>streamed live</strong> wherever you are
            </section>
        </div>
        <nav class="nav-main closed" role="navigation">
            <a class="close-menu-button" id="closeMainMenu">X</a>
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav-main--menu'));
            endif;
            ?>
        </nav>
    </header>