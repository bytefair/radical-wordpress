<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php
            wp_title( '-', true, 'right' );
            bloginfo( 'name' );
        ?></title>
        <?php   wp_deregister_script( 'jquery' );
                wp_register_script(
                    'jquery',
                    get_template_directory_uri().'/js/jquery-1.8.2.js',
                    array(),
                    '1.8.2',
                    true );
                wp_enqueue_script( 'jquery' ); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
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

            <div id="primary" class="site-content">
                <div id="content">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <!-- your content codes go here -->
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>
                        <?php _e('Sorry, no posts matched your criteria.'); ?>
                    </p>
                <?php endif; ?>
                </div><!-- #content -->
            </div><!-- #primary .site-content -->

        </div>
        <?php wp_footer(); ?>
    </body>
</html>
