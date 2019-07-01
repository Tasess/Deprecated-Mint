<?php
/**
 *
 * The template for displaying the sidebar
 * 
 * @package Mint
 * @since Mint 1.0
 */
?>
<?php if (is_dynamic_sidebar( 'primary')) : ?>
    <div id="secondary" class="sidebar widget-area" role="complementary">
        <?php dynamic_sidebar('primary'); ?>
    </div>
<?php endif; ?>

