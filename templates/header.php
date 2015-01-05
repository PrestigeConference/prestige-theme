<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(' | ', true, 'right'); ?></title>
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

    <script src="//use.typekit.net/nub6fgu.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <?php wp_head(); ?>

    <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
<body <?php body_class(); ?>>
<div class="wrapper" role="document" id="skrollr-body">
    <header class="header-main"
        data-top-top="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% 200px;">
        <section class="sponsors--menu-button_wrapper">
            <div class="sponsors--menu-button_inner">
                <div class="logo-sponsors">
                    <section class="prestige-logo_small">
                        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png 1x <?php echo get_template_directory_uri(); ?>/assets/img/logo_2x.png 2x" alt="Prestige Conference" /></a>
                    </section>
                    <section class="primary-sponsors">
                        <a href="http://gravityforms.com">
                            <span data-picture data-alt="Gravity Forms">
                                <span data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/gravity-forms-logo_header.png"></span>
                                <span data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/gravity-forms-logo_header_2x.png"  data-media="(-webkit-min-device-pixel-ratio: 2), (min--moz-device-pixel-ratio: 2), (min-device-pixel-ratio: 2)"></span>
                                <noscript>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sponsor-logos/gravity-forms-logo_header.png" alt="Gravity Forms">
                                </noscript>
                            </span>
                        </a>
                        <!-- <a href="http://9seeds.com">
                            <span data-picture data-alt="9seeds">
                                <span data-src="<?php /*echo get_template_directory_uri(); */?>/assets/img/sponsor-logos/9seeds-logo_header.png"></span>
                                <span data-src="<?php /*echo get_template_directory_uri(); */?>/assets/img/sponsor-logos/9seeds-logo_header_2x.png"  data-media="(-webkit-min-device-pixel-ratio: 2), (min--moz-device-pixel-ratio: 2), (min-device-pixel-ratio: 2)"></span>
                                <noscript>
                                    <img src="<?php /*echo get_template_directory_uri(); */?>/assets/img/sponsor-logos/9seeds-logo_header.png" alt="9seeds">
                                </noscript>
                            </span>
                    </a>-->
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
                    </section>
                </div>
                <button id="openMainMenu" class="open-main-menu open-button"><span>Open Main Menu</span></button>
            </div>

        </section>
        <div class="header--inner">
            <h1 class="header--blog-name">
                <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                    <div class="blog-name">
                        <?php bloginfo('name'); ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prestige-logo.png" alt="<?php bloginfo('name'); ?>" />
                </a>
                <?php if(is_front_page()): ?>
                <div class="header--subtitle">
                    <span class="subtitle--tagline">A Premium Business and <span>Career Development Conference</span></span>
                    February 27-28, 2015
                </div>
                <?php endif; ?>

            </h1>
            <?php if(is_front_page()): ?>
            <a href="/tickets/" class="button button_tickets">Register Now</a>
            <!--<section class="header--hosted-in">
                Hosted by <a href="http://innevation.com"><img src="<?php /*echo get_template_directory_uri(); */?>/assets/img/sponsor-logos/innevation-logo_header.png" alt="Innevation"></a> and <a href="http://9seeds.com"><img src="<?php /*echo get_template_directory_uri(); */?>/assets/img/sponsor-logos/9seeds-logo_header.png" alt="9seeds"></a> in <strong>Las Vegas, Nevada</strong> and <strong>streamed live</strong> wherever you are
            </section>-->
            <?php endif; ?>
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