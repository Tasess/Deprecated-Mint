<?php
/**
 * Template part for displaying posts with excerpts
 * 
 * For Search Results
 * 
 * @package Mint
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>> <!-- post-class -->
    <div class="row post-main-box"> <!-- row -->
        <?php if( has_post_thumbnail() ) { ?>
            <div class="col-lg-6 col-md-6 excerpt-image"> <!-- excerpt-image -->
                <?php the_post_thumbnail( 'mint-featured-image' ); ?>
            </div> <!-- excerpt-image -->
        <?php } ?>

        <div class="<?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>> <!-- excerpt box -->
            <h3 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
            <div class="post-info"> <!-- post-info -->
                <span class="entry-date"><?php echo get_the_date(); ?></span>
                <span class="entry-author"><?php the_author(); ?></span>
                <hr>
            </div> <!-- post-info -->
			<p>
				<?php the_excerpt(); ?>
            </p>
        </div><!-- excerpt box -->
    </div> <!-- row -->

</div> <!-- post-class -->