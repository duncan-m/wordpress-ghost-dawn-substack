<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
	<p class="post-meta"><span class="date"><?php echo get_the_date( 'M j Y' ); ?></span> - <span class="cat"><?php the_category(', '); ?></span> - <span class="readingt"><?php echo do_shortcode('[rt_reading_time label="Reading Time:" postfix="minutes"]'); ?></p>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<span class="texcerpt"><?php the_excerpt(); ?></span>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	<div class="apply-access"><p><a href="/apply">Apply for access to the full article</a> or <a href="/register">login</a></p></div>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-${ID} -->
