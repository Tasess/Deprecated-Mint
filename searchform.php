<?php
/**
 * 
 * Template for displaying the search form on Mint
 * 
 * @package Mint
 * @since 1.0
 */
?>
<div class="form-group mint-search border-bottom">
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    	<label id="search-for" class="screen-reader-text" for="s"><?php _e( 'Search for:', 'presentation' ); ?></label>
        <input class="form-control" type="search" placeholder="<?php echo esc_attr( 'Search', 'presentation' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <button class="btn btn-outline-dark" type="submit" id="search-submit" value="Search"><i class="fa fa-search"></i></button>
</form>
</div>


