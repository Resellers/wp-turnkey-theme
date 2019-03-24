<?php
/**
 * Reseller Store compatibility.
 *
 * Provide compatibility fixes for the reseller store plugin
 *
 * @package    Compatibility
 * @subpackage Reseller_Store
 * @category   Core
 * @author     Bryan Focht
 * @since      1.0.3
 */

// Tell the plugin to not add the price or cart form to the post.
remove_filter( 'the_content', 'rstore_append_add_to_cart_form' );
remove_filter( 'the_excerpt', 'rstore_append_add_to_cart_form' );


/**
 * Returns true when viewing a single reseller store product.
 *
 * @since  1.0.3
 *
 * @return bool
 */
function turnkey_storefront_single_product() {
	return is_singular( array( 'reseller_product' ) );
}


/**
 * Load a custom template for reseller store product pages.
 *
 * @filter template_include
 * @since  1.0.3
 *
 * @param  string $template The path of the template to include.
 *
 * @return string
 */
function turnkey_storefront_template_single_product( $template ) {

	return ( turnkey_storefront_single_product() && locate_template( 'templates/reseller-store/single-product.php' ) ) ? get_template_part( 'templates/reseller-store/single-product' ) : $template;

}
add_filter( 'template_include', 'turnkey_storefront_template_single_product' );


/**
 * Set product image  to thumbnail for Reseller Store Products.
 *
 * @filter primer_featured_image_size
 * @since 1.0.3
 *
 * @param string $size default value for image size.
 *
 * @return string thumbnail if a Reseller_Store product, else $size
 */
function turnkey_storefront_featured_image_size( $size ) {

	global $post;

	return apply_filters( 'turnkey_storefront_is_product', $post ) ? 'thumbnail' : $size;
}
add_filter( 'primer_featured_image_size', 'turnkey_storefront_featured_image_size' );

/**
 * Prevent Reseller_Store product image from loading as the header image
 *
 * @filter primer_use_featured_hero_image
 * @since 1.0.3
 *
 * @return boolean False if a Reseller_Store product, else true
 *
 * @param bool $enabled default value for primer_use_featured_hero_image.
 */
function turnkey_storefront_use_featured_hero_image( $enabled ) {

	return turnkey_storefront_single_product() ? false : $enabled;

}
add_filter( 'primer_use_featured_hero_image', 'turnkey_storefront_use_featured_hero_image', 100 );

/**
 * Filter the Reseller_store product page title.
 *
 * @filter primer_the_page_title
 * @uses   [get_the_title](https://developer.wordpress.org/reference/functions/get_the_title/) To retreive the shop page title.
 *
 * @since  1.0.3
 *
 * @param  string $title  The page title.
 *
 * @return string Returns the page title.
 */
function turnkey_storefront_product_page_title( $title ) {

	return turnkey_storefront_single_product() ? '' : $title;

}
add_filter( 'primer_the_page_title', 'turnkey_storefront_product_page_title' );

/**
 * Add top nav menu if reseller store plugin is active.
 *
 * @action primer_before_header_wrapper
 * @since  1.0.0
 */
function turnkey_storefront_top_nav() {

	get_template_part( 'templates/top-nav' );

}
add_action( 'primer_header', 'turnkey_storefront_top_nav', 5 );

/**
 * Toggle the visibility of the support phone in the header.
 *
 * @filter turnkey_storefront_support_phone_classes
 * @since  1.0.0
 *
 * @param string $classes  HTML snippet for the the support phone number.
 *
 * @return string  Adds  rstore-support-block class when `show_support_phone` theme mod is true.
 */
function turnkey_storefront_support_phone_classes( $classes ) {

	if ( get_theme_mod( 'show_support_phone', true ) ) {

		$classes .= ' rstore-support-block';

	}

	return esc_attr( $classes );

}
add_filter( 'turnkey_storefront_support_phone_classes', 'turnkey_storefront_support_phone_classes' );

/**
 * Print the url from the Reseller Store plugin.
 *
 * @since  1.0.10
 *
 * @param string $url_key   Url Key to use for bulding url.
 * @param string $endpoint (optional) API endpoint to override the request with.
 */
function turnkey_storefront_rstore_url( $url_key, $endpoint = '' ) {

	if ( function_exists( 'rstore' ) ) {

		$url = rstore()->api->url( $url_key, $endpoint );

		echo esc_url( $url );

	}

}

/**
 * Print the product price cart form from the Reseller Store plugin.
 *
 * @since  1.1.4
 *
 * @param WP_Post $post Product WP_Post instance.
 */
function turnkey_storefront_price( $post ) {

	if ( function_exists( 'rstore_get_product_meta' ) ) {

		$id = rstore_get_product_meta( $post->ID, 'id' );

		if ( 'domain' === $id ) {

			return;

		}

		if ( function_exists( 'rstore_price' ) ) {

			echo wp_kses_post( rstore_price( $post->ID ) );

		}

		if ( function_exists( 'rstore_add_to_cart_form' ) ) {

			rstore_add_to_cart_form( $post->ID, true );

		}
	}

}
