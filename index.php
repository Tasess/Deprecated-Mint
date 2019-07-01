<?php
/** 
 * The main template file.
 * 
 * Generic template file in a WordPress theme
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it will put together the home page when no home.php file exists
 * 
 * 
 * @package Mint
*/

get_header(); ?>

<?php get_template_part( 'template-parts/header/header-carousel' ); ?>

<div class="container"> <!-- Container -->
    <div class="row"> <!-- Row -->
        <div class="col-lg-8 col-md-8"> <!-- Content Cards -->
            <section>
                <?php if ( have_posts() ) : ?>
                    <div>   <!-- post div -->
                        <?php /* Start Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php 
                                get_template_part( 'template-parts/post/content' );
                            ?>
                        <?php endwhile; ?>
                    </div> <!-- post div -->


                <?php else : ?>


                <?php endif; ?>
            </section>
        </div> <!-- Content Cards -->
        <div class="col-md-4 col-sm-4"> <!-- Sidebar-->
            <?php get_sidebar(); ?>
        </div> <!--Sidebar-->
    </div><!-- Row -->
</div> <!-- Container -->

<?php get_footer(); ?>
