<?php
/**
 * Turnkey theme compatibility.
 *
 * Provide compatibility fixes for the reseller store plugin
 *
 * @package    Compatibility
 * @subpackage Turnkey
 * @category   Core
 * @author     Bryan Focht
 * @since      1.0.0
 */

/**
 * Register additional site identity options.
 *
 * @action customize_register
 * @see    WP_Customize_Manager
 *
 * @since  1.0.0
 *
 * @param  WP_Customize_Manager $wp_customize Instance of the WP_Customize_Manager class.
 */
function turnkey_customize_register( WP_Customize_Manager $wp_customize ) {

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
			'label'    => esc_html__( 'Display support phone number', 'turnkey' ),
			'section'  => 'title_tagline',
			'settings' => 'show_support_phone',
			'type'     => 'checkbox',
			'priority' => 40,
		)
	);
}
add_action( 'customize_register', 'turnkey_customize_register' );

/**
 * Add top nav menu if reseller store plugin is active.
 *
 * @action primer_before_header_wrapper
 * @since  1.0.0
 */
function turnkey_top_nav() {

	get_template_part( 'templates/top-nav' );

}
add_action( 'primer_header', 'turnkey_top_nav', 5 );

/**
 * Toggle the visibility of the support phone in the header.
 *
 * @filter turnkey_support_phone
 * @since  1.0.0
 *
 * @param string $html  HTML snippet for the the support phone number.
 *
 * @return string  Returns empty html snippet when `show_support_phone` theme mod is false.
 */
function turnkey_support_phone_toggle( $html ) {

	return get_theme_mod( 'show_support_phone', true ) ? $html : '';

}
add_filter( 'turnkey_support_phone', 'turnkey_support_phone_toggle' );

