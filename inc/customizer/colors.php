<?php
/**
 * Color palette defaults.
 *
 * @author   Bryan Focht
 * @since    1.0.0
 */

/**
 * Set the default turnkey colors and assign to css
 *
 * @filter primer_colors
 * @since  1.0.0
 *
 * @param  array $colors Array of colors.
 *
 * @return array
 */
function turnkey_colors( $colors ) {

	unset(
		$colors['content_background_color'],
		$colors['footer_widget_content_background_color'],
		$colors['menu_background_color']
	);

	$primary    = '#1D6CCD'; // primary.base.
	$primary_o  = '#3690FF'; // primary-o.base.
	$highlight  = '#73B2FF'; // primary-o.highlight.
	$secondary  = '#C62828'; // secondary.base.
	$nav        = '#0862CF'; // nav.base.
	$warning    = '#FEDC45'; // warning.
	$background = '#F5F7F8'; // product.base.
	$gray_light = '#AEA99C'; // gray.light.
	$gray_base  = '#999999'; // gray.base.
	$white      = '#FFFFFF'; // white.base.
	$black      = '#000000'; // black.base.

	$overrides = [
		// Text colors.
		'header_textcolor'                 => [
			'default' => '#194f6e',
		],
		'tagline_text_color'               => [
			'default' => '#686868',
		],
		'hero_text_color'                  => [
			'default' => $black,
			'css'     => [
				'.hero aside' => [
					'color' => '%1$s',
				],
			],
		],
		'menu_text_color'                  => [
			'default' => $black,
			'css'     => [
				'.rstore-top-nav .support-link, .rstore-top-nav .help-link, .rstore-top-nav .login-link' => [
					'color' => '%1$s',
				],
			],
		],
		'cart_text_color'                  => [
			'default' => $nav,
			'css'     => [
				'.rstore-view-cart a' => [
					'color' => '%1$s',
				],
			],
		],
		'heading_text_color'               => [
			'default' => '#353535',
		],
		'primary_text_color'               => [
			'default' => '#252525',
		],
		'secondary_text_color'             => [
			'default' => '#686868',
		],
		'footer_widget_heading_text_color' => [
			'default' => '#353535',
		],
		'footer_widget_text_color'         => [
			'default' => '#252525',
		],
		'footer_menu_text_color'           => [
			'default' => $white,
		],
		'footer_text_color'                => [
			'default' => $white,
		],
		// Link / Button colors.
		'link_color'                       => [
			'default' => $primary,
		],
		'button_color'                     => [
			'default' => $primary,
		],
		'button_text_color'                => [
			'default' => $white,
		],
		'secondary_button_color'           => [
			'label'   => esc_html__( 'Secondary', 'turnkey' ),
			'default' => $secondary,
			'section' => 'colors-buttons',
			'css'     => [
				'.hero-inner .rstore-domain-search .button, .hero-inner .rstore-add-to-cart.button' => [
					'background'   => '%1$s',
					'border-color' => '%1$s',
				],
				'.rstore-retail-price' => [
					'color' => '%1$s',
				],
			],
		],
		'secondary_button_text_color'      => [
			'label'   => esc_html__( 'Secondary Text', 'turnkey' ),
			'default' => '#333333',
			'section' => 'colors-buttons',
			'css'     => [
				'.hero-inner .rstore-domain-search .button, .hero-inner .rstore-add-to-cart.button' => [
					'color' => '%1$s',
				],
			],
		],
		// Background colors.
		'background_color'                 => [
			'default' => $background,
		],
		'hero_background_color'            => [
			'default' => $highlight,
			'css'     => [
				'.hero-inner .result-content .domain-result' => [
					'background-color' => '%1$s',
				],
			],
		],
		'menu_background_color'            => [
			'label'   => esc_html__( 'Background', 'turnkey' ),
			'section' => 'colors-menu',
			'default' => $background,
			'css'     => [
				'.main-navigation.open, .main-navigation ul ul, .main-navigation .sub-menu' => [
					'background-color' => '%1$s',
				],
			],
		],
		'footer_widget_background_color'   => [
			'default' => $background,
			'css'     => [
				'.rstore-top-nav .tray-dropdown.show, .single-reseller_product .product-tabs ul.tabs li, .widget.rstore-Product, .widget.gem-form' => [
					'background-color' => '%1$s',
				],
			],
		],
		'footer_background_color'          => [
			'default' => $black,
		],
		// Border colors.
		'search_form_field'                => [
			'default' => $gray_light,
			'css'     => [
				'.search-form .search-field' => [
					'border' => '1px solid %1$s',
				],
			],
		],
		'account_info'                     => [
			'default' => $gray_base,
			'css'     => [
				'.rstore-top-nav .tray-dropdown .account-info .columns' => [
					'border-left' => '1px solid %1$s',
				],
				'.rstore-top-nav .tray-dropdown .account-info, .rstore-top-nav .tray-dropdown .account-info h3' => [
					'color' => '%1$s',
				],
			],
		],
	];

	return primer_array_replace_recursive( $colors, $overrides );
}
add_filter( 'primer_colors', 'turnkey_colors' );


