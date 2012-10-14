<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '-', true, 'right' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="site-wrapper">

            <header id="masthead" class="site-header">
                <hgroup>
                    <h1 class="site-title">
                        <a href="<?php echo home_url( '/' ); ?>">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
                    <h2 class="site-description">
                        <?php bloginfo( 'description' ); ?>
                    </h2>
                </hgroup>
            </header><!-- #masthead .site-header -->
