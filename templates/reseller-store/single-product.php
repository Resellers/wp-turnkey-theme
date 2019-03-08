<?php
/**
 * The template for displaying reseller store single posts.
 *
 * Replaces /single.php and /content.php templates.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Turnkey
 * @since   1.0.3
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main"> <!-- single -->

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'rstore-product product' ); ?>> <!-- content -->

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
						</div>
					</div>
				</div>
				<?php get_template_part( 'templates/parts/loop/post', 'footer' ); ?>

				<?php

				/**
				 * Fires inside the `article` element, after the content.
				 *
				 * @since 1.0.3
				 */
				do_action( 'primer_after_post_content' );

				?>
			</article><!-- #content -->

			<?php primer_post_nav(); ?>

			<?php if ( comments_open() || get_comments_number() ) : ?>

				<?php comments_template(); ?>

		<?php endif; ?>

		<?php endwhile; ?>

	</main><!-- #single -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'tertiary' ); ?>

<?php get_footer(); ?>