/**
 * Load the additional turnkey color schemes.
 *
 * @filter primer_color_schemes
 * @since  1.0.0
 *
 * @param  array $color_schemes Array of color schemes.
 *
 * @return array
 */
function turnkey_color_schemes( $color_schemes ) {

	$turnkey_color_schemes = array(
		'autumn'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Autumn', 'turnkey' ),
			'primary'        => '#D83C19',
			'primary-o'      => '#D83C19',
			'highlight'      => '#E96345',
			'secondary'      => '#CC8403',
			'secondary-text' => '#FBA711',
			'nav'            => '#D83C19',
			'warning'        => '#F5C41F',
			'background'     => '#E8E8E8',
			'gray-light'     => '#BBBBBB',
			'gray-base'      => '#666666',
			'white'          => '#FFFFFF',
			'black'          => '#111111',
		),
		'berry'             => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Berry', 'turnkey' ),
			'primary'        => '#5F9CB3',
			'primary-o'      => '#5F9CB3',
			'highlight'      => '#88B6C7',
			'secondary'      => '#AD6794',
			'secondary-text' => '#C28FB0',
			'nav'            => '#0D787B',
			'warning'        => '#F7EB7F',
			'background'     => '#DCDBD3',
			'gray-light'     => '#F1F1EF',
			'gray-base'      => '#77766E',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'california-sunset' => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'California Sunset', 'turnkey' ),
			'primary'        => '#0076B2',
			'primary-o'      => '#0076B2',
			'highlight'      => '#009FEF',
			'secondary'      => '#F55891',
			'secondary-text' => '#F892B7',
			'nav'            => '#E5266B',
			'warning'        => '#FFD43E',
			'background'     => '#E8E8E8',
			'gray-light'     => '#C5C5C7',
			'gray-base'      => '#666666',
			'white'          => '#FFFFFF',
			'black'          => '#222222',
		),
		'earth'             => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Earth', 'turnkey' ),
			'primary'        => '#827B74',
			'primary-o'      => '#827B74',
			'highlight'      => '#9F9A94',
			'secondary'      => '#41A564',
			'secondary-text' => '#62C183',
			'nav'            => '#237D44',
			'warning'        => '#E9C137',
			'background'     => '#E8E8E8',
			'gray-light'     => '#BBBBBB',
			'gray-base'      => '#666666',
			'white'          => '#FFFFFF',
			'black'          => '#222222',
		),
		'eggplant'          => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Eggplant', 'turnkey' ),
			'primary'        => '#A39186',
			'primary-o'      => '#A39186',
			'highlight'      => '#BDB1A9',
			'secondary'      => '#824180',
			'secondary-text' => '#AA56A8',
			'nav'            => '#639AA2',
			'warning'        => '#FFD43E',
			'background'     => '#F1F0ED',
			'gray-light'     => '#D0CFCC',
			'gray-base'      => '#A8A7A4',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'jetlag'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Jetlag', 'turnkey' ),
			'primary'        => '#7E8983',
			'primary-o'      => '#7E8983',
			'highlight'      => '#9EA6A2',
			'secondary'      => '#40A39E',
			'secondary-text' => '#60C0BC',
			'nav'            => '#E5266B',
			'warning'        => '#FBDC17',
			'background'     => '#EEF5F1',
			'gray-light'     => '#C0C7C2',
			'gray-base'      => '#8C928E',
			'white'          => '#FFFFFF',
			'black'          => '#222222',
		),
		'jewels'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Jewels', 'turnkey' ),
			'primary'        => '#E66B4C',
			'primary-o'      => '#E66B4C',
			'highlight'      => '#EE9782',
			'secondary'      => '#B98B3B',
			'secondary-text' => '#CDA764',
			'nav'            => '#3C83B0',
			'warning'        => '#F7B733',
			'background'     => '#E7DAD4',
			'gray-light'     => '#C8BABA',
			'gray-base'      => '#A29792',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'modern'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Modern', 'turnkey' ),
			'primary'        => '#009EE2',
			'primary-o'      => '#009EE2',
			'highlight'      => '#20BCFF',
			'secondary'      => '#666666',
			'secondary-text' => '#858585',
			'nav'            => '#0085CB',
			'warning'        => '#F7B733',
			'background'     => '#E8E8E8',
			'gray-light'     => '#BBBBBB',
			'gray-base'      => '#666666',
			'white'          => '#FFFFFF',
			'black'          => '#2B2B2B',
		),
		'museum'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Museum', 'turnkey' ),
			'primary'        => '#8A95A3',
			'primary-o'      => '#8A95A3',
			'highlight'      => '#ACB4BE',
			'secondary'      => '#AD6794',
			'secondary-text' => '#C28FB0',
			'nav'            => '#216F9D',
			'warning'        => '#F3B412',
			'background'     => '#D3DBE1',
			'gray-light'     => '#D8E0E5',
			'gray-base'      => '#8C979F',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'muted'             => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Muted', 'turnkey' ),
			'primary'        => '#A39097',
			'primary-o'      => '#A39097',
			'highlight'      => '#BFB1B6',
			'secondary'      => '#8A96A5',
			'secondary-text' => '#ADB5C0',
			'nav'            => '#3C83B0',
			'warning'        => '#F7B733',
			'background'     => '#FAFAFB',
			'gray-light'     => '#BBBBBB',
			'gray-base'      => '#959595',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'nature'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Nature', 'turnkey' ),
			'primary'        => '#6D6517',
			'primary-o'      => '#6D6517',
			'highlight'      => '#A09422',
			'secondary'      => '#7A8E26',
			'secondary-text' => '#A3BE33',
			'nav'            => '#7E9468',
			'warning'        => '#F9C80E',
			'background'     => '#FFFCE8',
			'gray-light'     => '#B7B4A7',
			'gray-base'      => '#9B9885',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'ocean'             => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Ocean', 'turnkey' ),
			'primary'        => '#36699F',
			'primary-o'      => '#36699F',
			'highlight'      => '#4F87C3',
			'secondary'      => '#1F80E9',
			'secondary-text' => '#57A0EE',
			'nav'            => '#449DD1',
			'warning'        => '#F1C40F',
			'background'     => '#F5F5F5',
			'gray-light'     => '#C5C5C7',
			'gray-base'      => '#929293',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'ohlala'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Oh Lala', 'turnkey' ),
			'primary'        => '#8B65FF',
			'primary-o'      => '#8B65FF',
			'highlight'      => '#B9A2FF',
			'secondary'      => '#34607D',
			'secondary-text' => '#4681A8',
			'nav'            => '#27719C',
			'warning'        => '#E8C547',
			'background'     => '#EAEAEA',
			'gray-light'     => '#C0C0C0',
			'gray-base'      => '#808080',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'papaya'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Papaya', 'turnkey' ),
			'primary'        => '#E24538',
			'primary-o'      => '#E24538',
			'highlight'      => '#EA776D',
			'secondary'      => '#EF6D00',
			'secondary-text' => '#FF8D2D',
			'nav'            => '#DA5367',
			'warning'        => '#FFDE68',
			'background'     => '#F0F0F0',
			'gray-light'     => '#C8C8C8',
			'gray-base'      => '#7E7E7E',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'pink'              => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Pink', 'turnkey' ),
			'primary'        => '#D3328B',
			'primary-o'      => '#D3328B',
			'highlight'      => '#DE64A8',
			'secondary'      => '#7D4D4F',
			'secondary-text' => '#A16669',
			'nav'            => '#1C77C3',
			'warning'        => '#FFFC31',
			'background'     => '#EEF0F4',
			'gray-light'     => '#B5B9C0',
			'gray-base'      => '#555A66',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'professional'      => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Professional', 'turnkey' ),
			'primary'        => '#FF5F34',
			'primary-o'      => '#FF5F34',
			'highlight'      => '#FF8F71',
			'secondary'      => '#40A495',
			'secondary-text' => '#60C1B2',
			'nav'            => '#3C83B0',
			'warning'        => '#F7B733',
			'background'     => '#FAFAFB',
			'gray-light'     => '#CBC7D1',
			'gray-base'      => '#90969E',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'sand'              => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Sand', 'turnkey' ),
			'primary'        => '#999482',
			'primary-o'      => '#999482',
			'highlight'      => '#B4B1A4',
			'secondary'      => '#809C76',
			'secondary-text' => '#A1B69A',
			'nav'            => '#4FA1A8',
			'warning'        => '#F9EA8C',
			'background'     => '#F3F3F0',
			'gray-light'     => '#C0C0BE',
			'gray-base'      => '#787878',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'soft'              => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Soft', 'turnkey' ),
			'primary'        => '#59517A',
			'primary-o'      => '#59517A',
			'highlight'      => '#756B9D',
			'secondary'      => '#B37C97',
			'secondary-text' => '#C9A3B6',
			'nav'            => '#53A2BE',
			'warning'        => '#F5E9BA',
			'background'     => '#F2F2F2',
			'gray-light'     => '#CACACA',
			'gray-base'      => '#8F8F8F',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'spa'               => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Spa', 'turnkey' ),
			'primary'        => '#759190',
			'primary-o'      => '#759190',
			'highlight'      => '#97ACAB',
			'secondary'      => '#2997CF',
			'secondary-text' => '#57B0DE',
			'nav'            => '#035DC0',
			'warning'        => '#F5D24E',
			'background'     => '#F6F9FC',
			'gray-light'     => '#DEE5EB',
			'gray-base'      => '#AFB7BE',
			'white'          => '#FFFFFF',
			'black'          => '#222222',
		),
		'spring'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Spring', 'turnkey' ),
			'primary'        => '#22A39B',
			'primary-o'      => '#22A39B',
			'highlight'      => '#2FD4C9',
			'secondary'      => '#18AB3A',
			'secondary-text' => '#20E04D',
			'nav'            => '#549DBC',
			'warning'        => '#FFFF00',
			'background'     => '#E8E8E8',
			'gray-light'     => '#BBBBBB',
			'gray-base'      => '#666666',
			'white'          => '#FFFFFF',
			'black'          => '#222222',
		),
		'sunrise'           => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Sunrise', 'turnkey' ),
			'primary'        => '#A80000',
			'primary-o'      => '#A80000',
			'highlight'      => '#E1472C',
			'secondary'      => '#41A62A',
			'secondary-text' => '#76D85B',
			'nav'            => '#BBBBBB',
			'warning'        => '#FEDC45',
			'background'     => '#E8E8E8',
			'gray-light'     => '#BBBBBB',
			'gray-base'      => '#666666',
			'white'          => '#FFFFFF',
			'black'          => '#262626',
		),
		'sunset'            => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Sunset', 'turnkey' ),
			'primary'        => '#AE271C',
			'primary-o'      => '#AE271C',
			'highlight'      => '#DD382A',
			'secondary'      => '#DB7C26',
			'secondary-text' => '#E49C5A',
			'nav'            => '#009DE0',
			'warning'        => '#FFB400',
			'background'     => '#F7F7F7',
			'gray-light'     => '#D7D7D7',
			'gray-base'      => '#A7A7A7',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
		'terranova'         => array(
			'label'          => /* translators: color scheme name */
				esc_html__( 'Terra Nova', 'turnkey' ),
			'primary'        => '#A19566',
			'primary-o'      => '#A19566',
			'highlight'      => '#B8AF8C',
			'secondary'      => '#BD6A41',
			'secondary-text' => '#CD8D6E',
			'nav'            => '#2274A5',
			'warning'        => '#F7DBA7',
			'background'     => '#F4F1EE',
			'gray-light'     => '#E6E3E1',
			'gray-base'      => '#767069',
			'white'          => '#FFFFFF',
			'black'          => '#000000',
		),
	);

	foreach ( $turnkey_color_schemes as &$args ) {

		$args['colors'] = array(
			// Links & Buttons.
			'header_textcolor'               => $args['primary'],
			'link_color'                     => $args['primary'],
			'button_color'                   => $args['primary'],
			'secondary_button_color'         => $args['secondary'],
			'secondary_button_text_color'    => $args['secondary-text'],
			'cart_text_color'                => $args['nav'],
			// Backgrounds.
			'hero_background_color'          => $args['highlight'],
			'menu_background_color'          => $args['primary-o'],
			'footer_widget_background_color' => $args['background'],
			// Gray.
			'search_form_field'              => $args['gray-light'],
			'account_info'                   => $args['gray-base'],
			// White.
			'footer_menu_text_color'         => $args['white'],
			'footer_text_color'              => $args['white'],
			'button_text_color'              => $args['white'],
			// Black.
		);
	}

	$new_color_schemes = $turnkey_color_schemes + $color_schemes;

	return $new_color_schemes;
}

add_filter( 'primer_color_schemes', 'turnkey_color_schemes' );

