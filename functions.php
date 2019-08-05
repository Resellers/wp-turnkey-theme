<?php
/**
 * Turnkey functions and definitions.
 *
 * Set up the theme and provide some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package Functions
 * @since   1.0.0
 */

/**
 * Child theme version.
 *
 * @since 1.0.0
 *
 * @var string
 */
define( 'PRIMER_CHILD_VERSION', '1.2.4' );

/**
 * Load Reseller Store compatibility file.
 *
 * @since 1.0.0
 */
if ( class_exists( 'Reseller_Store\Plugin' ) && rstore_is_setup() ) {

	require_once __DIR__ . '/inc/compat/reseller-store.php';

} else {

	require_once __DIR__ . '/inc/nux/class-turnkey-storefront-nux.php';
}

require_once __DIR__ . '/inc/customizer/colors.php';

/**
 * Move some elements around.
 *
 * @action template_redirect
 * @since  1.0.0
 */
function turnkey_storefront_move_elements() {

	remove_action( 'primer_header', 'primer_add_hero', 7 );
	remove_action( 'primer_after_header', 'primer_add_primary_navigation', 11 );
	remove_action( 'primer_after_header', 'primer_add_page_title', 12 );
	remove_action( 'primer_before_header_wrapper', 'primer_video_header', 5 );

	add_action( 'primer_after_header', 'primer_add_hero', 7 );
	add_action( 'primer_header', 'turnkey_storefront_after_site_header_wrapper', 5 );
	add_action( 'primer_header', 'primer_add_primary_navigation', 11 );
	add_action( 'primer_pre_hero', 'primer_video_header', 5 );
	add_action( 'primer_site_navigation', 'turnkey_mobile_menu', 7 );

	if ( get_theme_mod( 'show_page_header', true ) && ! is_front_page() ) {

		add_action( 'primer_hero', 'primer_add_page_title', 12 );

	}

}
add_action( 'template_redirect', 'turnkey_storefront_move_elements' );

/**
 * Add top nav menu if reseller store plugin is active.
 *
 * @action primer_before_header_wrapper
 * @since  1.0.0
 */
function turnkey_storefront_after_site_header_wrapper() {

	echo '<div class="site-title-wrapper-after"></div>';

}

/**
 * Add mobile menu.
 *
 * @action primer_site_navigation
 * @since  1.2.3
 */
function turnkey_mobile_menu() {

	echo '<div class="mobile-menu-close"></div>';

}

/**
 * Set hero image target element.
 *
 * @filter primer_hero_image_selector
 * @since  1.0.0
 *
 * @return string
 */
function turnkey_storefront_hero_image_selector() {

	return '.hero';

}
add_filter( 'primer_hero_image_selector', 'turnkey_storefront_hero_image_selector' );

/**
 * Set custom logo args.
 *
 * @filter primer_custom_logo_args
 * @since  1.0.0
 *
 * @param  array $args array of args.
 *
 * @return array
 */
function turnkey_storefront_custom_logo_args( $args ) {

	$args['width']  = 325;
	$args['height'] = 70;

	return $args;

}
add_filter( 'primer_custom_logo_args', 'turnkey_storefront_custom_logo_args' );

/**
 * Set sidebars.
 *
 * @filter primer_sidebars
 * @since  1.0.0
 *
 * @param  array $sidebars array of sidebars.
 *
 * @return array
 */
function turnkey_storefront_sidebars( $sidebars ) {

	$sidebars['footer-4'] = array(
		'name'          => esc_html__( 'Footer 4', 'turnkey-storefront' ),
		'description'   => esc_html__( 'This sidebar is the fourth column of the footer widget area.', 'turnkey-storefront' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);

	return $sidebars;

}
add_filter( 'primer_sidebars', 'turnkey_storefront_sidebars' );

/**
 * Set fonts.
 *
 * @filter primer_fonts
 * @since  1.0.0
 *
 * @param  array $fonts  array of fonts.
 *
 * @return array
 */
function turnkey_storefront_fonts( $fonts ) {

	$fonts[] = 'Open Sans';

	return $fonts;

}
add_filter( 'primer_fonts', 'turnkey_storefront_fonts' );

/**
 * Set font types.
 *
 * @filter primer_font_types
 * @since  1.0.0
 *
 * @param  array $font_types  array of font types.
 *
 * @return array
 */
function turnkey_storefront_font_types( $font_types ) {

	$overrides = array(
		'site_title_font' => array(
			'default' => 'Open Sans',
		),
		'navigation_font' => array(
			'default' => 'Open Sans',
		),
		'heading_font'    => array(
			'default' => 'Open Sans',
		),
		'primary_font'    => array(
			'default' => 'Open Sans',
		),
		'secondary_font'  => array(
			'default' => 'Open Sans',
		),
	);

	return primer_array_replace_recursive( $font_types, $overrides );

}
add_filter( 'primer_font_types', 'turnkey_storefront_font_types' );

/**
 * Enqueue theme scripts and styles.
 *
 * @link  https://codex.wordpress.org/Function_Reference/wp_enqueue_style
 * @link  https://codex.wordpress.org/Function_Reference/wp_enqueue_script
 * @since 1.0.0
 */
function turnkey_storefront_scripts() {

	wp_enqueue_script( 'turnkey-storefront-navigation', get_stylesheet_directory_uri() . '/assets/js/navigation.js', array( 'jquery' ), PRIMER_CHILD_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'turnkey_storefront_scripts' );

/**
 * Register additional site identity options.
 *
 * @action customize_register
 * @see    WP_Customize_Manager
 *
 * @since  1.0.10
 *
 * @param  WP_Customize_Manager $wp_customize Instance of the WP_Customize_Manager class.
 */
function turnkey_storefront_customize_register( WP_Customize_Manager $wp_customize ) {

	$wp_customize->add_setting(
		'show_support_phone',
		array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'show_support_phone',
		array(
			'label'    => esc_html__( 'Display reseller support phone number', 'turnkey-storefront' ),
			'section'  => 'title_tagline',
			'settings' => 'show_support_phone',
			'type'     => 'checkbox',
			'priority' => 40,
		)
	);

	$wp_customize->add_setting(
		'show_page_header',
		array(
			'default'           => 1,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'show_page_header',
		array(
			'label'       => esc_html__( 'Add Hero on Posts and Pages.', 'turnkey-storefront' ),
			'description' => esc_html__( 'This will add H1 tag using page title (excludes Home Page)', 'turnkey-storefront' ),
			'section'     => 'layout',
			'settings'    => 'show_page_header',
			'type'        => 'checkbox',
			'priority'    => 40,
		)
	);

}
add_action( 'customize_register', 'turnkey_storefront_customize_register' );

/**
 * Theme deactivate hook.
 *
 * @action switch_theme
 *
 * @since  1.1.0
 */
function turnkey_storefront_deactivate() {

	// Display the admin notice again if the theme is re-activated.
	delete_option( 'turnkey_storefront_nux_dismissed' );

}
add_action( 'switch_theme', 'turnkey_storefront_deactivate' );
