<?php
/**
 * The template for displaying archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Turnkey
 * @since   1.0.0
 */

get_header(); ?>

<section id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<?php if ( true === apply_filters( 'rstore_is_product', $post ) ) : ?>

					<?php get_template_part( 'templates/reseller-store/list-product' ); ?>

				<?php else : ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endif; ?>

			<?php endwhile; ?>

			<?php primer_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->

</section><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'tertiary' ); ?>

<?php get_footer(); ?>
