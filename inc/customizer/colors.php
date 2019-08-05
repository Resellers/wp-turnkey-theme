<?php
/**
 * Color palette defaults.
 *
 * @package  Customizer
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
function turnkey_storefront_colors( $colors ) {

	unset(
		$colors['content_background_color'],
		$colors['footer_widget_content_background_color'],
		$colors['menu_background_color']
	);

	$default = array(
		'primary'             => '#1D6CCD',
		'primary-o'           => '#3690FF',
		'primary-o.highlight' => '#73B2FF',
		'secondary'           => '#C62828',
		'secondary.highlight' => '#DC5050',
		'nav'                 => '#0862CF',
		'warning'             => '#FEDC45',
		'product'             => '#F5F7F8',
		'product.faint'       => '#E8EAE8',
		'gray'                => '#999999',
		'gray.light'          => '#AEA99C',
		'gray.faint'          => '#FBFAF8',
		'white'               => '#FFFFFF',
		'black'               => '#000000',
		'tertiary'            => '#438BE4',
		'quaternary'          => '#1757A5',
		'quinary'             => '#FFFFFF',
	);

	$overrides = [
		'header_textcolor'                 => [
			'default' => '#194F6E',
		],
		'tagline_text_color'               => [
			'default' => '#686868',
		],
		'hero_text_color'                  => [
			'default' => $default['black'],
			'css'     => [
				'.hero aside, .page-header h2' => [
					'color' => '%1$s',
				],
			],
		],
		'menu_text_color'                  => [
			'default' => $default['black'],
			'css'     => [
				'.utility-bar .support-link, .utility-bar .help-link, .utility-bar .login-link, .main-navigation ul.sub-menu li a:hover, .main-navigation ul.sub-menu li a:visited:hover' => [
					'color' => '%1$s',
				],
			],
		],
		'sub_menu_text_color'              => [
			'label'   => esc_html__( 'Submenu Text', 'turnkey-storefront' ),
			'default' => $default['white'],
			'section' => 'colors-menu',
			'css'     => [
				'.main-navigation.open ul li a, .main-navigation ul.sub-menu li a, .main-navigation ul.sub-menu li a:visited, .main-navigation .mobile-menu-close' => [
					'color' => '%1$s',
				],
			],
		],
		'nav_text_color'                   => [
			'label'   => esc_html__( 'Navigation Text', 'turnkey-storefront' ),
			'default' => $default['nav'],
			'section' => 'colors-menu',
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
			'default' => $default['white'],
			'css'     => [
				'.site-info-wrapper .social-menu a:before' => [
					'color' => '%1$s',
				],
			],
		],
		'footer_text_color'                => [
			'default' => $default['white'],
		],
		// Link / Button colors.
		'link_color'                       => [
			'default' => $default['primary'],
		],
		'button_color'                     => [
			'default' => $default['primary'],
		],
		'button_text_color'                => [
			'default' => $default['white'],
		],
		// Background colors.
		'background_color'                 => [
			'default' => $default['product'],
		],
		'hero_background_color'            => [
			'default' => $default['primary-o.highlight'],
			'css'     => [
				'.hero-inner .result-content .domain-result' => [
					'background-color' => '%1$s',
				],
			],
		],
		'menu_background_color'            => [
			'label'   => esc_html__( 'Background', 'turnkey-storefront' ),
			'section' => 'colors-menu',
			'default' => $default['primary'],
			'css'     => [
				'.main-navigation.open, .main-navigation ul ul, .main-navigation .sub-menu' => [
					'background-color' => '%1$s',
				],
			],
		],
		'footer_widget_background_color'   => [
			'default' => $default['gray.faint'],
		],
		'footer_background_color'          => [
			'default' => $default['black'],
		],
		// Border colors.
		'search_form_field'                => [
			'label'   => esc_html__( 'Search form', 'turnkey-storefront' ),
			'section' => 'colors-buttons',
			'default' => $default['gray.light'],
			'css'     => [
				'.search-form .search-field' => [
					'border' => '1px solid %1$s',
				],
			],
		],
		'account_info'                     => [
			'label'   => esc_html__( 'Account info Text', 'turnkey-storefront' ),
			'section' => 'colors-menu',
			'default' => $default['black'],
			'css'     => [
				'.utility-bar .tray-dropdown .account-info, .utility-bar .tray-dropdown .account-info h3, .utility-bar .tray-dropdown .account-info a.quick-links' => [
					'color' => '%1$s',
				],
			],
		],
		'account_info_background'          => [
			'label'   => esc_html__( 'Account info Background', 'turnkey-storefront' ),
			'section' => 'colors-menu',
			'default' => $default['product.faint'],
			'css'     => [
				'.utility-bar .tray-dropdown, #rstore-popResults' => [
					'background-color' => '%1$s',
				],
			],
		],
		'product_icon_colors'              => [
			'label'   => esc_html__( 'Product icons', 'turnkey-storefront' ),
			'section' => 'colors-content',
			'default' => $default['primary-o'],
			'css'     => [
				'.svg-fill-primary-o' => [
					'fill' => '%1$s!important',
				],
			],
		],
		// Color palette.
		'primary_color'                    => [
			'default' => $default['primary'],
		],
		'secondary_color'                  => [
			'default' => $default['secondary'],
		],
		'tertiary_color'                   => [
			'default' => $default['tertiary'],
		],
		'quaternary_color'                 => [
			'default' => $default['quaternary'],
		],
		'quinary_color'                    => [
			'default' => $default['quinary'],
		],
	];

	return primer_array_replace_recursive( $colors, $overrides );
}
add_filter( 'primer_colors', 'turnkey_storefront_colors' );


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
function turnkey_storefront_color_schemes( $color_schemes ) {

	$turnkey_color_schemes = array(
		'autumn'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Autumn', 'turnkey-storefront' ),
			'primary'             => '#D83C19',
			'primary-o'           => '#D83C19',
			'primary-o.highlight' => '#E96345',
			'secondary'           => '#CC8403',
			'secondary.highlight' => '#FBA711',
			'nav'                 => '#D83C19',
			'warning'             => '#F5C41F',
			'product'             => '#E8E8E8',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#666666',
			'gray.light'          => '#BBBBBB',
			'gray.faint'          => '#F3F3F3',
			'white'               => '#FFFFFF',
			'black'               => '#111111',
			'tertiary'            => '#E96345',
			'quaternary'          => '#AF3114',
			'quinary'             => '#FFFFFF',
		),
		'berry'             => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Berry', 'turnkey-storefront' ),
			'primary'             => '#5F9CB3',
			'primary-o'           => '#5F9CB3',
			'primary-o.highlight' => '#88B6C7',
			'secondary'           => '#AD6794',
			'secondary.highlight' => '#C28FB0',
			'nav'                 => '#0D787B',
			'warning'             => '#F7EB7F',
			'product'             => '#DCDBD3',
			'product.faint'       => '#DBDAD0',
			'gray'                => '#77766E',
			'gray.light'          => '#F1F1EF',
			'gray.faint'          => '#C6C5B9',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#88B6C7',
			'quaternary'          => '#49849B',
			'quinary'             => '#FFFFFF',
		),
		'california-sunset' => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'California Sunset', 'turnkey-storefront' ),
			'primary'             => '#0076B2',
			'primary-o'           => '#0076B2',
			'primary-o.highlight' => '#009FEF',
			'secondary'           => '#F55891',
			'secondary.highlight' => '#F892B7',
			'nav'                 => '#E5266B',
			'warning'             => '#FFD43E',
			'product'             => '#E8E8E8',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#666666',
			'gray.light'          => '#C5C5C7',
			'gray.faint'          => '#DBDBDC',
			'white'               => '#FFFFFF',
			'black'               => '#222222',
			'tertiary'            => '#009FEF',
			'quaternary'          => '#005884',
			'quinary'             => '#FFFFFF',
		),
		'earth'             => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Earth', 'turnkey-storefront' ),
			'primary'             => '#827B74',
			'primary-o'           => '#827B74',
			'primary-o.highlight' => '#9F9A94',
			'secondary'           => '#41A564',
			'secondary.highlight' => '#62C183',
			'nav'                 => '#237D44',
			'warning'             => '#E9C137',
			'product'             => '#E8E8E8',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#666666',
			'gray.light'          => '#BBBBBB',
			'gray.faint'          => '#F3F3F3',
			'white'               => '#FFFFFF',
			'black'               => '#222222',
			'tertiary'            => '#9F9A94',
			'quaternary'          => '#6A645E',
			'quinary'             => '#FFFFFF',
		),
		'eggplant'          => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Eggplant', 'turnkey-storefront' ),
			'primary'             => '#A39186',
			'primary-o'           => '#A39186',
			'primary-o.highlight' => '#BDB1A9',
			'secondary'           => '#824180',
			'secondary.highlight' => '#AA56A8',
			'nav'                 => '#639AA2',
			'warning'             => '#FFD43E',
			'product'             => '#F1F0ED',
			'product.faint'       => '#E4E3E0',
			'gray'                => '#A8A7A4',
			'gray.light'          => '#D0CFCC',
			'gray.faint'          => '#E3E2DF',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#BDB1A9',
			'quaternary'          => '#8F796C',
			'quinary'             => '#FFFFFF',
		),
		'jetlag'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Jetlag', 'turnkey-storefront' ),
			'primary'             => '#7E8983',
			'primary-o'           => '#7E8983',
			'primary-o.highlight' => '#9EA6A2',
			'secondary'           => '#40A39E',
			'secondary.highlight' => '#60C0BC',
			'nav'                 => '#E5266B',
			'warning'             => '#FBDC17',
			'product'             => '#EEF5F1',
			'product.faint'       => '#E6EAE6',
			'gray'                => '#8C928E',
			'gray.light'          => '#C0C7C2',
			'gray.faint'          => '#DAE1DC',
			'white'               => '#FFFFFF',
			'black'               => '#222222',
			'tertiary'            => '#9EA6A2',
			'quaternary'          => '#68716C',
			'quinary'             => '#FFFFFF',
		),
		'jewels'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Jewels', 'turnkey-storefront' ),
			'primary'             => '#E66B4C',
			'primary-o'           => '#E66B4C',
			'primary-o.highlight' => '#EE9782',
			'secondary'           => '#B98B3B',
			'secondary.highlight' => '#CDA764',
			'nav'                 => '#3C83B0',
			'warning'             => '#F7B733',
			'product'             => '#E7DAD4',
			'product.faint'       => '#DECDC6',
			'gray'                => '#A29792',
			'gray.light'          => '#C8BABA',
			'gray.faint'          => '#EFE9E6',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#EE9782',
			'quaternary'          => '#E04A24',
			'quinary'             => '#FFFFFF',
		),
		'modern'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Modern', 'turnkey-storefront' ),
			'primary'             => '#009EE2',
			'primary-o'           => '#009EE2',
			'primary-o.highlight' => '#20BCFF',
			'secondary'           => '#666666',
			'secondary.highlight' => '#858585',
			'nav'                 => '#0085CB',
			'warning'             => '#F7B733',
			'product'             => '#E8E8E8',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#666666',
			'gray.light'          => '#BBBBBB',
			'gray.faint'          => '#F3F3F3',
			'white'               => '#FFFFFF',
			'black'               => '#2B2B2B',
			'tertiary'            => '#20BCFF',
			'quaternary'          => '#007EB4',
			'quinary'             => '#FFFFFF',
		),
		'museum'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Museum', 'turnkey-storefront' ),
			'primary'             => '#8A95A3',
			'primary-o'           => '#8A95A3',
			'primary-o.highlight' => '#ACB4BE',
			'secondary'           => '#AD6794',
			'secondary.highlight' => '#C28FB0',
			'nav'                 => '#216F9D',
			'warning'             => '#F3B412',
			'product'             => '#D3DBE1',
			'product.faint'       => '#D2D8DE',
			'gray'                => '#8C979F',
			'gray.light'          => '#D8E0E5',
			'gray.faint'          => '#E9F1F7',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#ACB4BE',
			'quaternary'          => '#707E8F',
			'quinary'             => '#FFFFFF',
		),
		'muted'             => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Muted', 'turnkey-storefront' ),
			'primary'             => '#A39097',
			'primary-o'           => '#A39097',
			'primary-o.highlight' => '#BFB1B6',
			'secondary'           => '#8A96A5',
			'secondary.highlight' => '#ADB5C0',
			'nav'                 => '#3C83B0',
			'warning'             => '#F7B733',
			'product'             => '#FAFAFB',
			'product.faint'       => '#F4F4F4',
			'gray'                => '#959595',
			'gray.light'          => '#BBBBBB',
			'gray.faint'          => '#EAEAEA',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#BFB1B6',
			'quaternary'          => '#8E777F',
			'quinary'             => '#FFFFFF',
		),
		'nature'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Nature', 'turnkey-storefront' ),
			'primary'             => '#6D6517',
			'primary-o'           => '#6D6517',
			'primary-o.highlight' => '#A09422',
			'secondary'           => '#7A8E26',
			'secondary.highlight' => '#A3BE33',
			'nav'                 => '#7E9468',
			'warning'             => '#F9C80E',
			'product'             => '#FFFCE8',
			'product.faint'       => '#EBEAE3',
			'gray'                => '#9B9885',
			'gray.light'          => '#B7B4A7',
			'gray.faint'          => '#F0F0ED',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#A09422',
			'quaternary'          => '#47420F',
			'quinary'             => '#FFFFFF',
		),
		'ocean'             => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Ocean', 'turnkey-storefront' ),
			'primary'             => '#36699F',
			'primary-o'           => '#36699F',
			'primary-o.highlight' => '#4F87C3',
			'secondary'           => '#1F80E9',
			'secondary.highlight' => '#57A0EE',
			'nav'                 => '#449DD1',
			'warning'             => '#F1C40F',
			'product'             => '#F5F5F5',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#929293',
			'gray.light'          => '#C5C5C7',
			'gray.faint'          => '#DBDBDC',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#4F87C3',
			'quaternary'          => '#2A527D',
			'quinary'             => '#FFFFFF',
		),
		'ohlala'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Oh Lala', 'turnkey-storefront' ),
			'primary'             => '#8B65FF',
			'primary-o'           => '#8B65FF',
			'primary-o.highlight' => '#B9A2FF',
			'secondary'           => '#34607D',
			'secondary.highlight' => '#4681A8',
			'nav'                 => '#27719C',
			'warning'             => '#E8C547',
			'product'             => '#EAEAEA',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#808080',
			'gray.light'          => '#C0C0C0',
			'gray.faint'          => '#D5D5D5',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#B9A2FF',
			'quaternary'          => '#6837FF',
			'quinary'             => '#FFFFFF',
		),
		'papaya'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Papaya', 'turnkey-storefront' ),
			'primary'             => '#E24538',
			'primary-o'           => '#E24538',
			'primary-o.highlight' => '#EA776D',
			'secondary'           => '#EF6D00',
			'secondary.highlight' => '#FF8D2D',
			'nav'                 => '#DA5367',
			'warning'             => '#FFDE68',
			'product'             => '#F0F0F0',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#7E7E7E',
			'gray.light'          => '#C8C8C8',
			'gray.faint'          => '#DADADA',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#EA776D',
			'quaternary'          => '#CE2B1E',
			'quinary'             => '#FFFFFF',
		),
		'pink'              => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Pink', 'turnkey-storefront' ),
			'primary'             => '#D3328B',
			'primary-o'           => '#D3328B',
			'primary-o.highlight' => '#DE64A8',
			'secondary'           => '#7D4D4F',
			'secondary.highlight' => '#A16669',
			'nav'                 => '#1C77C3',
			'warning'             => '#FFFC31',
			'product'             => '#EEF0F4',
			'product.faint'       => '#E8E8E8',
			'gray'                => '#555A66',
			'gray.light'          => '#B5B9C0',
			'gray.faint'          => '#DEE1E7',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#DE64A8',
			'quaternary'          => '#B12673',
			'quinary'             => '#FFFFFF',
		),
		'professional'      => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Professional', 'turnkey-storefront' ),
			'primary'             => '#FF5F34',
			'primary-o'           => '#FF5F34',
			'primary-o.highlight' => '#FF8F71',
			'secondary'           => '#40A495',
			'secondary.highlight' => '#60C1B2',
			'nav'                 => '#3C83B0',
			'warning'             => '#F7B733',
			'product'             => '#FAFAFB',
			'product.faint'       => '#DFDCE3',
			'gray'                => '#90969E',
			'gray.light'          => '#CBC7D1',
			'gray.faint'          => '#F2F1F4',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#FF8F71',
			'quaternary'          => '#FF3B06',
			'quinary'             => '#FFFFFF',
		),
		'sand'              => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Sand', 'turnkey-storefront' ),
			'primary'             => '#999482',
			'primary-o'           => '#999482',
			'primary-o.highlight' => '#B4B1A4',
			'secondary'           => '#809C76',
			'secondary.highlight' => '#A1B69A',
			'nav'                 => '#4FA1A8',
			'warning'             => '#F9EA8C',
			'product'             => '#F3F3F0',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#787878',
			'gray.light'          => '#C0C0BE',
			'gray.faint'          => '#DDDDDA',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#B4B1A4',
			'quaternary'          => '#837D6B',
			'quinary'             => '#FFFFFF',
		),
		'soft'              => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Soft', 'turnkey-storefront' ),
			'primary'             => '#59517A',
			'primary-o'           => '#59517A',
			'primary-o.highlight' => '#756B9D',
			'secondary'           => '#B37C97',
			'secondary.highlight' => '#C9A3B6',
			'nav'                 => '#53A2BE',
			'warning'             => '#F5E9BA',
			'product'             => '#F2F2F2',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#8F8F8F',
			'gray.light'          => '#CACACA',
			'gray.faint'          => '#DADADA',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#756B9D',
			'quaternary'          => '#453F5E',
			'quinary'             => '#FFFFFF',
		),
		'spa'               => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Spa', 'turnkey-storefront' ),
			'primary'             => '#759190',
			'primary-o'           => '#759190',
			'primary-o.highlight' => '#97ACAB',
			'secondary'           => '#2997CF',
			'secondary.highlight' => '#57B0DE',
			'nav'                 => '#035DC0',
			'warning'             => '#F5D24E',
			'product'             => '#F6F9FC',
			'product.faint'       => '#DFE9EF',
			'gray'                => '#AFB7BE',
			'gray.light'          => '#DEE5EB',
			'gray.faint'          => '#E9EFF4',
			'white'               => '#FFFFFF',
			'black'               => '#222222',
			'tertiary'            => '#97ACAB',
			'quaternary'          => '#607877',
			'quinary'             => '#FFFFFF',
		),
		'spring'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Spring', 'turnkey-storefront' ),
			'primary'             => '#22A39B',
			'primary-o'           => '#22A39B',
			'primary-o.highlight' => '#2FD4C9',
			'secondary'           => '#18AB3A',
			'secondary.highlight' => '#20E04D',
			'nav'                 => '#549DBC',
			'warning'             => '#FFFF00',
			'product'             => '#E8E8E8',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#666666',
			'gray.light'          => '#BBBBBB',
			'gray.faint'          => '#F3F3F3',
			'white'               => '#FFFFFF',
			'black'               => '#222222',
			'tertiary'            => '#2FD4C9',
			'quaternary'          => '#1A7D77',
			'quinary'             => '#FFFFFF',
		),
		'sunrise'           => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Sunrise', 'turnkey-storefront' ),
			'primary'             => '#A80000',
			'primary-o'           => '#A80000',
			'primary-o.highlight' => '#E1472C',
			'secondary'           => '#41A62A',
			'secondary.highlight' => '#76D85B',
			'nav'                 => '#BBBBBB',
			'warning'             => '#FEDC45',
			'product'             => '#E8E8E8',
			'product.faint'       => '#B6B6B6',
			'gray'                => '#666666',
			'gray.light'          => '#BBBBBB',
			'gray.faint'          => '#F3F3F3',
			'white'               => '#FFFFFF',
			'black'               => '#262626',
			'tertiary'            => '#FFDDB5',
			'quaternary'          => '#E1472C',
			'quinary'             => '#FFFFFF',
		),
		'sunset'            => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Sunset', 'turnkey-storefront' ),
			'primary'             => '#AE271C',
			'primary-o'           => '#AE271C',
			'primary-o.highlight' => '#DD382A',
			'secondary'           => '#DB7C26',
			'secondary.highlight' => '#E49C5A',
			'nav'                 => '#009DE0',
			'warning'             => '#FFB400',
			'product'             => '#F7F7F7',
			'product.faint'       => '#DDDDDD',
			'gray'                => '#A7A7A7',
			'gray.light'          => '#D7D7D7',
			'gray.faint'          => '#E3E3E3',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#DD382A',
			'quaternary'          => '#861E16',
			'quinary'             => '#FFFFFF',
		),
		'terranova'         => array(
			'label'               => /* translators: color scheme name */
				esc_html__( 'Terra Nova', 'turnkey-storefront' ),
			'primary'             => '#A19566',
			'primary-o'           => '#A19566',
			'primary-o.highlight' => '#B8AF8C',
			'secondary'           => '#BD6A41',
			'secondary.highlight' => '#CD8D6E',
			'nav'                 => '#2274A5',
			'warning'             => '#F7DBA7',
			'product'             => '#F4F1EE',
			'product.faint'       => '#E3E3DD',
			'gray'                => '#767069',
			'gray.light'          => '#E6E3E1',
			'gray.faint'          => '#DCD8D3',
			'white'               => '#FFFFFF',
			'black'               => '#000000',
			'tertiary'            => '#B8AF8C',
			'quaternary'          => '#867C53',
			'quinary'             => '#FFFFFF',
		),
	);

	foreach ( $turnkey_color_schemes as &$args ) {

		$args['colors'] = array(
			// Links & Buttons.
			'header_textcolor'               => $args['primary'],
			'link_color'                     => $args['primary'],
			'button_color'                   => $args['primary'],
			'nav_text_color'                 => $args['nav'],
			'product_icon_colors'            => $args['primary-o'],
			// Backgrounds.
			'background_color'               => $args['product'],
			'hero_background_color'          => $args['primary-o.highlight'],
			'menu_background_color'          => $args['primary'],
			'footer_widget_background_color' => $args['gray.faint'],
			// Gray.
			'search_form_field'              => $args['gray.light'],
			'account_info'                   => $args['black'],
			'account_info_background'        => $args['product.faint'],
			// White.
			'footer_menu_text_color'         => $args['white'],
			'footer_text_color'              => $args['white'],
			'button_text_color'              => $args['white'],
			'sub_menu_text_color'            => $args['white'],
			// Color palette.
			'primary_color'                  => $args['primary'],
			'secondary_color'                => $args['secondary'],
			'tertiary_color'                 => $args['tertiary'],
			'quaternary_color'               => $args['quaternary'],
			'quinary_color'                  => $args['quinary'],
		);
	}

	$new_color_schemes = $turnkey_color_schemes + $color_schemes;

	return $new_color_schemes;
}

add_filter( 'primer_color_schemes', 'turnkey_storefront_color_schemes' );

