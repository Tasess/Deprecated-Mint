<?php
/**
 * The Header for the theme, visible on all pages
 * 
 * This is the template that displys all of the <head> section and everything up until <div id="content">
 * 
 * 
 * @package Mint
 * @since Mint 1.0
 */
?>
<!doctype html>
<html>

    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >

    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-margin">
        <div class="mint-logo"><?php if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        } ?>
        
        <a class="navbar-brand mint-brand d-none d-md-block" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php bloginfo( 'name' ) ?> </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mint-link">
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu',
                    'container' => false,
                    'items_wrap' => '%3$s'
                ) );
            ?>
            <li class="d-lg-none d-xl-none nav-search"><?php get_search_form(); ?></li>
            </ul>

        </div>
    </nav>