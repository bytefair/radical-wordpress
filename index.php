<?php get_header(); ?>

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

<?php get_footer(); ?>
