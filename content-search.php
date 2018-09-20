<?php
/**
 * The template part for displaying results in search pages.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 *
 * @package Turnkey
 * @since   1.0.0
 */

?>

<?php
if ( true === apply_filters( 'rstore_is_product', $post ) ) {

	return get_template_part( 'templates/reseller-store/list-product' );

}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'templates/parts/loop/post', 'title' ); ?>

	<?php get_template_part( 'templates/parts/loop/post', 'thumbnail' ); ?>

	<?php get_template_part( 'templates/parts/loop/post', 'excerpt' ); ?>

	<?php get_template_part( 'templates/parts/loop/post', 'search-footer' ); ?>

</article><!-- #post-## -->
