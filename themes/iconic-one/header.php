<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" type="image/png" href="/wp-content/uploads/favicon.png">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800,900">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css?ver=2.0.2" type="text/css" media="all">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="banner" class="<?php if(is_page('Home')): ?>b-home<?php else: ?>b-inner<?php endif ?>">
    <div class="<?php if(is_page('Home')): ?>b-home-wrap<?php else: ?>b-inner-wrap<?php endif ?>">
        <div id="header">
            <div id="h-top"><div class="limit">
                <div class="hrs">
                    <div class="hrs-txt">Part of Patriot Resilience Leader Institute</div>
                    <div class="hrs-social">
                        <a href="https://www.facebook.com/CampResilience/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com/CAMPRESILIENCE"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/CampResilience"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/campresilience/"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div></div>
            </div>
            <div class="limit"><div id="site-nav">
                <nav id="site-navigation" class="themonic-nav">
                  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-top', 'menu_class' => 'nav-menu' ) ); ?>
                </nav>
                <div id="logo"><a href="/" title="Willow Spring Vineyards"><img src="/wp-content/uploads/logo.png" alt=""></a></div>
                <nav class="right-menu">
                    <a href="/contact/">Contact</a>
                    <a href="/volunteer/">Volunteer</a>
                    <a href="/donate/" class="donate donate1">Donate</a>
                </nav>
                <?php echo do_shortcode("[responsive_menu]"); ?>
            </div></div>
        </div>

        <?php if(is_page('Home')): ?>
            <div class="b-over">
                <img src="/wp-content/uploads/txt-camp.png">
                <h1>RESILIENCE</h1>
                <p class="helping">HELPING THOSE WHO SERVED BOUNCE BACK<br>AND IMPROVE IN MIND, BODY, AND SPIRIT</p>
                <a class="discover_more primary" href="/about/">DISCOVER MORE</a>
                <div class="v-line first"></div><div class="v-line"></div><div class="v-line"></div>
                <p class="scroll">SCROLL DOWN</p>
                <div class="v-line first"></div><div class="v-line"></div><div class="v-line"></div>
                <div class="pin-wrap"><div class="pin"><div></div></div></div>
            </div>
            <div class="b-barn"></div>

        <?php else: ?>

            <div class="b-over banner-title">
                <?php if(is_archive('retreats') || is_singular('retreats')): ?>
                    <h1>Retreats</h1>
                <?php elseif(is_archive('tribe_events')): ?>
                    <h2>Retreats</h2>
                <?php elseif(is_singular('tribe_events')): ?>
                    <h1><?php the_title(); ?></h1>
                <?php elseif(strpos($_SERVER['REQUEST_URI'], "/news/") !== false || is_singular('post')): ?>
                    <h1>News</h1>
                <?php else: ?>
                    <h2><?php the_title(); ?></h2>
                <?php endif ?>
            </div>

        <?php endif ?>
    </div>
</div><!-- #banner -->

<?php if(is_page('Home')): ?>
    <?php get_template_part('part-home'); ?>
<?php endif ?>

<style type="text/css">
    .b-inner {background:url('<?php the_field( 'inner_banner', 'options' ); ?>') no-repeat center center / cover;}
    .b-home {background-image: url('<?php the_field( 'home_banner', 'options' ); ?>');}
</style>

<div id="page-wrap">
<div id="page" class="hfeed site">
    <div id="main" class="wrapper">

