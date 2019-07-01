<?php
/**
 * 
 * The template for displaying search results pages.
 * 
 * @package Mint
 */

get_header(); ?>

    <div class="container search single-post">
        <div class="row">
            <div class="col-lg-8">
                <div class="excerpt-head">
                    <header>
                        <?php if ( have_posts() ) : ?>
                            <h1><?php printf( __( 'Search Results for: %s', 'Mint' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        <?php else : ?>
                            <h1><?php _e( 'Nothing Found', 'Mint' ); ?></h1>
                        <?php endif; ?>
                    </header>
                </div>
                <div>
                    <?php
                    if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then includ
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/post/content', 'excerpt' );
                        endwhile; //End of loop.

                    else :
                    ?>
                    <p><?php _e( 'Sorry, but nothing matched your search terms. Try again?', 'Mint' ); ?></p>
                    <?php
                        get_search_form();
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-3 sidebar">
                <?php get_template_part( 'template-parts/sidebar/sidebar-primary' ); ?>
            </div>
        </div>
    </div>

<?php
get_footer();