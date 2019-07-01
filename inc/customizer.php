<?php
/**
 * Mint: Customizer
 * 
 * @package Mint
 * @since 1.0
 */

 /**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function mint_customize_register ( $wp_customize ) {
// CAROUSEL CUSTOMIZATION
// =============================================================
$wp_customize->add_setting('header_image_one', array(
	'transport'         		=> 'refresh',
	'height'         			=> 500,
));
$wp_customize->add_setting('header_image_two', array(
	'transport'         		=> 'refresh',
	'height'         			=> 500,
));
$wp_customize->add_setting('header_image_three', array(
	'transport'         		=> 'refresh',
	'height'         			=> 500,
));

// SECTION
$wp_customize->add_section('slideshow', array(
	'title'             		=> __('Header Images', 'mint'), 
	'priority'          		=> 10,
));    

// CONTROLS
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_header_one', array(
	'label'             		=> __('Slider Image #0', 'mint'),
	'section'           		=> 'slideshow',
	'settings'          		=> 'header_image_one',    
)));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_header_two', array(
	'label'             		=> __('Slider Image #1', 'mint'),
	'section'           		=> 'slideshow',
	'settings'          		=> 'header_image_two',    
)));
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_setting_header_three', array(
	'label'             		=> __('Slider Image #2', 'mint'),
	'section'           		=> 'slideshow',
	'settings'          		=> 'header_image_three',    
)));
// LINK COLOR CUSTOMIZATION
// =============================================================
$wp_customize->add_setting( 'link_color', array(
	'default'   				=> '70c952',
	'transport' 				=> 'refresh',
	'sanitize_callback' 		=> 'sanitize_hex_color',
) );

$wp_customize->add_setting( 'hover_link_color', array(
	'default'   				=> '70c952',
	'transport' 				=> 'refresh',
	'sanitize_callback' 		=> 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'section' 					=> 'colors',
	'label'   					=> esc_html__( 'Link color', 'mint' ),
) ) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_link_color', array(
	'section' 					=> 'colors',
	'label'   					=> esc_html__( 'Hover Link color', 'mint' ),
) ) );

// FOOTER TEXT
// =============================================================

$wp_customize->add_section( 'custom_footer_text' , array(
	'title'    					=> __('Footer Text','mint'),
	'priority' 					=> 30
) );

$wp_customize->add_setting( 'footer_text_block', array(
	'default'           		=> __( 'default text', 'mint' ),
	'sanitize_callback' 		=> 'wp_kses_post'
) );

$wp_customize->add_control( new WP_Customize_Control(
	$wp_customize,
	'custom_footer_text',
		array(
			'label'    			=> __( 'Footer Text', 'mint' ),
			'section'  			=> 'custom_footer_text',
			'settings' 			=> 'footer_text_block',
			'type'     			=> 'textarea'
		)
	)
);
// Sanitize text
function sanitize_text( $text ) {
	return sanitize_text_field( $text );
}

}
add_action( 'customize_register', 'mint_customize_register' );
// LINK COLOR CUSTOMIZATION FUNCTION
add_action( 'wp_head', 'mint_customizer_css');
function mint_customizer_css()
{
    ?>
        <style type="text/css">
			body a{ color: <?php echo get_theme_mod('link_color', '70c952'); ?>; }
			body a:hover{ color: <?php echo get_theme_mod('hover_link_color', '70c952'); ?>;}

			li.current-menu-item a{ color: <?php echo get_theme_mod('link_color', '70c952'); ?>; }
			.btn-outline-dark { color: <?php echo get_theme_mod('link_color', '70c952'); ?>;
									border-color: <?php echo get_theme_mod('link_color', '70c952'); ?>;}
        </style>
    <?php
}
// FOOTER TEXT FUNCTION
add_filter('mint_text', 'mint_footer_text');
function mint_footer_text() {
	if( get_theme_mod( 'footer_text_block') != "" ) {
		echo get_theme_mod( 'footer_text_block');
	}
	else{
		echo 'Copyright &copy; 2018 · Mint ♥'; // Add you default footer text here
	}
}
// SOCIAL MEDIA LINKS 
// =============================================================
function mint_social_array() {

	$social_sites = array(
		'twitter'       		=> 'mint_twitter_profile',
		'facebook'      		=> 'mint_facebook_profile',
		'google-plus'   		=> 'mint_googleplus_profile',
		'pinterest'     		=> 'mint_pinterest_profile',
		'linkedin'      		=> 'mint_linkedin_profile',
		'youtube'       		=> 'mint_youtube_profile',
		'vimeo'         		=> 'mint_vimeo_profile',
		'tumblr'        		=> 'mint_tumblr_profile',
		'instagram'     		=> 'mint_instagram_profile',
		'flickr'        		=> 'mint_flickr_profile',
		'dribbble'      		=> 'mint_dribbble_profile',
		'rss'           		=> 'mint_rss_profile',
		'reddit'        		=> 'mint_reddit_profile',
		'soundcloud'    		=> 'mint_soundcloud_profile',
		'spotify'       		=> 'mint_spotify_profile',
		'vine'          		=> 'mint_vine_profile',
		'yahoo'         		=> 'mint_yahoo_profile',
		'behance'       		=> 'mint_behance_profile',
		'codepen'       		=> 'mint_codepen_profile',
		'delicious'     		=> 'mint_delicious_profile',
		'stumbleupon'   		=> 'mint_stumbleupon_profile',
		'deviantart'    		=> 'mint_deviantart_profile',
		'digg'          		=> 'mint_digg_profile',
		'github'        		=> 'mint_github_profile',
		'hacker-news'   		=> 'mint_hacker-news_profile',
		'steam'         		=> 'mint_steam_profile',
		'vk'            		=> 'mint_vk_profile',
		'weibo'         		=> 'mint_weibo_profile',
		'tencent-weibo' 		=> 'mint_tencent_weibo_profile',
		'500px'         		=> 'mint_500px_profile',
		'foursquare'    		=> 'mint_foursquare_profile',
		'slack'         		=> 'mint_slack_profile',
		'slideshare'    		=> 'mint_slideshare_profile',
		'qq'            		=> 'mint_qq_profile',
		'whatsapp'      		=> 'mint_whatsapp_profile',
		'skype'         		=> 'mint_skype_profile',
		'wechat'        		=> 'mint_wechat_profile',
		'xing'          		=> 'mint_xing_profile',
		'paypal'        		=> 'mint_paypal_profile',
		'email-form'    		=> 'mint_email_form_profile'
	);

	return apply_filters( 'mint_social_array_filter', $social_sites );
}
function my_add_customizer_sections( $wp_customize ) {

	$social_sites = mint_social_array();

	// set a priority used to order the social sites
	$priority = 5;

	// section
	$wp_customize->add_section( 'mint_social_media_icons', array(
		'title'       			=> __( 'Social Media Icons', 'mint' ),
		'priority'    			=> 25,
		'description' 			=> __( 'Add the URL for each of your social profiles.', 'mint' )
	) );

	// create a setting and control for each social site
	foreach ( $social_sites as $social_site => $value ) {

		$label = ucfirst( $social_site );

		if ( $social_site == 'google-plus' ) {
			$label = 'Google Plus';
		} elseif ( $social_site == 'rss' ) {
			$label = 'RSS';
		} elseif ( $social_site == 'soundcloud' ) {
			$label = 'SoundCloud';
		} elseif ( $social_site == 'slideshare' ) {
			$label = 'SlideShare';
		} elseif ( $social_site == 'codepen' ) {
			$label = 'CodePen';
		} elseif ( $social_site == 'stumbleupon' ) {
			$label = 'StumbleUpon';
		} elseif ( $social_site == 'deviantart' ) {
			$label = 'DeviantArt';
		} elseif ( $social_site == 'hacker-news' ) {
			$label = 'Hacker News';
		} elseif ( $social_site == 'whatsapp' ) {
			$label = 'WhatsApp';
		} elseif ( $social_site == 'qq' ) {
			$label = 'QQ';
		} elseif ( $social_site == 'vk' ) {
			$label = 'VK';
		} elseif ( $social_site == 'wechat' ) {
				$label = 'WeChat';
		} elseif ( $social_site == 'tencent-weibo' ) {
			$label = 'Tencent Weibo';
		} elseif ( $social_site == 'paypal' ) {
			$label = 'PayPal';
		} elseif ( $social_site == 'email-form' ) {
			$label = 'Contact Form';
		}
		// setting
		$wp_customize->add_setting( $social_site, array(
			'sanitize_callback' => 'esc_url_raw'
		) );
		// control
		$wp_customize->add_control( $social_site, array(
			'type'     			=> 'url',
			'label'    			=> $label,
			'section'  			=> 'mint_social_media_icons',
			'priority' 			=> $priority
		) );
		// increment the priority for next site
		$priority = $priority + 5;
	}
}
add_action( 'customize_register', 'my_add_customizer_sections' );
?>