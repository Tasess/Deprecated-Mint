<?php

/**
 * Customizer additions.
 */
include('inc/customizer.php');
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Script and Style
 */
add_action('wp_enqueue_scripts', 'mint_scripts');
function mint_scripts() {

    /**
     * Enqueue CSS files
     */

    // Custom CSS
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/library/styles/custom.css' );

    // Bootstrap CSS
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ) );

    /**
     * FontAwesome
     */
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );

    /**
     * Google Font
     */

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Kaushan+Script|Oswald' );

    /**
     * Enable post thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'mint-featured-image', 350, 350, true );

    add_image_size( 'mint-thumbnail-avatar', 100, 100, true );
}
/**
 * Primary Menu Setup
 */
function mint_setup() {

    register_nav_menus( array(
        "primary"   =>__("Primary Menu", "Mint")
    ));

    add_theme_support( "title-tag" );
}
add_action( "after_setup_theme", "mint_setup");
/**
 * Excerpt Length
 */
function mint_excerpt( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'mint_excerpt', 999 );
/**
 * Side bar
 */
function sidebar_widgets() {
    register_sidebar( array(
        'name'          => __( 'Post Sidebar', 'Mint' ),
        'id'            => 'primary',
        'description'   => __( 'Add widget here to appear in the sidebar! This side bar will appear beside single posts!', 'custom' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
    ) );
}
add_action( 'widgets_init', 'sidebar_widgets' );

remove_filter( 'the_content', 'wpautop' );

/**
 * Navivation Set up
 */
function mint_custom_logo_setup() {
    $defaults = array(
        'height'      => 64,
        'width'       => 64,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'mint_custom_logo_setup' );

// Navigation active highlight
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if ( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
/**
 *  Social Media Buttons
 */
function mint_social_icons_output() {

	$social_sites = mint_social_array();

	foreach ( $social_sites as $social_site => $profile ) {

		if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
			$active_sites[ $social_site ] = $social_site;
		}
	}

	if ( ! empty( $active_sites ) ) {

		echo '<ul class="social-media-icons">';
		foreach ( $active_sites as $key => $active_site ) { 
        	$class = 'fa fa-' . $active_site; ?>
		    <li>
				<a class="<?php echo esc_attr( $active_site ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $key ) ); ?>">
					<i class="<?php echo esc_attr( $class ); ?>" title="<?php echo esc_attr( $active_site ); ?>"></i>
				</a>
			</li>
		<?php } 
		echo "</ul>";
	}
}
