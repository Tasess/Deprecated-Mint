<?php
/**
 * 
 * The template for displaying posts
 * 
 * @package Mint
 * @since 1.0
 */
get_header(); ?>

<div class="container single-post">
    <div class="row">
        <div class="col-md-8 post-content shadow">

                <?php if ( have_posts() ): ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/post/content', 'single'); ?>

                    <?php endwhile; ?>
                <?php endif; ?>

        </div> <!-- COLUMN ONE END -->
        <div  cla="col-1"></div>
        <div class="col-3 sidebar">
            <?php get_template_part( 'template-parts/sidebar/sidebar-primary' ); ?>
            <?php mint_the_post_pagination(); ?>
        </div>
    </div> <!-- ROW END -->
</div> <!-- CONTAINER END -->

<?php get_footer(); ?>