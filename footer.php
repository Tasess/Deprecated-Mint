<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mint
 * @since Mint 1.0
 */
?>

<footer class="footer font-small">
        <div class="row container-fluid">
            <div class="col-1"></div>
            <div class="col-md-5 mint-footer-text">
            <p class="footer-text">
                <?php echo (get_theme_mod( 'footer_text_block')); ?>
            </p>
            </div> <!-- GRID COLUMN 1-->

            <div class="col-md-6 social-icon ">
            <?php mint_social_icons_output(); ?>
            </div> <!-- GRID COLUMN 2-->

        </div> <!-- GRID ROW -->


    </footer>
    <?php wp_footer(); ?>
    </body>
<html>
