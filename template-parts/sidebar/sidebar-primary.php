<?php
/**
 * Template part for displaying sidebars
 * 
 * For Search Results
 * 
 * @package Mint
 */
?>

<div id="sidebar-primary" >
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>