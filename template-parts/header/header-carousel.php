<?php 
/**
 * Template for the carousel for the front page
 * 
 * @package Mint
 */
?>
<div id="mintcarousel" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#mintcarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mintcarousel" data-slide-to="1"></li>
        <li data-target="#mintcarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo esc_url( get_theme_mod( 'header_image_one' ) ); ?>" alt="First Slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo esc_url( get_theme_mod( 'header_image_two' ) ); ?>" alt="Second Slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo esc_url( get_theme_mod( 'header_image_three' ) ); ?>" alt="Third Slide">
        </div>
    </div> <!-- CAROUSEL-INNER -->
    <a class="carousel-control-prev" href="#mintcarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mintcarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> <!-- CAROUSEL END -->