<?php
/**
 * The template for displaying reseller store posts in a list.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Turnkey Storefront
 * @since   1.0.3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'rstore-list-product' ); ?>>

	<?php

	/**
	 * Fires inside the `article` element, before the content.
	 *
	 * @hooked primer_wc_shop_messages - 10
	 *
	 * @since 1.0.3
	 */
	do_action( 'primer_before_post_content' );

	?>
	<div class="row">
		<div class="column medium-3">
		<?php get_template_part( 'templates/parts/loop/post', 'thumbnail' ); ?>
		</div>
		<div class="column medium-9">
			<div class="product-header">
				<?php get_template_part( 'templates/parts/loop/post', 'title' ); ?>
				<?php turnkey_storefront_price( $post ); ?>
			</div>
			<div class="product-summary">
				<div class="entry-summary">
					<?php get_template_part( 'templates/parts/loop/post', 'content' ); ?>
				</div>
				<a class="link" href="<?php the_permalink(); ?>" aria-label="<?php printf( /* translators: post title */ esc_attr__( 'More info %s', 'turnkey-storefront' ), esc_html( get_the_title() ) ); ?>"><?php printf( /* translators: right arrow (LTR) / left arrow (RTL) */ esc_html__( 'More Info %s', 'turnkey-storefront' ), is_rtl() ? '&larr;' : '&rarr;' ); ?></a>
			</div>
		</div>
	</div>

	<?php

	get_template_part( 'templates/parts/loop/post', 'footer' );

	/**
	 * Fires inside the `article` element, after the content.
	 *
	 * @since 1.0.3
	 */
	do_action( 'primer_after_post_content' );

	?>

</article><!-- #post-## -->
