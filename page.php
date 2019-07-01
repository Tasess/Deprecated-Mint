<?php
/**
 *
 * Template Name: Page
 * 
 * @package Mint
 * @since Mint 1.0
 */
get_header(); ?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ): ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() )), '</a></h2>' ); ?>
                        <?php the_content();  ?>

                    <?php endwhile; ?>

            <?php endif; ?>
        </div>
        <div class="col-md-4">
        <?php get_template_part( 'template-parts/sidebar-primary' ); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>