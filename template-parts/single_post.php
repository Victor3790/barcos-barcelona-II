<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Barcos_Barcelona
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="hero hero--single"></div>
		<div style="padding: 30px 50px;">
			<div class="row">
				<div class="col-12">
					<?php the_title('<h1>', '</h1>'); ?>
					<div class="title-line title-line--center tittle-line--black" style="margin-bottom: 25px;"></div>
				</div>
				<div class="col-12 col-md-8">
					<?php the_content(); ?>
				</div>
				<div class="col-12 col-md-4 widget-container">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'barcos_barcelona' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'barcos_barcelona' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->